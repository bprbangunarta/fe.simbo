<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $default_user_value = [
            'email_verified_at' => now(),
            'password'          => '$2y$10$IgA0O6MkdYixSC79Fc6c/udgLLc7nFBiVIIaW/ysO8CpXce95pYAC', // 1
            'remember_token'    => Str::random(10),
        ];

        DB::beginTransaction();

        try {
            User::create(array_merge([
                'email'         => 'zulfadlirizal@gmail.com',
                'name'          => 'Zulfadli Rizal',
                'username'      => 'zulfame',
                'phone'         => '082320099971',
                'is_active'     => 1,
            ], $default_user_value));

            User::create(array_merge([
                'email'         => 'yandi@gmail.com',
                'name'          => 'Yandi Rosyandi',
                'username'      => 'yandi',
                'phone'         => '081242758273',
                'is_active'     => 1,
            ], $default_user_value));

            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
        }
    }
}
