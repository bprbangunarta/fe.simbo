<?php

namespace Database\Seeders;

use App\Models\Nasabah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NasabahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::beginTransaction();

        try {
            Nasabah::create(array_merge(
                [
                    'user_id'       => 1,
                    'no_cif'        => '00133323711',
                    'no_ktp'        => '3213070701980004',
                    'no_tabungan'   => '0010101201041458',
                    'nama_nasabah'  => 'ZULFADLI RIZAL',
                    'alamat'        => 'KAMPUNG SUKAGALIH RT/RW 030/008 SUKAMULYA PAGADEN SUBANG',
                    'kelamin'       => 'L',
                ]
            ));

            Nasabah::create(array_merge(
                [
                    'user_id'       => 2,
                    'no_cif'        => '00133327921',
                    'no_ktp'        => '3213051201940008',
                    'no_tabungan'   => '0010101201046349',
                    'nama_nasabah'  => 'YANDI ROSYANDI',
                    'alamat'        => 'PEUTAG RT/RW 24/09 PRINGKASAP PABUARAN SUBANG',
                    'kelamin'       => 'L',
                ]
            ));

            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
        }
    }
}
