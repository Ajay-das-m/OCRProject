<?php

namespace App\Http\Controllers;


use DB;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function login()
    {
        
        return view('login');
    }
    public function uploadHere(){
        if (auth()->check()) {

          
            $users = auth()->user();
            $id=$users->id;
            $timesheet=Admin::where('user_id',$id)->paginate(3);
            session(['timesheet' => $timesheet]);
           
            $timesheetgraph=Admin::where('user_id',$id)->get();
            $array = json_decode($timesheetgraph, true);
            $dates = [];
            $workingHours = [];
            foreach ($array as $item) {
                $dates[] = $item['date'];
                $workingHours[] = $item['total_working_hours'];
            }
           
            $labels = $dates;
            $data = $workingHours;
         
            return (view('upload',compact('users','labels', 'data')));
            
        } else {
           return redirect('/');
        }
        
        
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        
        $credentials = $request->only('email', 'password');;
        if(auth()->attempt($credentials)){
          


            // $users = auth()->user();
            // $id=$users->id;
            // $timesheet=Admin::where('user_id',$id)->paginate(1);
 
            // session(['timesheet' => $timesheet]);

            // $timesheetgraph=Admin::where('user_id',$id)->get();
            // $array = json_decode($timesheetgraph, true);
            // $dates = [];
            // $workingHours = [];
            // foreach ($array as $item) {
            //     $dates[] = $item['date'];
            //     $workingHours[] = $item['total_working_hours'];
            // }
           
            // $labels = $dates;
            // $data = $workingHours;
           
            return redirect('upload');
            // return (view('upload',compact('users','labels', 'data')));
        }
        else{
            return back();
        }

    }
   
   
    
   
}



        