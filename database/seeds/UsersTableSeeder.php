<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                [
                    'email' => 'develop@gmail.com',
                    'username' => 'dev',
                    'password' => bcrypt('123'),
                    'role' => 0,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'email' => 'admin@gmail.com',
                    'username' => 'admin',
                    'password' => bcrypt('123'),
                    'role' => 0,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'email' => 'test@gmail.com',
                    'username' => 'test',
                    'password' => bcrypt('12345678'),
                    'role' => 0,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
            ]
        );
    }
}
