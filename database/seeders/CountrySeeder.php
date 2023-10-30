<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert([
                
                 [
                    'name' => 'united kingdom','iso_code2' => 'GB', 'iso_code3' => 'GBR', 'num_code' => '826'
                ],
            
                [
                    'name' => 'ukraine', 'iso_code2' => 'UA', 'iso_code3' => 'UKR', 'num_code' => '804'
                ],
                [
                    'name' => 'australia', 'iso_code2' => 'AU', 'iso_code3' => 'AUS', 'num_code' => '036'
                ],
                [
                    'name' => 'canada', 'iso_code2' => 'CA', 'iso_code3' => 'CAN', 'num_code' => '124'
                ],
                [
                    'name' => 'kenya', 'iso_code2' => 'KE', 'iso_code3' => 'KEN', 'num_code' => '404'
                ],
                [
                    'name' => 'india', 'iso_code2' => 'IN', 'iso_code3' => 'IND', 'num_code' => '356'
                ],
                [ 
                    'name' => 'nigeria', 'iso_code2' => 'NG', 'iso_code3' => 'NGA', 'num_code' => '566'
                ],
                [   'name' => 'new zealand', 'iso_code2' => 'NZ', 'iso_code3' => 'NZL', 'num_code' => '554'
                
                ],
                [  
                    'name' => 'south africa', 'iso_code2' => 'ZA', 'iso_code3' => 'ZAF', 'num_code' => '710'
                ],
                [
                    'name' => 'ghana', 'iso_code2' => 'GH', 'iso_code3' => 'GHA', 'num_code' => '288'
                ],
                [
                    'name' => 'ireland', 'iso_code2' => 'IE', 'iso_code3' => 'IRL', 'num_code' => '372'
                ],
                
                [
                    'name' => 'mozambique', 'iso_code2' => 'MZ', 'iso_code3' => 'MOZ', 'num_code' => '508'
                ],
                
                [
                    'name' => 'zambia', 'iso_code2' => 'ZM', 'iso_code3' => 'ZMB', 'num_code' => '894'
                ],
                
                [
                    'name' => 'brazil', 'iso_code2' => 'BR', 'iso_code3' => 'BRA', 'num_code' => '076'
                ],
    
             ]

        );
       
    }
}
