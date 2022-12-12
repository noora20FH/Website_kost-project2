<?php

use App\User;
use Carbon\Carbon;
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
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('12345678'),
            'foto_ktp' => "",
            'no_hp' => '088225035926',
            'alamat' => 'Jakarta',
            'pekerjaan' => 'Admin',
            'bank' => 'BRI',
            'no_rekening' => '01312313131313',
            'avatar' => "",
            'status' => 1,
        ]);

        $admin->assignRole('admin');

        $user = User::create([
            'name' => 'Amalia',
            'email' => 'amalia@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('12345678'),
            'no_hp' => '08777777772',
            'foto_ktp' => "",
            'alamat' => 'Malang',
            'pekerjaan' => 'Mahasiswa',
            'bank' => 'BNI',
            'no_rekening' => '0889221212',
            'avatar' => "",
            'status' => 1,
        ]);

        $user->assignRole('user');

        
    }
}
