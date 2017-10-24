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


        //people form Breda
        for ($i = 0; $i < 40; $i++)
        {
            DB::table('customers')->insert([
                'name'          => $faker->create()->company,
                'street'        => $faker->create()->streetName,
                'housenumber'   => $faker->create()->buildingNumber,
                'zip_code'      => $faker->create()->postcode,
                'residence'     => 'Breda',
                'cp_name'       => $faker->create()->firstName,
                'cp_lastname'   => $faker->create()->lastName,
                'cp_insertion'  => $faker->create()->lastName,
                'tele'          => $faker->create()->phoneNumber,
                'tele2'         => $faker->create()->phoneNumber,
                'fax_number'    => $faker->create()->phoneNumber,
                'mail'          => $faker->create()->companyEmail,
                'banknumber'    => $faker->create()->iban('nl'),
                'limit'         => $faker->create()->numberBetween(2,400),
                'vat_code'      => $fakerDutch->vat,
                'prospect'      => $faker->create()->numberBetween(0,1),
                'creditworthy'  => 1,
                'bcr'           => 1,
            ]);
        }
        // people with the same name
        for ($i = 0; $i < 10; $i++)
        {
            DB::table('customers')->insert([
                'name'          => 'Ferrock',
                'street'        => $faker->create()->streetName,
                'housenumber'   => $faker->create()->buildingNumber,
                'zip_code'      => $faker->create()->postcode,
                'residence'     => $faker->creatne()->city,
                'cp_name'       => $faker->create()->firstName,
                'cp_lastname'   => $faker->create()->lastName,
                'cp_insertion'  => $faker->create()->lastName,
                'tele'          => $faker->create()->phoneNumber,
                'tele2'         => $faker->create()->phoneNumber,
                'fax_number'    => $faker->create()->phoneNumber,
                'mail'          => $faker->create()->companyEmail,
                'banknumber'    => $faker->create()->iban('nl'),
                'limit'         => $faker->create()->numberBetween(2,400),
                'vat_code'      => $fakerDutch->vat,
                'prospect'      => 1,
                'creditworthy'  => 1,
                'bcr'           => 1,
            ]);
        }
    // people from oosterhoot with bcr check and creditworthy
        for ($i = 0; $i <10; $i++)
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
                'limit'         => $faker->create()->numberBetween(2,400),
                'vat_code'      => $fakerDutch->vat,
                'prospect'      => 1,
                'creditworthy'  => 1,
                'bcr'           => 1,
            ]);
        }
        // people from oosterhoot without bcr check and creditworthy
        for ($i = 0; $i <10; $i++)
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
                'limit'         => $faker->create()->numberBetween(2,400),
                'vat_code'      => $fakerDutch->vat,
                'prospect'      => 0,
                'creditworthy'  => 0,
                'bcr'           => 0,
            ]);
        }
        //people with the same streetname
        for ($i = 0; $i < 5; $i++)
        {
            DB::table('customers')->insert([
                'name'          => $faker->create()->name,
                'street'        => 'Terheidenseweg',
                'housenumber'   => $faker->create()->buildingNumber,
                'zip_code'      => $faker->create()->postcode,
                'residence'     => $faker->create()->city,
                'cp_name'       => $faker->create()->firstName,
                'cp_lastname'   => $faker->create()->lastName,
                'cp_insertion'  => $faker->create()->lastName,
                'tele'          => $faker->create()->phoneNumber,
                'tele2'         => $faker->create()->phoneNumber,
                'fax_number'    => $faker->create()->phoneNumber,
                'mail'          => $faker->create()->companyEmail,
                'banknumber'    => $faker->create()->iban('nl'),
                'limit'         => $faker->create()->numberBetween(2,400),
                'vat_code'      => $fakerDutch->vat,
                'prospect'      => 1,
                'creditworthy'  => 1,
                'bcr'           => 1,
            ]);
        }
        // people with random name and
        for($i=0;$i<175;$i++)
        {
            DB::table('customers')->insert([
                'name'          => $faker->create()->name,
                'street'        => $faker->create()->streetName,
                'housenumber'   => $faker->create()->buildingNumber,
                'zip_code'      => $faker->create()->postcode,
                'residence'     => $faker->create()->city,
                'cp_name'       => $faker->create()->firstName,
                'cp_lastname'   => $faker->create()->lastName,
                'cp_insertion'  => $faker->create()->lastName,
                'tele'          => $faker->create()->phoneNumber,
                'tele2'         => $faker->create()->phoneNumber,
                'fax_number'    => $faker->create()->phoneNumber,
                'mail'          => $faker->create()->companyEmail,
                'banknumber'    => $faker->create()->iban('nl'),
                'limit'         => $faker->create()->numberBetween(2,400),
                'vat_code'      => $fakerDutch->vat,
                'prospect'      => 1,
                'creditworthy'  => 1,
                'bcr'           => 1,
            ]);
        }

    }
}
