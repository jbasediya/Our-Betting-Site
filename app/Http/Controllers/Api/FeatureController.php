<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Feature;
use App\Http\Resources\FeatureResource;
use App\Http\Requests\FeatureRequest;


class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       

        
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
    public function store(FeatureRequest $request)
    {
        //($request->all());
        $features = new Feature();
        $features->betting_id = $request->betting_id;
        $features->description = $request->description;
        $features->status =  $request->status;
        $features->save(); 
        // $features = Feature::create([
             
        //     'betting_id' => $request->betting_id,
        //     'description' => $request->description,
        //         'status' => $request->status,
            
        //   ]);
          
          if($features){
          $res = [
            'status' => 200,
            'success' => true,
            'message' => "Features Data added successfully!",
            'result' => $features,
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
    public function show($id)
    {
        //
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
}
