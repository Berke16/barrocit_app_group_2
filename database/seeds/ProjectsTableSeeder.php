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
        $startdate = \Carbon\Carbon::createFromFormat('Y-m-d', '2017-05-20');
        $enddate = \Carbon\Carbon::createFromFormat('Y-m-d', '2018-7-20');
        $payday = \Carbon\Carbon::createFromFormat('Y-m-d', '2018-4-29');

        $count = 0;
        foreach($customers as $customer){
            $count++;
            if ($count == 31)
            {
                $count = 0;
                break;
            }
            DB::table('projects')->insert([
                'customer_id'           => $customer->id,
                'name'                  => $faker->create()->name,
                'description'           => $faker->create()->sentence,
                'start_date'            => $startdate,
                'deadline'              => $enddate,
                'maintained_contract'   => $faker->create()->numberBetween(0,1),
                'applications'          => $faker->create()->sentence,
                'hardware'              => $faker->create()->sentence,
                'operating_system'      => $faker->create()->word,
                'price'                 => $faker->create()->numberBetween(800,9856),
                'amount'                => $faker->create()->numberBetween(1,36),
                'kind_of_terms'         => $faker->create()->numberBetween(0,2),
                'first_payday'          => $payday,
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
                    'start_date'            => $startdate,
                    'deadline'              => $enddate,
                    'maintained_contract'   => $faker->create()->numberBetween(0,1),
                    'applications'          => $faker->create()->sentence,
                    'hardware'              => $faker->create()->sentence,
                    'operating_system'      => $faker->create()->word,
                    'price'                 => $faker->create()->numberBetween(800,9856),
                    'amount'                => $faker->create()->numberBetween(1,36),
                    'kind_of_terms'         => $faker->create()->numberBetween(0,2),
                    'first_payday'          => $payday
                ]);

                DB::table('projects')->insert([
                    'customer_id' => $customer->id,
                    'name'                  => $faker->create()->name,
                    'description'           => $faker->create()->sentence,
                    'start_date'            => $startdate,
                    'deadline'              => $enddate,
                    'maintained_contract'   => $faker->create()->numberBetween(0,1),
                    'applications'          => $faker->create()->sentence,
                    'hardware'              => $faker->create()->sentence,
                    'operating_system'      => $faker->create()->word,
                    'price'                 => $faker->create()->numberBetween(800,9856),
                    'amount'                => $faker->create()->numberBetween(1,36),
                    'kind_of_terms'         => $faker->create()->numberBetween(0,2),
                    'first_payday'          => $payday
                ]);
            }

        }


    }
}
