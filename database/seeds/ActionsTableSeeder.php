<?php

use Illuminate\Database\Seeder;

class ActionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = new \Faker\Factory();

        for ($i = 0; $i < 280; $i++)
        {
            DB::table('tbl_actions')->insert([
                'id' => $faker->create($i)->randomNumber(),
                'customer_id' => $faker->create($i)->randomNumber(),
                'date_of_action' => $faker->create()->date(),
                'description' => $faker->create()->sentence(),
                'next_action' => $faker->create()->date(),
            ]);
        }
    }
}
