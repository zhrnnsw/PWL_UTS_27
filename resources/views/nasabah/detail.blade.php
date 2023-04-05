@extends('nasabah.layout')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Detail Nasabah
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>No Rekening: </b>{{$Nasabah->no_rekening}}</li>
                    <li class="list-group-item"><b>Nama: </b>{{$Nasabah->nama}}</li>
                    <li class="list-group-item"><b>Alamat: </b>{{$Nasabah->alamat}}</li>
                    <li class="list-group-item"><b>Jenis Tabungan: </b>{{$Nasabah->jenis_tabungan}}</li>
                    <li class="list-group-item"><b>Saldo: </b>{{$Nasabah->saldo}}</li>
                </ul>
            </div>
            <a class="btn btn-success mt-3" href="{{ route('nasabah.index') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection