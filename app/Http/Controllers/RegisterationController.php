<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterationController extends Controller
{
    public function index(){
        return view('form');
    }

    public function register(Request $req){
        $req->validate(
            [
                'name' => 'required',
                'phoneNo' => 'required',
                'email' => 'required|email',
                'address' => 'required'
            ]
        );
        echo "<pre>";
        print_r($req->all());
    }
}
