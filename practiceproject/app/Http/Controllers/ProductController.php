<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\newmodel;

class ProductController extends Controller
{
    function getnewdata(){
  
        return newmodel::all();


    }

    function add(Request $request){
     $products=new newmodel();
    $products->name=$request->name;

    $products->email=$request->email;

    //$products->email=$request->email;
    $products->address=$request->address;

    $result=$products->save();
    
    if($result){

        return['Result'=>'Data is saved'];


    }
    else {

       return['Result'=>'Data is not saved'];
    }

}

function update(Request $req){

    $product=newmodel::find($req->id);

    $product->name=$req->name;

    $product->email=$req->email;

    $product->address=$req->address;

    $res=$product->save();
  if($res){


    return['Result'=>'data is updated'];
  }
else{

    return['Result'=>'data is not updated'];


}
}
public function destroy($id){

    $product=newmodel::find($id);
  $res=$product->delete();

  if($res){

    return['Result'=>'Data is deleted'];

  }
else {

    return['Result'=>'Data is not deleted'];


}
}
}
