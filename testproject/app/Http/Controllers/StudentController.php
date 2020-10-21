<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;

class StudentController extends Controller
{
    function list(){

        return Student::all();
    }

    
function add(Request $req){
    
    $students=new Student();

    $students->name=$req->name;
    $students->email=$req->email;
    $students->address=$req->address;
   
    $result=$students->save();

  return response()->json($result);

    }

 function getdataupdate(Request $req){

 $students=Student::find($req->id);

 $students->name=$req->name;
 
 $students->email=$req->email;

 $students->address=$req->address;

 $updatedresult=$students->save();

 if($updatedresult){

    return['message'=>'result is updated'];
 }else{

    return['message'=>'result is not  updated'];


 }


 }

 
 public function delete($id){

    $students=Student::find($id);

    $results=$students->delete();

    if($results){

        return['message'=>'data is deleted'];
    }
else{

    return['message'=>'data is not deleted'];


}

 }

public function search($name){

    return Student::where('name',$name)->get();



}

}
