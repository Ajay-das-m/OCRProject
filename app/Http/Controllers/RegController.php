<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegController extends Controller
{
    public function register(){
        
        return view('register');
    }
    public function postRegister(Request $request){

                $name=$request->input('name');
                $email=$request->input('email');
                $password=$request->input('password');
                $dob=$request->input('dob');

                $data = new Login;   
                $data->name =  $name; 
                $data->date_of_birth= $dob;  
                $data->email= $email;  
                $data->password =Hash::make($password);
                $data->save();
                
                return redirect('log-back');
        }
        public function loginBack(){
        
            return view('login');
        }
    }

