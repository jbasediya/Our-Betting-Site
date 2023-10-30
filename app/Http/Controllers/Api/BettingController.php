<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\BettingResource;
use App\Http\Resources\Country_BettingResource;
use Illuminate\Http\Request;
use App\Models\Betting;
use App\Models\Country;
use App\Models\CountryBetting;
use Illuminate\Support\Str;
use App\Http\Requests\BettingRequest;



class BettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bettings = Betting::all();
          
      
        //  dd("test");
        if($bettings){
            $res = [
              'status' => 200,
              'success' => true,
              'message' => "Betting data fetched successfully!",
              'result' => BettingResource::collection($bettings),
              ];
              
              return response()->json($res, 200);
          }
          else{
  
              $res = [
                  'status' => 404,
                  'success' => true,
                  'message' => "Something went wrong!",
                  'result' => null,
                  ];
                  
                  return response()->json($res, 404);
              }   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function bettingInsert(BettingRequest $request)
    {   
       
     //dd($request->all());
    //  return $request->all();
   
      if($request->file('logo')) {
        $logo = $request->file('logo')->store('public/betting');
        $logo = 'betting/' . pathinfo($logo)['basename'];
        
    } else {
        $logo = '';
    }

        $bettings = Betting::create([
            'logo' => $logo,
            'name' => $request->name,
            'description' => $request->description,
            'bonus' => $request->bonus,
            'turnover' => $request->turnover,
            'min_odds' => $request->min_odds,
            'slug' => Str::slug($request->name),
            'website_url' => $request->website_url,
            'referral_url' => $request->referral_url,
            'review' => $request->review,
           
           
          ]);
         
          if($bettings){
          $res = [
            'status' => 200,
            'success' => true,
            'message' => "Betting Data added successfully!",
            'result' => $bettings,
            ];
            
            return response()->json($res, 200);
        }
        else{

            $res = [
                'status' => 404,
                'success' => true,
                'message' => "Something went wrong!",
                'result' => null,
                ];
                
                return response()->json($res, 404);
            }   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        
        $countries = Country::get();
        $country = $countries->where('slug', $slug)->first();
        $countryBetting =  CountryBetting::where('country_id',$country->id)->get();
        if($countries){
            $res = [
              'status' => 200,
              'success' => true,
              'message' => "Betting data fetched successfully!",
              'result' => Country_BettingResource::collection($countryBetting),
              ];
              
              return response()->json($res, 200);
          }
          else{
  
              $res = [
                  'status' => 404,
                  'success' => true,
                  'message' => "Something went wrong!",
                  'result' => null,
                  ];
                  
                  return response()->json($res, 404);
              }  
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }



    public function get_country(){

        $countries = Country::all();
      
        //  dd("test");
        if($countries){
            $res = [
              'status' => 200,
              'success' => true,
              'message' => "Country data fetched successfully!",
              'result' => $countries,
              ];
              
              return response()->json($res, 200);
          }
          else{
  
              $res = [
                  'status' => 404,
                  'success' => true,
                  'message' => "Something went wrong!",
                  'result' => null,
                  ];
                  
                  return response()->json($res, 404);
              } 
    }

    public function getBetting($slug)
    {
        
        $countries = Country::get();
        $country = $countries->where('slug', $slug)->first();
        
        if($country){
            $countryBetting =  CountryBetting::where('country_id',$country->id)->get();
            $res = [
              'status' => 200,
              'success' => true,
              'message' => "Betting data fetched successfully!",
              'result' => BettingResource::collection($countryBetting),
              ];
              
              return response()->json($res, 200);
          }
          else{
  
              $res = [
                  'status' => 404,
                  'success' => true,
                  'message' => "Something went wrong!",
                  'result' => null,
                  ];
                  
                  return response()->json($res, 404);
              }  
       
    }

    public function bettingFeature($slug)
    {
        $countries = Country::get();
      
        if($countries){
              $country = $countries->where('slug', $slug)->first();
              $countryBetting =  CountryBetting::where('country_id',$country->id)->get();
            $res = [
              'status' => 200,
              'success' => true,
              'message' => "Betting data fetched successfully!",
              'result' => Country_BettingResource::collection($countryBetting),
              ];
              
              return response()->json($res, 200);
          }
          else{
  
              $res = [
                  'status' => 404,
                  'success' => true,
                  'message' => "Something went wrong!",
                  'result' => null,
                  ];
                  
                  return response()->json($res, 404);
              }  
       
    }
    
    // public function getdummyBetting(Request $request)
    // {
        
    //     if($request->has('slug')){
    //       $slug =  $request->slug;
    //     }
    //     else{
    //         $slug =  'in';
    //     }
    //     $countries = Country::get();
    //     $country = $countries->where('slug', $slug)->first();
        
    //     if($country){
    //         $countryBetting =  CountryBetting::where('country_id',$country->id)->get();
    //         $res = [
    //           'status' => 200,
    //           'success' => true,
    //           'message' => "Betting data fetched successfully!",
    //           'result' => BettingResource::collection($countryBetting),
    //           ];
              
    //           return response()->json($res, 200);
    //       }
    //       else{
  
    //           $res = [
    //               'status' => 404,
    //               'success' => true,
    //               'message' => "Something went wrong!",
    //               'result' => null,
    //               ];
                  
    //               return response()->json($res, 404);
    //           }  
       
    // }
    
    
   
}
