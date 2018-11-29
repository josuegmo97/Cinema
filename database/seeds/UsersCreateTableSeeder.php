<?php

use Illuminate\Database\Seeder;
use Cinema\User;

class UsersCreateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Administrado Gabriel',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
        ]);

        DB::table('users')->insert([
            'name' => 'Gabriel Marin',
            'email' => 'gabriel@admin.com',
            'password' => bcrypt('admin'),
        ]);

        DB::table('users')->insert([
            'name' => 'Kerin Tambasco',
            'email' => 'kerin.atm@gmail.com',
            'password' => bcrypt('alb75319'),
        ]);
    }
}
