<?php

namespace App\Http\Controllers\Api;
// use Illuminate\Encryption\Encrypter;
// use Illuminate\Support\Facades\Crypt;
// use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Models\User;
use Validator;
use Illuminate\Http\Request;


class UserController extends Controller
{
    // public function fileUpload(Request $request)
    // {  
    //     //   dd($request->file('file'));
    //    $file = 'encrypted_file.txt';
      
    //   $f =  FileSafe::file($file);
    
    //     // if($request->file('file')) {
            
    //     //     //$file = base64_encode(file_get_contents($request->file('file')->pat‌​h('public/user')));
    //     //   $file = base64_encode($request->file('file')->store('public/user'));
         
    //     // //   $file = base64_decode(Storage::get('public/user'));

           
    //     //     $file = 'user/' . pathinfo($file)['basename'];
            
    //     // } else {
    //     //     $file = '';
    //     // }
        

        
    //     // if ($request->file) {
    //     //     $folderPath = "public/user";
           
    //     //     $base64Image = explode(";base64,", $request->file);
    //     //     $explodeImage = explode("user/", $base64Image[0]);
    //     //     //$imageType = $explodeImage[1];
    //     //    // $image_base64 = base64_decode($base64Image[1]);
    //     //     // $file = $folderPath . uniqid() . '. '.$imageType;
    //     //     $file = 'user/' . pathinfo($file)['basename'];
    //     //     file_put_contents($file, $image_base64);
    //     // }
    
    //         $users = User::create([
    //             // 'name' => $request->name,
    //             // 'email' => $request->email,
    //             // 'password' => $request->password,
              
    //             'file' => $file, 

    //           ]);
             
    //           if($users){
    //           $res = [
    //             'status' => 200,
    //             'success' => true,
    //             'message' => "User Data added successfully!",
    //             'result' => $users,
    //             ];
                
    //             return response()->json($res, 200);
    //         }
    //         else{
    
    //             $res = [
    //                 'status' => 404,
    //                 'success' => true,
    //                 'message' => "Something went wrong!",
    //                 'result' => null,
    //                 ];
                    
    //                 return response()->json($res, 404);
    //             }   
     
    // }
    public function fileUpload(Request $request)
        {
         
            $file  = $request->file('file'); 
           
            $rules = array('file' => 'required|mimes:png,gif,jpeg,jpg');  
           
            $validator = Validator::make(array('file'=> $file), $rules);
            
            if($validator->passes()) { 
                $file = $file->move('user', sprintf('%s-%s.%s', time(), "abc", explode('/', $file->getMimeType())[1]));
                $users  = new User; 
                $users->file      = $file->getFilename();
                $users->name      = $request->name;
                $users->email     = $request->email;
                $users->password  = $request->password;

               
                $users->save();
            }
            if($users){
                          $res = [
                            'status' => 200,
                            'success' => true,
                            'message' => "User Data added successfully!",
                            'result' => $users,
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

    // public function getFile(){
     
    //     $encryptedContent = Storage::get('file.dat');
    //     $decryptedContent = decrypt($encryptedContent);

    // }

    // public function getFile ($file)
    // {
    //     if(Storage::exists($file))
    //     {
    //         return Storage::disk('public/user')->get($file);
    //     }else
    //     {
    //         return 'No Image';
    //     }
    // }
}
