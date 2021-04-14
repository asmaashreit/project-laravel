<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registController extends Controller
{
    public function registTitle(){
        return view ('register', ['registTitle' => 'register']);
    }

    public function valid(Request $regist){
        $this -> validate($regist , [
            'name'      => 'required',
            'age'       => 'required',
            'phone'     => 'required',
            'password'  => 'required|min:8|max:11',
            'national_id'=> 'required',
            'address'   => 'required',
            'aboutme'   => 'required|min:50|max:150',
        ]);
        echo 'Successful Send Data';
    }

    public function display(){
        
        $data = student::paginate(15);    
        return view('display',['StudentData' => $data]);
    
    }
}
