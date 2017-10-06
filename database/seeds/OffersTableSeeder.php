<?php

use Illuminate\Database\Seeder;

class OffersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = new \Faker\Factory();


        for ($i = 0; $i < 45; $i++)
        {
            DB::table('tbl_invoices')->insert([
                'id' => $faker->create($i)->randomNumber(),
                'customer_id' => $faker->create()->randomNumber(),
                'number' => $faker->create()->randomNumber(),
                'status' => $faker->create()->randomDigit(),
            ]);
        }
    }
}
