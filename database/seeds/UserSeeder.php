<?php

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
        $users = [
            [
            	'name' => 'jhon doe',
                'username' => 'admin', 
                'password' => bcrypt('123qwe123'), 
                'height' => '70',
                'weight' => '170',
                'age' => '18',
                'gender' => 'L',
                'level' => 'ADMIN',
            ],
            [
            	'name' => 'jhon snow',
                'username' => 'user', 
                'password' => bcrypt('123qwe123'), 
                'height' => '70',
                'weight' => '170',
                'age' => '18',
                'gender' => 'W',
                'level' => 'USER',
            ],
        ];

        foreach ($users as $data) {
        	$user = \App\User::create($data);
        }
    }
}
