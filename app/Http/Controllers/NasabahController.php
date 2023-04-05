<?php

namespace App\Http\Controllers;

use App\Models\Nasabah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class NasabahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //fungsi eloquent menampilkan data menggunakan pagination
        $nasabah = Nasabah::paginate(6); // Mengambil semua isi tabel
        $posts = Nasabah::orderBy('no_rekening', 'desc')->paginate(6);
        return view('nasabah.index', compact('nasabah'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('nasabah.create');
    }

    public function store(Request $request)
    {
        //melakukan validasi data
        $request->validate([
            'no_rekening' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'jenis_tabungan' => 'required', //required berarti di update
            'saldo' => 'required',
           
        ]);
            //fungsi eloquent untuk menambah data
        Nasabah::create($request->all());
            //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('nasabah.index')->with('success', 'nasabah Berhasil Ditambahkan');
    }

    public function show($no_rekening)
    {
        //menampilkan detail data dengan menemukan/berdasarkan no_rekening Nasabah
        $Nasabah = Nasabah::find($no_rekening);
        return view('nasabah.detail', compact('Nasabah'));
    }

    public function edit($no_rekening)
    {
        //menampilkan detail data dengan menemukan berdasarkan no_rekening nasabah untuk diedit
            $Nasabah = Nasabah::find($no_rekening);
            return view('nasabah.edit', compact('Nasabah'));
    }

    public function update(Request $request, $no_rekening)
    {
        //melakukan validasi data
        $request->validate([
            'no_rekening' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'jenis_tabungan' => 'required',
            'saldo' => 'required',
            
        ]);
            //fungsi eloquent untuk mengupdate data inputan kita
         Nasabah::find($no_rekening)->update($request->all());
            //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('nasabah.index')->with('success', 'Nasabah Berhasil Diupdate');
    }

    public function destroy($no_rekening)
    {
        //fungsi eloquent untuk menghapus data
        Nasabah::find($no_rekening)->delete();
        return redirect()->route('nasabah.index')-> with('success', 'Nasabah Berhasil Dihapus');
    }

    public function search(Request $request)
    {
        $keyword = $request->search;
        $nasabah = Nasabah::where('nama', 'like', "%" . $keyword . "%")->paginate(6);
        return view('nasabah.index', compact('nasabah'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}