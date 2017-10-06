<?php

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = new \Faker\Factory();

        for ($i = 0; $i < 50; $i++)
        {
            DB::table('tbl_customers')->insert([
                'id' => $faker->create($i)->randomNumber(),
                'name' => $faker->create()->company(),
                'street' => $faker->create()->streetName(),
                'housenumber' => $faker->create()->buildingNumber(),
                'zip_code' => $faker->create()->postcode(),
                'residence' => $faker->create()->country(),
                'cp_name' => $faker->create()->firstName(),
                'cp_lastname' => $faker->create()->lastName(),
                'cp_insertion' => $faker->create()->lastName(),
                'tele' => $faker->create()->phoneNumber(),
                'tele2' => $faker->create()->phoneNumber(),
                'fax_number' => $faker->create()->randomNumber(),
                'mail' => $faker->create()->companyEmail(),
                'banknumber' => $faker->create()->randomNumber(),
                'balance' => $faker->create()->randomNumber(),
                'limit' => $faker->create()->randomNumber(),
                'vat_code' => $faker->create()->randomDigit(),
                'prospect' => $faker->create()->randomDigit(),
                'ledgerbill' => $faker->create()->randomNumber(),
                'creditworthy' => $faker->create()->randomDigit(),
                'bcr' => $faker->create()->randomDigit(),
                'status' => $faker->create()->randomDigit(),
            ]);
        }

    }
}
