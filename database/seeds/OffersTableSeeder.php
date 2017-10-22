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


        for ($i = 0; $i < 400; $i++)
        {
            DB::table('offers')->insert([
                'customer_id'   => $faker->create()->numberBetween(1,50),
                'description'   => $faker->create()->text(50),
                'status'        => $faker->create()->numberBetween(0,1),
            ]);
        }
    }
}
