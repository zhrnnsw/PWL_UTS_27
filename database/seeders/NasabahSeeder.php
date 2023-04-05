<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NasabahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'no_rekening' => '345876123',
                'nama' => 'Zahra Annisa Wahono',
                'alamat' => 'Jl. Semanggi Bar., Malang',
                'jenis_tabungan' => 'Platinum',
                'saldo' => '200000'
            ],
            [
                'no_rekening' => '123456789',
                'nama' => 'Gita Permata',
                'alamat' => 'Jl. Veteran , Malang',
                'jenis_tabungan' => 'Silver',
                'saldo' => '500.000'
            ],
            [
                'no_rekening' => '987654321',
                'nama' => 'Hadi Sutrisno',
                'alamat' => 'Jl. Kawi , Malang',
                'jenis_tabungan' => 'Gold',
                'saldo' => '2.000.000'
            ],
            [
                'no_rekening' => '246801356',
                'nama' => 'Indah Wulandari',
                'alamat' => 'Jl. Danau Bratan, Malang',
                'jenis_tabungan' => 'Platinum',
                'saldo' => '750.000'
            ],
            [
                'no_rekening' => '864209753',
                'nama' => 'Joko Susilo',
                'alamat' => 'Jl. Merdeka , Malang',
                'jenis_tabungan' => 'Gold',
                'saldo' => '1.500.000'
            ],
            [
                'no_rekening' => '741852963',
                'nama' => 'Kusuma Dewi',
                'alamat' => 'Jl. Basuki Rahmat, Malang',
                'jenis_tabungan' => 'Platinum',
                'saldo' => '4.000.000'
            ],
            [
                'no_rekening' => '369258148',
                'nama' => 'Lina Septiani',
                'alamat' => 'Jl. Diponegoro, Malang',
                'jenis_tabungan' => 'Platinum',
                'saldo' => '1.000.000'
            ],
            [
                'no_rekening' => '258147360',
                'nama' => 'Muhammad Yusuf',
                'alamat' => 'Jl. Karang Menjangan, Malang',
                'jenis_tabungan' => 'Silver',
                'saldo' => '2.750.000'
            ],
            [
                'no_rekening' => '147369250',
                'nama' => 'Nita Handayani',
                'alamat' => 'Jl. M.T. Haryono, Malang',
                'jenis_tabungan' => 'Platinum',
                'saldo' => '500.000'
            ],
            [
                'no_rekening' => '147369258',
                'nama' => 'Oki Rahmawati',
                'alamat' => 'Jl. Puncak Dieng, Malang',
                'jenis_tabungan' => 'Platinum',
                'saldo' => '1.750.000'
            ],
            [
                'no_rekening' => '258147300',
                'nama' => 'Putri Permatasari',
                'alamat' => 'Jl. Soekarno-Hatta, Malang',
                'jenis_tabungan' => 'Gold',
                'saldo' => '3.500.000'
            ],
            [
                'no_rekening' => '369258147',
                'nama' => 'Rudi Hartanto',
                'alamat' => 'Jl. Urip Sumoharjo, Malang',
                'jenis_tabungan' => 'Gold',
                'saldo' => '2.500.000'
            ],
            [
                'no_rekening' => '741852968',
                'nama' => 'Siti Mawarni',
                'alamat' => 'Jl. Ijen, Malang',
                'jenis_tabungan' => 'Silver',
                'saldo' => '1.500.000'
            ],
            [
                'no_rekening' => '864299753',
                'nama' => 'Tri Widodo',
                'alamat' => 'Jl. Simpang Balapan, Malang',
                'jenis_tabungan' => 'Platinum',
                'saldo' => '3.250.000'
            ],
            [
                'no_rekening' => '246801357',
                'nama' => 'Umi Sariyah',
                'alamat' => 'Jl. Gatot Subroto, Malang',
                'jenis_tabungan' => 'Silver',
                'saldo' => ' 4.500.000'
            ],
            [
                'no_rekening' => '98765432',
                'nama' => 'Vina Utami',
                'alamat' => 'Jl. Candi Gebang, Malang',
                'jenis_tabungan' => 'Platinum',
                'saldo' => '1.500.000'
            ],
            [
                'no_rekening' => '135792468',
                'nama' => 'Wahyu Prasetyo',
                'alamat' => 'Jl. Semeru, Malang',
                'jenis_tabungan' => 'Platinum',
                'saldo' => '1.000.000'
            ],
            [
                'no_rekening' => '111111111',
                'nama' => 'Xanthe Rahardjo',
                'alamat' => 'Jl. Mayjen Sungkono, Malang',
                'jenis_tabungan' => 'Gold',
                'saldo' => '1.250.000'
            ],
            [
                'no_rekening' => '222222222',
                'nama' => 'Yanti Kusuma',
                'alamat' => 'Jl. Cipto Mangunkusumo, Malang',
                'jenis_tabungan' => 'Platinum',
                'saldo' => '2.500.000'
            ],
            [
                'no_rekening' => '333333333',
                'nama' => 'Zainal Abidin',
                'alamat' => 'Jl. Diponegoro Barat, Malang',
                'jenis_tabungan' => 'Gold',
                'saldo' => ' 2.750.000'
            ],
            [
                'no_rekening' => '444444444',
                'nama' => 'Zulaikha Rahmawati',
                'alamat' => 'Jl. Candi Panggung, Malang',
                'jenis_tabungan' => 'Silver',
                'saldo' => '4.000.000'
            ],
            [
                'no_rekening' => '555555555',
                'nama' => 'Ahmad Subagio',
                'alamat' => 'Jl. Mayjen Sungkono, Malang',
                'jenis_tabungan' => 'Silver',
                'saldo' => '2.250.000'
            ],
            [
                'no_rekening' => '888888888',
                'nama' => 'Dian Pratama',
                'alamat' => 'Jl. Raya Tlogomas, Malang',
                'jenis_tabungan' => 'Silver',
                'saldo' => '3.250.000'
            ],
        ];
        DB::table('nasabah')->insert($data);
    }
}
