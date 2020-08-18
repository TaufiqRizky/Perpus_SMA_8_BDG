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
            'password' => Hash::make('admingtg'),
            'Role' => 'admin',
        ]);
        DB::table('users')->insert([
            'email' => 'trizky@gmail.com',
            'password' => Hash::make('10118080'),
            'Role' => 'guru',
        ]);

        DB::table('guru')->insert([
            'nip' => '10118080',
            'nama' => 'Taufiq',
            'alamat' => 'saturn',
            'jk' => 'L',
            'tgl_lahir' => '2020-08-17',
            'user_id' => '2',
        ]);
    }
}
