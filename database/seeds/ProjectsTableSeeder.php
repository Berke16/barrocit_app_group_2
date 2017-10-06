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
        for ($i = 0; $i < 30; $i++)
        {
            DB::table('tbl_companys')->insert([
                'name' => $faker->create()->sentence(3)
            ]);
        }
    }
}
