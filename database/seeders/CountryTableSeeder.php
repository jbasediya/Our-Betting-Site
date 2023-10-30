<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Country;
// use App\Models\State;
// use App\Models\City;
// use App\Models\CountryPhoneCode;
class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
          $countries = CountryHelper::countries();
            foreach ($countries as $country) {
                Country::firstOrCreate($country);
            }
    
            // $states = CountryHelper::states();
            // foreach ($states as $state) {
            //     State::firstOrCreate($state);
            // }
    
            // $cities = CountryHelper::cities();
            // foreach ($cities as $city) {
            //     City::firstOrCreate($city);
            // }
    
            // $codes = CountryCityStateHelper::phoneCodes();
            // foreach ($codes as $code) {
            //     CountryPhoneCode::create($code);
            // }
        
    }
}
