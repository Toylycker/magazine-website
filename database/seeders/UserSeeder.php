<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [['admin', '1', '865000000', 'admin123', 'admin@gmail.com'],
                 ['user', '0', '865234567', 'user123', 'user@gmail.com']];


        foreach($users as $user){
            $obj = new User();
            $obj->username = $user[0];
            $obj->password = bcrypt($user[3]);
            $obj->boss = $user[1];
            $obj->save();
        }
    }
}
