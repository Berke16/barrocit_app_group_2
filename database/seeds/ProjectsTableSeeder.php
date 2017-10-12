<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = new \Faker\Factory();

        for ($i = 0; $i < 40; $i++)
        {
            DB::table('tbl_projects')->insert([
                'customer_id' => $faker->create()->numberBetween(1,50),
                'name' => $faker->create()->catchPhrase,
                'description' => $faker->create()->sentence,
                'start_date' => $faker->create()->date,
                'deadline' => $faker->create()->date,
                'maintained_contract' => $faker->create()->numberBetween(0,1),
                'applications' => $faker->create()->sentence,
                'hardware' => $faker->create()->sentence,
                'operating_system' => $faker->create()->word,
                'internal_cp' => $faker->create()->name,
                'price' => $faker->create()->numberBetween(800,9856),
                'amount' => $faker->create()->numberBetween(1,36),
                'kind_of_terms' => $faker->create()->numberBetween(0,2),
                'first_payday' =>$faker->create()->date,
            ]);
        }
    }
}
