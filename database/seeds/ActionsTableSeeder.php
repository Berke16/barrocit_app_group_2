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
            DB::table('actions')->insert([
                'customer_id'       => $faker->create()->numberBetween(1,50),
                'date_of_action'    => $faker->create()->dateTimeBetween('-1 years', '1 years'),
                'time_of_action'    => $faker->create()->time('20:49:42'),
                'description'       => $faker->create()->sentence,
            ]);
        }
    }
}
