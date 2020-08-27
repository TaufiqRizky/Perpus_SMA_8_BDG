<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class seederUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'email' => 'admin@gmail.com',
            'password' => Hash::make('iniadmin'),
            'Role' => 'admin',
        ]);
        DB::table('users')->insert([
            'email' => 'guru@gmail.com',
            'password' => Hash::make('iniguru'),
            'Role' => 'guru',
        ]);
        DB::table('users')->insert([
            'email' => 'siswa@gmail.com',
            'password' => Hash::make('inisiswa'),
            'Role' => 'siswa',
        ]);

        DB::table('guru')->insert([
            'nip' => '10118080',
            'nama' => 'Taufiq',
            'alamat' => 'saturn',
            'jk' => 'L',
            'tgl_lahir' => '2020-08-17',
            'user_id' => '2',
        ]);

        DB::table('siswa')->insert([
            'nis' => '15161212',
            'nama' => 'Taufiq Rizky',
            'alamat' => 'saturn',
            'jk' => 'L',
            'kelas' => 'XII-IPA2',
            'tgl_lahir' => '2000-08-19',
            'user_id' => '3',
        ]);
    }
}
