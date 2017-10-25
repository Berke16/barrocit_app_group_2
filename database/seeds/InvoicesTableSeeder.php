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
        $customers = \App\Customer::all();
        $sendingDate = \Carbon\Carbon::createFromFormat('Y-m-d', '2017-7-18');

        $customer_one_count = 0;

        $customers_two_count = 0;


        foreach ($customers as $customer)
        {

            if ($customer->projects->get(0))
            {
                $customer_one_count++;
                // goed
                if ($customer_one_count > 5 && $customer_one_count <= 10)
                {
                    for ($i=0; $i <24; $i++)
                    {
                        DB::table('invoices')->insert([
                            'project_id'        => $customer->projects->first()->id,
                            'description'       => $faker->create()->sentence,
                            'price'             => $faker->create()->numberBetween(100, 400),
                            'payday2'           => now(),
                            'date_of_sending'   => $sendingDate,
                        ]);
                    }
                }
                //
                if ($customer_one_count > 10 && $customer_one_count <= 15)
                {
                    // goed
                    for ($i=0; $i<5;$i++)
                        DB::table('invoices')->insert([
                            'project_id'        => $customer->projects->first()->id,
                            'description'       => $faker->create()->sentence,
                            'price'             => 500,
                            'date_of_sending'   => $sendingDate
                        ]);
                }
                // goed
                if ($customer_one_count > 15 && $customer_one_count <= 20)
                {
                    for ($i=0; $i<3;$i++)
                        DB::table('invoices')->insert([
                            'project_id'        => $customer->projects->first()->id,
                            'description'       => $faker->create()->sentence,
                            'price'             => 500,
                            'date_of_sending'   => $sendingDate,
                        ]);
                    for ($i=0;$i<2;$i++)
                    {
                        DB::table('invoices')->insert([
                            'project_id'        => $customer->projects->first()->id,
                            'description'       => $faker->create()->sentence,
                            'price'             => 500,
                            'date_of_sending'   => $sendingDate,
                            'payday2'           => now(),
                        ]);
                    }
                }
                // goed
                if ($customer_one_count > 20 && $customer_one_count <= 25)
                {
                    for ($i=0; $i<3;$i++)
                    {
                        DB::table('invoices')->insert([
                            'project_id'        => $customer->projects->first()->id,
                            'description'       => $faker->create()->sentence,
                            'price'             => 400,
                            'payday2'           => now(),
                            'date_of_sending'   => $sendingDate
                        ]);
                    }
                    for ($i=0; $i<2;$i++)
                    {
                        DB::table('invoices')->insert([
                            'project_id'        => $customer->projects->first()->id,
                            'description'       => $faker->create()->sentence,
                            'price'             => 200,
                            'date_of_sending'   => $sendingDate
                        ]);
                    }
                }
                //goed
                if ($customer_one_count > 25 && $customer_one_count <= 30)
                {
                    for ($i=0; $i<1;$i++)
                    {
                        DB::table('invoices')->insert([
                            'project_id'        => $customer->projects->first()->id,
                            'description'       => $faker->create()->sentence,
                            'price'             => $faker->create()->numberBetween(100, 399),
                            'date_of_sending'   => $sendingDate,
                        ]);
                    }
                    for ($i=0; $i<4;$i++)
                    {
                        DB::table('invoices')->insert([
                            'project_id'        => $customer->projects->first()->id,
                            'description'       => $faker->create()->sentence,
                            'price'             => $faker->create()->numberBetween(100, 400),
                            'payday2'           => now(),
                        ]);
                    }
                }

                if ($customer->projects->get(1))
                {
                    $customers_two_count++;
                    //goed
                    if ($customers_two_count > 5 && $customers_two_count <= 10)
                    {
                        for ($i=0; $i<5;$i++)
                        {
                            DB::table('invoices')->insert([
                                'project_id'        => $customer->projects->get(0)->id,
                                'description'       => $faker->create()->sentence,
                                'price'             => $faker->create()->numberBetween(100, 400),
                                'date_of_sending'   => $sendingDate,
                                'payday2'           => now(),
                            ]);
                        }
                    }
                    //goed
                    if ($customers_two_count > 10 && $customers_two_count <= 15)
                    {
                        for ($i=0; $i<5;$i++)
                        {
                            DB::table('invoices')->insert([
                                'project_id'        => $customer->projects->get(0)->id,
                                'description'       => $faker->create()->sentence,
                                'price'             => $faker->create()->numberBetween(100, 400),
                                'date_of_sending'   => $sendingDate,
                                'payday2'           => now(),
                            ]);
                        }
                    }
                    //goed
                    if ($customers_two_count > 15 && $customers_two_count <= 20)
                    {
                        for ($i=0; $i<5;$i++)
                        {
                            DB::table('invoices')->insert([
                                'project_id'        => $customer->projects->get(1)->id,
                                'description'       => $faker->create()->sentence,
                                'price'             => $faker->create()->numberBetween(100, 400),
                                'date_of_sending'   => $sendingDate,
                                'payday2'           => now(),
                            ]);
                        }
                    }
                    // goed
                    if ($customers_two_count > 20 && $customers_two_count <= 25)
                    {
                        for ($i=0; $i<5;$i++)
                        {
                            DB::table('invoices')->insert([
                                'project_id'        => $customer->projects->get(0)->id,
                                'description'       => $faker->create()->sentence,
                                'price'             => 300,
                                'date_of_sending'   => $sendingDate,
                                'payday2'           => now(),
                            ]);
                        }
                        for ($i=0; $i<5;$i++)
                        {
                            DB::table('invoices')->insert([
                                'project_id'        => $customer->projects->get(1)->id,
                                'description'       => $faker->create()->sentence,
                                'price'             => 300,
                                'date_of_sending'   => $sendingDate,
                                'payday2'           => now(),
                            ]);
                        }
                    }
                    //goed
                    if ($customers_two_count > 25 && $customers_two_count <= 30)
                    {
                        for ($i=0; $i<5;$i++)
                        {
                            DB::table('invoices')->insert([
                                'project_id'        => $customer->projects->get(0)->id,
                                'description'       => $faker->create()->sentence,
                                'price'             => 10,
                                'date_of_sending'   => $sendingDate,
                            ]);
                        }
                        for ($i=0; $i<5;$i++)
                        {
                            DB::table('invoices')->insert([
                                'project_id'        => $customer->projects->get(1)->id,
                                'description'       => $faker->create()->sentence,
                                'price'             => 10,
                                'date_of_sending'   => $sendingDate,
                            ]);
                        }
                    }
                    //goed
                    if ($customers_two_count > 30 && $customers_two_count <= 35)
                    {
                        for ($i=0; $i<5;$i++)
                        {
                            DB::table('invoices')->insert([
                                'project_id'        => $customer->projects->get(0)->id,
                                'description'       => $faker->create()->sentence,
                                'price'             => 400,
                                'date_of_sending'   => $sendingDate,

                            ]);
                        }
                        for ($i=0; $i<5;$i++)
                        {
                            DB::table('invoices')->insert([
                                'project_id'        => $customer->projects->get(1)->id,
                                'description'       => $faker->create()->sentence,
                                'price'             => 400,
                                'date_of_sending'   => $sendingDate,
                            ]);
                        }
                    }
                    //goed
                    if ($customers_two_count > 35 && $customers_two_count <= 40)
                    {
                        for ($i=0; $i<2;$i++)
                        {
                            DB::table('invoices')->insert([
                                'project_id'        => $customer->projects->get(0)->id,
                                'description'       => $faker->create()->sentence,
                                'price'             => 400,
                                'date_of_sending'   => $sendingDate,
                                'payday2'           => now(),
                            ]);
                        }
                        for ($i=0; $i<3;$i++)
                        {
                            DB::table('invoices')->insert([
                                'project_id'        => $customer->projects->get(0)->id,
                                'description'       => $faker->create()->sentence,
                                'price'             => 600,
                                'date_of_sending'   => $sendingDate,
                            ]);
                        }
                        for ($i=0; $i<5;$i++)
                        {
                            DB::table('invoices')->insert([
                                'project_id'        => $customer->projects->get(1)->id,
                                'description'       => $faker->create()->sentence,
                                'price'             => 400,
                                'date_of_sending'   => $sendingDate,
                                'payday2'           => now(),
                            ]);
                        }
                    }
                    //goed
                    if ($customers_two_count > 40 && $customers_two_count <= 45)
                    {
                        for ($i=0; $i<5;$i++)
                        {
                            DB::table('invoices')->insert([
                                'project_id'        => $customer->projects->get(0)->id,
                                'description'       => $faker->create()->sentence,
                                'price'             => 400,
                                'date_of_sending'   => $sendingDate,
                                'payday2'           => now(),
                            ]);
                        }
                        for ($i=0; $i<2;$i++)
                        {
                            DB::table('invoices')->insert([
                                'project_id'        => $customer->projects->get(1)->id,
                                'description'       => $faker->create()->sentence,
                                'price'             => 500,
                                'date_of_sending'   => $sendingDate,
                                'payday2'           => now(),
                            ]);
                        }
                        for ($i=0;$i<3;$i++)
                        {
                            DB::table('invoices')->insert([
                                'project_id'        => $customer->projects->get(1)->id,
                                'description'       => $faker->create()->sentence,
                                'price'             => 400,
                                'date_of_sending'   => $sendingDate,
                            ]);
                        }
                    }
                    if ($customers_two_count > 45 && $customers_two_count <= 50)
                    {
                        for ($i=0; $i<2;$i++)
                        {
                            DB::table('invoices')->insert([
                                'project_id'        => $customer->projects->get(0)->id,
                                'description'       => $faker->create()->sentence,
                                'price'             => 40,
                                'date_of_sending'   => $sendingDate,
                                'payday2'           => now(),
                            ]);
                        }
                        for ($i=0; $i<3;$i++)
                        {
                            DB::table('invoices')->insert([
                                'project_id'        => $customer->projects->get(0)->id,
                                'description'       => $faker->create()->sentence,
                                'price'             => 50,
                                'date_of_sending'   => $sendingDate,
                            ]);
                        }
                        for ($i=0;$i<3;$i++)
                        {
                            DB::table('invoices')->insert([
                                'project_id'        => $customer->projects->get(1)->id,
                                'description'       => $faker->create()->sentence,
                                'price'             => 400,
                                'date_of_sending'   => $sendingDate,
                                'payday2'           => now(),
                            ]);
                        }
                        for ($i=0;$i<2;$i++)
                        {
                            DB::table('invoices')->insert([
                                'project_id'        => $customer->projects->get(1)->id,
                                'description'       => $faker->create()->sentence,
                                'price'             => 199,
                                'date_of_sending'   => $sendingDate,
                            ]);
                        }
                    }
                }
            }
        }
    }
}
