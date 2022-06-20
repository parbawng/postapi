<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
         //
         $users = array(
            array('id' => '1','name' => 'Admin','email' => 'admin@gmail.com','password' =>  Hash::make('12345678'), 'bio' => 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.'),
            array('id' => '2','name' => 'Editor','email' => 'editor@gmail.com','password' =>  Hash::make('12345678'), 'bio' => 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.'),
            array('id' => '3','name' => 'Writer','email' => 'writer@gmail.com','password' =>  Hash::make('12345678'), 'bio' => 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.'),
            array('id' => '4','name' => 'User','email' => 'user@gmail.com','password' =>  Hash::make('12345678'), 'bio' => 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.'),

        );

        foreach($users as $user) {
            User::create($user);
        }
    }
}
