<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
   public function index(Request $request){
       $id= $request->id;
       $name="Donal Trump";
       $age="75";
       $data=['id'=>$id,'Name'=>$name,'Age'=>$age];
      if($data){
        return $data;
      }
     $name="access_token";
     $value="123-XYZ";
     $minutes=1;
     $path="/";
     $domain=$_SERVER['SERVER_NAME'];
     $secure=true;
     $httpOnly=true;
     return response()->cookie($name,$value,$minutes,$path,$domain,$secure,$httpOnly);

    }
}
