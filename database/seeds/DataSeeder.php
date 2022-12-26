<?php

use App\Data;
use App\Company;
use Illuminate\Database\Seeder;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Data::create([
            'company_id'    => Company::first()->id,
            'address'       => 'Av. Del Libertador Gral. San Martín 1501, B1650 San Martín, Provincia de Buenos Aires',
            'email'         => 'gochivilo@gmail.com.ar',
            'phone1'        => '+541147135236|+54 (11) 4713-5236',
            'phone3'        => '+549116050-2937|+54 9 (11) 6050-2937',
            'logo_header'   => 'images/data/logo_header.svg',
            'logo_footer'   => 'images/data/logo_footer.svg'
        ]);
         
    }
}
