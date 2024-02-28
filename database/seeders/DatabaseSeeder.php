<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        //  User::create([
            // 'name' => 'admin1',
            // 'email' => 'admin1@gmail.com',
            // 'password' => Hash::make('12345'),
            // 'nama_lengkap' => 'admin_satu',
            // 'alamat' => 'subang',
            // 'role' => 'administrator',
            // 'verifikasi' => 'sudah'
        //  ]);

        User::create([
            'name' => 'admin3',
            'email' => 'admin3@gmail.com',
            'password' => Hash::make('12345'),
            'nama_lengkap' => 'admin_tiga',
            'alamat' => 'subang',
            'role' => 'administrator',
            'verifikasi' => 'sudah'
         ]);

    }
}
