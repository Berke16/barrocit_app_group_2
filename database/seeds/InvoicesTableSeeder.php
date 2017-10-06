<?php

use Illuminate\Database\Seeder;

class InvoicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = new \Faker\Factory();

        for ($i = 0; $i < 30; $i++)
        {
            DB::table('tbl_invoices')->insert([
                'id' => $faker->create($i)->randomNumber(),
                'project_id' => $faker->create()->randomNumber(),
                'description' => $faker->create()->sentence(),
                'price' => $faker->create()->randomNumber(),
                'date_of_sending' => $faker->create()->date(),
                'status' => $faker->create()->randomDigit(),
            ]);
        }
    }
}
