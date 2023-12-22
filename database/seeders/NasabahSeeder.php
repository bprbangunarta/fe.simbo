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
                    'no_cif'        => '00100107853',
                    'no_ktp'        => '3213070701980004',
                    'nama_nasabah'  => 'ZULFADLI RIZAL',
                    'alamat'        => 'KAMPUNG SUKAGALIH RT/RW 030/008 SUKAMULYA PAGADEN SUBANG	',
                    'kelamin'       => 'L',
                ]
            ));

            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
        }
    }
}
