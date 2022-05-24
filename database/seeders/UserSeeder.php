<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nama' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'role' => 'admin',
            'ipk' => 3.5,
            'jml_tanggungan' => 2,
            'ukt' => 2000000,
            'penghasilan_ortu' => 2500000,
        ]);
        User::create([
            'nama' => 'user',
            'email' => 'user@gmail.com',
            'password' => bcrypt('user'),
            'ipk' => 3.59,
            'jml_tanggungan' => 4,
            'ukt' => 5000000,
            'penghasilan_ortu' => 9000000,
        ]);
        User::create([
            'nama' => 'user2',
            'email' => 'user2@gmail.com',
            'password' => bcrypt('user2'),
            'ipk' => 3.92,
            'jml_tanggungan' => 1,
            'ukt' => 1500000,
            'penghasilan_ortu' => 1500000,
        ]);

        for ($i = 0; $i < 200; $i++) {
            $ipk = rand(100, 400) / 100;
            $jml_tanggungan = rand(1, 15);
            $ukt = rand(1000000, 15000000);
            $penghasilan_ortu = rand(1000000, 15000000);
            User::create([
                'nama' => 'Mahasiswa ' . $i,
                'email' => 'mahasiswa' . $i . '@gmail.com',
                'password' => bcrypt('mahasiswa' . $i),
                'ipk' => $ipk,
                'jml_tanggungan' => $jml_tanggungan,
                'ukt' => $ukt,
                'penghasilan_ortu' => $penghasilan_ortu,
            ]);
        }
    }
}
