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

        $fakerDutch = new Faker\Generator();
        $fakerDutch->addProvider(new Faker\Provider\nl_NL\Company($fakerDutch));

        for ($i = 0; $i < 250; $i++)
        {
            DB::table('customers')->insert([
                'name'          => $faker->create()->company,
                'street'        => $faker->create()->streetName,
                'housenumber'   => $faker->create()->buildingNumber,
                'zip_code'      => $faker->create()->postcode,
                'residence'     => $faker->create()->country,
                'cp_name'       => $faker->create()->firstName,
                'cp_lastname'   => $faker->create()->lastName,
                'cp_insertion'  => $faker->create()->lastName,
                'tele'          => $faker->create()->phoneNumber,
                'tele2'         => $faker->create()->phoneNumber,
                'fax_number'    => $faker->create()->phoneNumber,
                'mail'          => $faker->create()->companyEmail,
                'banknumber'    => $faker->create()->iban('nl'),
                'limit'         => $faker->create()->numberBetween(1,400),
                'vat_code'      => $fakerDutch->vat,
                'prospect'      => $faker->create()->numberBetween(0,1),
                'creditworthy'  => $faker->create()->numberBetween(0,1),
                'bcr'           => $faker->create()->numberBetween(0,1),
            ]);
        }
        //people form Breda
        for ($i = 0; $i < 39; $i++)
        {
            DB::table('customers')->insert([
                'name'          => $faker->create()->company,
                'street'        => $faker->create()->streetName,
                'housenumber'   => $faker->create()->buildingNumber,
                'zip_code'      => $faker->create()->postcode,
                'residence'     => 'breda',
                'cp_name'       => $faker->create()->firstName,
                'cp_lastname'   => $faker->create()->lastName,
                'cp_insertion'  => $faker->create()->lastName,
                'tele'          => $faker->create()->phoneNumber,
                'tele2'         => $faker->create()->phoneNumber,
                'fax_number'    => $faker->create()->phoneNumber,
                'mail'          => $faker->create()->companyEmail,
                'banknumber'    => $faker->create()->iban('nl'),
                'limit'         => $faker->create()->numberBetween(1,400),
                'vat_code'      => $fakerDutch->vat,
                'prospect'      => $faker->create()->numberBetween(0,1),
                'creditworthy'  => 1,
                'bcr'           => 1,
            ]);
        }
        for ($i = 0; $i < 9; $i++)
        {
            DB::table('customers')->insert([
                'name'          => 'Ferrock',
                'street'        => $faker->create()->streetName,
                'housenumber'   => $faker->create()->buildingNumber,
                'zip_code'      => $faker->create()->postcode,
                'residence'     => $faker->create()->country,
                'cp_name'       => $faker->create()->firstName,
                'cp_lastname'   => $faker->create()->lastName,
                'cp_insertion'  => $faker->create()->lastName,
                'tele'          => $faker->create()->phoneNumber,
                'tele2'         => $faker->create()->phoneNumber,
                'fax_number'    => $faker->create()->phoneNumber,
                'mail'          => $faker->create()->companyEmail,
                'banknumber'    => $faker->create()->iban('nl'),
                'limit'         => $faker->create()->numberBetween(1,400),
                'vat_code'      => $fakerDutch->vat,
                'prospect'      => 0,
                'creditworthy'  => 0,
                'bcr'           => 0,
            ]);
        }

        for ($i = 0; $i <9; $i++)
        {
            DB::table('customers')->insert([
                'name'          => $faker->create()->name,
                'street'        => $faker->create()->streetName,
                'housenumber'   => $faker->create()->buildingNumber,
                'zip_code'      => $faker->create()->postcode,
                'residence'     => 'Oosterhout',
                'cp_name'       => $faker->create()->firstName,
                'cp_lastname'   => $faker->create()->lastName,
                'cp_insertion'  => $faker->create()->lastName,
                'tele'          => $faker->create()->phoneNumber,
                'tele2'         => $faker->create()->phoneNumber,
                'fax_number'    => $faker->create()->phoneNumber,
                'mail'          => $faker->create()->companyEmail,
                'banknumber'    => $faker->create()->iban('nl'),
                'limit'         => $faker->create()->numberBetween(1,400),
                'vat_code'      => $fakerDutch->vat,
                'prospect'      => 1,
                'creditworthy'  => 1,
                'bcr'           => 1,
            ]);
        }
        for ($i = 0; $i <9; $i++)
        {
            DB::table('customers')->insert([
                'name'          => $faker->create()->name,
                'street'        => $faker->create()->streetName,
                'housenumber'   => $faker->create()->buildingNumber,
                'zip_code'      => $faker->create()->postcode,
                'residence'     => 'Oosterhout',
                'cp_name'       => $faker->create()->firstName,
                'cp_lastname'   => $faker->create()->lastName,
                'cp_insertion'  => $faker->create()->lastName,
                'tele'          => $faker->create()->phoneNumber,
                'tele2'         => $faker->create()->phoneNumber,
                'fax_number'    => $faker->create()->phoneNumber,
                'mail'          => $faker->create()->companyEmail,
                'banknumber'    => $faker->create()->iban('nl'),
                'limit'         => $faker->create()->numberBetween(1,400),
                'vat_code'      => $fakerDutch->vat,
                'prospect'      => 0,
                'creditworthy'  => 0,
                'bcr'           => 0,
            ]);
        }
        for ($i = 0; $i <4; $i++)
        {
            DB::table('customers')->insert([
                'name'          => $faker->create()->name,
                'street'        => 'terheidenseweg',
                'housenumber'   => $faker->create()->buildingNumber,
                'zip_code'      => $faker->create()->postcode,
                'residence'     => $faker->create()->country,
                'cp_name'       => $faker->create()->firstName,
                'cp_lastname'   => $faker->create()->lastName,
                'cp_insertion'  => $faker->create()->lastName,
                'tele'          => $faker->create()->phoneNumber,
                'tele2'         => $faker->create()->phoneNumber,
                'fax_number'    => $faker->create()->phoneNumber,
                'mail'          => $faker->create()->companyEmail,
                'banknumber'    => $faker->create()->iban('nl'),
                'limit'         => $faker->create()->numberBetween(1,400),
                'vat_code'      => $fakerDutch->vat,
                'prospect'      => 1,
                'creditworthy'  => 1,
                'bcr'           => 1,
            ]);
        }
        for($i=0;$i<174;$i++)
        {
            DB::table('customers')->insert([
                'name'          => $faker->create()->name,
                'street'        => $faker->create()->streetName,
                'housenumber'   => $faker->create()->buildingNumber,
                'zip_code'      => $faker->create()->postcode,
                'residence'     => $faker->create()->country,
                'cp_name'       => $faker->create()->firstName,
                'cp_lastname'   => $faker->create()->lastName,
                'cp_insertion'  => $faker->create()->lastName,
                'tele'          => $faker->create()->phoneNumber,
                'tele2'         => $faker->create()->phoneNumber,
                'fax_number'    => $faker->create()->phoneNumber,
                'mail'          => $faker->create()->companyEmail,
                'banknumber'    => $faker->create()->iban('nl'),
                'limit'         => $faker->create()->numberBetween(1,400),
                'vat_code'      => $fakerDutch->vat,
                'prospect'      => 1,
                'creditworthy'  => 1,
                'bcr'           => 1,
            ]);
        }

    }
}
