<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    const ROLE_ADMIN = 'admin';
    const ROLE_CUSTOMER = 'user';

    public function run()
    {
        $admin = User::create([
            'nama'=> 'Admin',
            'username' => 'Admin',
            'phone'=>'082274168229',
            'Alamat'=> 'Sigumpar',
            'image'=> 'admin.JPEG',
            'email'=> 'admin@gmail.com',
            'password'=> Hash::make('admin123')
        ]);
        $admin->assignRole(self::ROLE_ADMIN);

        $user = User::create([
            'nama'=> 'Agus Sitorus',
            'username' => 'agus321',
            'phone'=> '082274168228',
            'image'=>'user.JPEG',
            'alamat'=>'janjimaria',
            'email'=> 'agussitorus24@gmail.com',
            'password'=> Hash::make('agus12345')
        ]);
        $user->assignRole(self::ROLE_CUSTOMER);
    }
}
