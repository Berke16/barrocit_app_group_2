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
        DB::table('users')->insert([
            'name'      => 'VerusLucian',
            'email'     => 'minelukasz@gmail.com',
            'password'  => bcrypt('kaczka'),
            'type'      => 'sales'
            ]);

        DB::table('users')->insert([
            'name'      => 'sales',
            'email'     => 'sales@barroc-it.nl',
            'password'  => bcrypt('sales'),
            'type'      => 'sales'
        ]);
        DB::table('users')->insert([
           'name'       => 'development',
           'email'      => 'development@barroc-it.nl',
           'password'   => bcrypt('development'),
           'type'       => 'development',
        ]);

        DB::table('users')->insert([
           'name'       => 'finance',
           'email'      => 'finance@barroc-it.nl',
           'password'   => bcrypt('finance'),
           'type'       => 'finance'
        ]);

        DB::table('users')->insert([
            'name'       => 'admin',
            'email'      => 'admin@barroc-it.nl',
            'password'   => bcrypt('admin'),
            'type'       => 'admin'
        ]);




    }
}
