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
        $customers = \App\Customer::all()->where('bcr', '=', 1);

        $count = 0;
        foreach($customers as $customer){
            $count++;
            if ($count == 31)
            {
                $count = 0;
                break;
            }
            DB::table('projects')->insert([
                'customer_id' => $customer->id,
                'name'                  => $faker->create()->name,
                'description'           => $faker->create()->sentence,
                'start_date'            => $faker->create()->date,
                'deadline'              => $faker->create()->date,
                'maintained_contract'   => $faker->create()->numberBetween(0,1),
                'applications'          => $faker->create()->sentence,
                'hardware'              => $faker->create()->sentence,
                'operating_system'      => $faker->create()->word,
                'price'                 => $faker->create()->numberBetween(800,9856),
                'amount'                => $faker->create()->numberBetween(1,36),
                'kind_of_terms'         => $faker->create()->numberBetween(0,2),
                'first_payday'          => $faker->create()->date,
            ]);
        }

        foreach($customers as $customer)
        {
            $count++;
            if ($count <= 30)
            {
            }
            else{
                if ($count == 81)
                {
                    break;
                }
                DB::table('projects')->insert([
                    'customer_id' => $customer->id,
                    'name'                  => $faker->create()->name,
                    'description'           => $faker->create()->sentence,
                    'start_date'            => $faker->create()->date,
                    'deadline'              => $faker->create()->date,
                    'maintained_contract'   => $faker->create()->numberBetween(0,1),
                    'applications'          => $faker->create()->sentence,
                    'hardware'              => $faker->create()->sentence,
                    'operating_system'      => $faker->create()->word,
                    'price'                 => $faker->create()->numberBetween(800,9856),
                    'amount'                => $faker->create()->numberBetween(1,36),
                    'kind_of_terms'         => $faker->create()->numberBetween(0,2),
                    'first_payday'          => $faker->create()->date,
                ]);

                DB::table('projects')->insert([
                    'customer_id' => $customer->id,
                    'name'                  => $faker->create()->name,
                    'description'           => $faker->create()->sentence,
                    'start_date'            => $faker->create()->date,
                    'deadline'              => $faker->create()->date,
                    'maintained_contract'   => $faker->create()->numberBetween(0,1),
                    'applications'          => $faker->create()->sentence,
                    'hardware'              => $faker->create()->sentence,
                    'operating_system'      => $faker->create()->word,
                    'price'                 => $faker->create()->numberBetween(800,9856),
                    'amount'                => $faker->create()->numberBetween(1,36),
                    'kind_of_terms'         => $faker->create()->numberBetween(0,2),
                    'first_payday'          => $faker->create()->date,
                ]);
            }

        }


    }
}
