<?php

namespace Database\Seeders;

use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'first_name'   => "Azka",
            'last_name'    => 'DEV',
            'email'        => "root@admin.com",
            'password'     => "Password123",
            'uuid'         => Uuid::uuid4()
        ];
        $user = Sentinel::registerAndActivate($data);
        $role = Sentinel::findRoleBySlug('root_admin');
        $role->users()->attach($user);
    }
}
