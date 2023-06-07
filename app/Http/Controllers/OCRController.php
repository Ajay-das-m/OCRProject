<?php

namespace App\Http\Controllers;
use App\Models\Login;
use App\Models\Admin;
use Illuminate\Http\Request;
use Google\Cloud\Vision\V1\Feature\Type;
use Google\Cloud\Vision\V1\ImageAnnotatorClient;
use Google\Cloud\Vision\V1\Likelihood;
use Google\Cloud\Vision\VisionClient;
use Illuminate\Support\Facades\Auth;
use DB;
use Google\Cloud\Vision\V1\GoogleCloudVision;



class OCRController extends Controller
{
   

     public function extractText(Request $request,$id){
      // return $id;
      if (auth()->check()) {
        $vision = new VisionClient([
          'projectId' => 'ocrtextextraction-384210',
          'keyFilePath' => '/var/www/html/OCRproject/storage/app/ocrtextextraction-384210-65b6f8e8a683.json'
          ]);
          $image = $vision->image(file_get_contents($request->file('image')), ['TEXT_DETECTION']);
          $result = $vision->annotate($image);
          $annotation = $result->text()[0];
          $text=$annotation->description();
            // return $text;
  
          
          // retreiving the necessary fields from the text 
  
          
         
          $pattern = "/First Name\s+(\w+)\s+Last Name\s+(\w+)/";
           preg_match($pattern, $text, $matches);
            $name=$matches[1].' '.$matches[2];
           
           
  
            $pattern1 ="/TIME SHEET NO : (\d+)/";
            preg_match($pattern1, $text, $matches);
            $timesheet_number = $matches[1];
           
  
                // Extracting 'position'
            if (preg_match("/Position\s(\w+)/", $text, $matches)) {
              $position = $matches[1];
            }
           
            // Extracting 'date'
            if (preg_match("/\b\d{2}\/\d{2}\/\d{4}\b/", $text, $matches)) {
                $date = $matches[0];
              //   return $date;
               
            }
            
            // Extracting 'start time'
            if (preg_match('/Start time\s+(\d+:\d+)/', $text, $matches)) {
                $start_time = $matches[1];
                
            }
            
            // Extracting 'end time'
            if (preg_match('/End time\s+(\d+:\d+)/', $text, $matches)) {
                $end_time = $matches[1];
              
            }
            
            // Extracting 'break time'
            if (preg_match('/Break time\s+(\d+:\d+)/', $text, $matches)) {
                $break_time = $matches[1];
            }
            
            // Extracting 'total working hours'
            if (preg_match('/Total working hours\s+(\d+)/', $text, $matches)) {
                $total_working_hours = $matches[1];
               
            }
  
            //extracting postcode
            if (preg_match('/Post Code\s+(\d+)/', $text, $matches)) {
              $post_code = $matches[1];
              
             }
             //workplace
             if (preg_match('/Work Place & Address\s+([A-Z]+)\b/', $text, $matches)) {
              $work_place = $matches[1];
          
             }
  
             //mileage
             if (preg_match('/\(if own support\)\s+(\w+)/', $text, $matches)) {
              $mileage = $matches[1];
              
             }
            
               
               
                  $var=(int)$total_working_hours;
                  $total=$var*11;
        
                  $userID=auth()->user();
                  $id=$userID->id;
                  
  
        
               
               $existingSheet = Admin::where('timesheet',$timesheet_number)->first();
           
                 if($existingSheet){
  
                  session()->flash('error', 'Timesheet Already Uploaded');
                  return redirect('upload');
                
                }
                else{
                
                  $timesheet = new Admin();
                  $timesheet->user_id= $id;
                  $timesheet->name = $name;
                  $timesheet->timesheet = $timesheet_number;
                  $timesheet->position = $position;
                  $timesheet->work_place = $work_place;
                  $timesheet->date =$date;
                  $timesheet->total_working_hours=  $total_working_hours;
                  $timesheet->post_code = $post_code;
                  $timesheet->amount = $total;
                  $timesheet->save();
                
                    return redirect('profile');
                }
  
                } 
                else {
                    return back();
                }
      
           
        }
        public function profileView(){
       
          $timesheet=Admin::orderBy('id','desc')->first();
          if (auth()->check()) {
            $users = auth()->user();
            return view('profile', compact('users', 'timesheet'));
            // return view('profile',['timesheet' => $timesheet]);
        } else {
           return back();
        }
        
          
        }
    }
    
      
