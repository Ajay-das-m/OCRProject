<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dompdf\Dompdf;


class pdfController extends Controller
{
    public function generatePdf()
    {
        // Create a new Dompdf instance
        $dompdf = new Dompdf();

        // Retrieve the HTML content for your PDF
        $html = ' <div class="container-fluid" style="padding-top: 70px;" >
        <div class="row">
         <div class="col-md-4"></div>
         
   
         <div class="col-md-4"><div class="card"><div class="card-body p-4"  >        
           <h3>John & Smith Solutions </h3>
            <hr class="mt-0 mb-4"> 
            
            <div class="row pt-1">
              <div class="col-6 mb-3">
                <h6>Timesheet No:</h6>
                <hr class="mt-0 mb-2">
                <p class="text-primary" style="font-size: 50px;font ">{{$timesheet->timesheet}}</p>
              </div>
              <div class="col-6 mb-3">
                <h6>Name</h6>
                <hr class="mt-0 mb-2">
                <p class="text" style="font-size: 20px;font">{{$timesheet->name}}</p>
              </div>
              <div class="col-6 mb-3">
                <h6>Position</h6>
                <hr class="mt-0 mb-2">
                <p class="text" style="font-size: 20px;font">{{$timesheet->position}}</p>
              </div>
              <div class="col-6 mb-3">
                <h6>Workplace</h6>
                <hr class="mt-0 mb-2">
                <p class="text" style="font-size: 20px;font">{{$timesheet->work_place}}</p>
              </div>
            </div>
            <hr class="mt-3 mb-4">
            <div class="row pt-1">
              <div class="col-6 mb-3">
                <h6>Date:</h6>
                <p class="text-muted">{{$timesheet->date}}</p>
              </div>
              <div class="col-6 mb-3">
                <h6>Total Working Hours</h6>
                <p class="text-dangerSS" style="font-size: 20px;font">{{$timesheet->total_working_hours}}</p>
              </div>
            </div>
            <hr class="mt-0 mb-4">
            <div class="row pt-1">
             <div class="col-6 mb-3">
               <h6>Payment:</h6>
               <p class="text-success" style="font-size: 40px;font">{{$timesheet->amount}} £ </p>
             </div>
            
           
            </div>
          
            
            
          </div>
    
      </div></div>
      <div class="col-md-4"></div>
        </div>
     </div>';

        // Load HTML into Dompdf
        $dompdf->loadHtml($html);

        // Set the paper size and orientation (optional)
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Generate PDF file and send it as a response
        return $dompdf->stream('Timesheet.pdf');
    } 
}
