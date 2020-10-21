<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\student;

class ApiController extends Controller
{
    public function create(Request $request){

   $students=new student();

   $students->fname = $request->fname;
   $students->lname = $request->lname;
   $students->email = $request->email;
   $students->password = $request->password;

   $students->save();
   return response()->json($students);
    }
}
