<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;

class AuthController extends Controller
{
    public function create(Request $request){

        $students=new Student();
        $students->fname=$request->input('fname');
        $students->lname=$request->input('lname');
        $students->email=$request->input('email');
        $students->password=$request->input('password');
     
        $students->save();

        return response()->json($students);


    }
}
