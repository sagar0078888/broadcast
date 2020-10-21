<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UserController extends Controller
{
   public function index(){
     
    $user=new User();
    $user->name="sagar";
    $user->email="sagar@gmail.com";
    $user->password="sagar12334";
   $user->save();

   }
}
