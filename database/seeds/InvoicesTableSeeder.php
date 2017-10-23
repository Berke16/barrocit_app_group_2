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
        $customers = DB::table('customer');
        $projects = DB::table('project');

        foreach($customers->where($projects->count() == 1) as $project)
        {
            for ($i = 0; $i <4; $i++)
            {
                for ($i=0;$i<23;$i++)
                DB::table('invoices')->insert([
                    'project_id'        => $project->id,
                    'description'       => $faker->create()->sentence,
                    'price'             => $faker->create()->numberBetween(100, 400),
                    'payday2'           => now(),
                    'date_of_sending'   => $faker->create()->date,
                ]);
            }
            for ($i=0;$i<4;$i++)
            {
                for ($i=0;$i<4;$i++)
                {
                    DB::table('invoices')->insert([
                        'project_id'        => $project->id,
                        'description'       => $faker->create()->sentence,
                        'price'             => $faker->create()->numberBetween(1000, 4000),
                        'date_of_sending'   => $faker->create()->date,
                    ]);
                }
            }
            for ($i=0;$i<4;$i++)
            {
                for ($i=0;$i<1;$i++)
                {
                    DB::table('invoices')->insert([
                        'project_id'        => $project->id,
                        'description'       => $faker->create()->sentence,
                        'price'             => $faker->create()->numberBetween(100, 400),
                        'payday2'           => now(),
                        'date_of_sending'   => $faker->create()->date,
                    ]);
                }
                for ($i=0;$i<2;$i++)
                {
                    DB::table('invoices')->insert([
                        'project_id'        => $project->id,
                        'description'       => $faker->create()->sentence,
                        'price'             => $faker->create()->numberBetween(1000, 4000),
                        'date_of_sending'   => $faker->create()->date,
                    ]);
                }
            }
            for($i=0;$i<4;$i++)
            {
                for ($i=0;$i<2;$i++)
                {
                    DB::table('invoices')->insert([
                        'project_id'        => $project->id,
                        'description'       => $faker->create()->sentence,
                        'price'             => 400,
                        'payday2'           => now(),
                        'date_of_sending'   => $faker->create()->date,
                    ]);
                }
                for ($i=0;$i<1;$i++)
                {
                    DB::table('invoices')->insert([
                        'project_id'        => $project->id,
                        'description'       => $faker->create()->sentence,
                        'price'             => 400,
                        'date_of_sending'   => $faker->create()->date,
                    ]);
                }
            }
            for($i=0;$i<4;$i++)
            {
                for ($i=0;$i<3;$i++)
                {
                    DB::table('invoices')->insert([
                        'project_id'        => $project->id,
                        'description'       => $faker->create()->sentence,
                        'price'             => 1,
                        'payday2'           => now(),
                        'date_of_sending'   => $faker->create()->date,
                    ]);
                }

                    DB::table('invoices')->insert([
                        'project_id'        => $project->id,
                        'description'       => $faker->create()->sentence,
                        'price'             => 1,
                        'date_of_sending'   => $faker->create()->date,
                    ]);

            }

        }
        foreach($customers->where($projects->count() == 2) as $project)
        {
            for ($i=0;$i<4;$i++)
            {
                    DB::table('invoices')->insert()->where()->$project->count()([
                        'project_id'        => $project->id,
                        'description'       => $faker->create()->sentence,
                        'price'             => 100,
                        'payday2'           => now(),
                        'date_of_sending'   => $faker->create()->date,
                    ]);
            }

            for ($i=0;$i<4;$i++)
            {
                DB::table('invoices')->insert()->where()->count(2)([
                    'project_id'        => $project->id,
                    'description'       => $faker->create()->sentence,
                    'price'             => 100,
                    'payday2'           => now(),
                    'date_of_sending'   => $faker->create()->date,
                ]);
            }
            for ($i=0;$i<4;$i++) {
                DB::table('invoices')->insert()->where()->count(1)([
                    'project_id' => $project->id,
                    'description' => $faker->create()->sentence,
                    'price' => 100,
                    'payday2' => now(),
                    'date_of_sending' => $faker->create()->date,
                ]);

                DB::table('invoices')->insert()->where()->count(2)([
                    'project_id' => $project->id,
                    'description' => $faker->create()->sentence,
                    'price' => 100,
                    'payday2' => now(),
                    'date_of_sending' => $faker->create()->date,
                ]);
            }
            for ($i=0;$i<4;$i++) {
                DB::table('invoices')->insert()->where()->count(1)([
                    'project_id' => $project->id,
                    'description' => $faker->create()->sentence,
                    'price' => 10,

                    'date_of_sending' => $faker->create()->date,
                ]);

                DB::table('invoices')->insert()->where()->count(2)([
                    'project_id' => $project->id,
                    'description' => $faker->create()->sentence,
                    'price' => 10,
                    'date_of_sending' => $faker->create()->date,
                ]);
            }
        break;
        }
    }
}
