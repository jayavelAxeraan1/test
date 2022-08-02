<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\People;

class TestController extends Controller
{
    


    public function insert(Request $request){
        if(isset($_POST['Insert'])){
        $insert = new People;
       
        $insert->name = $request->name;
    
        $insert->save();
        }
        
            foreach(People::all() as $new){
            echo $new->name."<br/>";
        }

        if(isset($_POST['delete'])){
            $name = $request->name;
            $delete = People::find($name);
            $delete->delete();
        }



        
        return view("test")->with("message", "success");

    }
}
