<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Users / Profile - NiceAdmin Bootstrap Template</title>
      <meta content="" name="description">
      <meta content="" name="keywords">
      <!-- Favicons -->
      <link href="assets/img/favicon.png" rel="icon">
      <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
      <!-- Google Fonts -->
      <link href="https://fonts.gstatic.com" rel="preconnect">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
      <!-- Vendor CSS Files -->
      <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
      <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
      <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
      <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
      <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
      <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
      {{-- captcha Header Element --}}
      {!! htmlScriptTagJsApi() !!}
      <!-- Template Main CSS File -->
      <link href="assets/css/style.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@200;300;400;500&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Kodchasan:ital,wght@0,300;1,200;1,300&family=Montserrat:ital,wght@0,200;0,300;0,800;1,200;1,300;1,400;1,500;1,600;1,700&family=Noto+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Parisienne&family=Playball&family=Poppins:ital,wght@0,100;0,200;0,300;0,800;0,900;1,100;1,200;1,300&family=Roboto+Condensed:wght@300;400;700&family=Roboto+Mono:ital,wght@0,100;1,100&family=Roboto:ital,wght@0,100;0,300;1,100&family=Rubik+Beastly&family=Teko:wght@300;400;500;600;700&display=swap" rel="stylesheet">
      <!-- =======================================================
         * Template Name: NiceAdmin - v2.3.1
         * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
         * Author: BootstrapMade.com
         * License: https://bootstrapmade.com/license/
         ======================================================== -->
   </head>
   <body>
      <!-- ======= Header ======= -->
      <header id="header" class="header fixed-top d-flex align-items-center" style="background-color: " >
         <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
            <img src="assets/img/logo-white.svg" alt="">
            <span class="d-none d-lg-block">Nurses Group</span>
            </a>
         </div>
         <!-- End Logo -->
         <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">
               <li class="nav-item d-block d-lg-none">
                  <a class="nav-link nav-icon search-bar-toggle " href="#">
                  <i class="bi bi-search"></i>
                  </a>
               </li>
               <!-- End Search Icon-->
               <li class="nav-item dropdown pe-3">
                  <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                  <img src="assets/img/profile_img.png" alt="Profile" class="rounded-circle">
                  <span class="d-none d-md-block dropdown-toggle ps-2">{{$users->name}}</span>
                  </a><!-- End Profile Iamge Icon -->
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                     <li class="dropdown-header">
                        <h6>{{$users->name}}</h6>
                        <span>Nursing Staff</span>
                     </li>
                     <li>
                        <hr class="dropdown-divider">
                     </li>
                     <li>
                        <a class="dropdown-item d-flex align-items-center" href="{{ route('logout.perform') }}">
                        <i class="bi bi-box-arrow-right"></i>
                        <span>Sign Out</span>
                        </a>
                     </li>
                  </ul>
                  <!-- End Profile Dropdown Items -->
               </li>
               <!-- End Profile Nav -->
            </ul>
         </nav>
         <!-- End Icons Navigation -->
      </header>
      <!-- End Header -->


   <div class="container-fluid" style="padding-top: 70px;" >

        <div class="row">
          <div class="col-md-6"><div class="card">
            <div class="card-body pt-3" >
               <!-- Bordered Tabs -->
               <ul class="nav nav-tabs nav-tabs-bordered">
                  <li class="nav-item">
                     <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Employee Details</button>
                  </li>
               </ul>
               <div class="tab-content pt-2">
                  <h5 class="card-title">Personal Details</h5>
                  <div class="row">
                     <div class="col-lg-3 col-md-4 label "> Name</div>
                     <div class="col-lg-9 col-md-8">: {{$users->name}} </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-3 col-md-4 label ">Position</div>
                     <div class="col-lg-9 col-md-8">:Home Care Assistant</div>
                  </div>
                  <div class="row">
                     <div class="col-lg-3 col-md-4 label ">Date Of Birth</div>
                     <div class="col-lg-9 col-md-8">: {{$users->date_of_birth}}</div>
                  </div>
                  <h5 class="card-title">Contact Details</h5>
                  <div class="row">
                     <div class="col-lg-3 col-md-4 label">Email Id</div>
                     <div class="col-lg-9 col-md-8">: {{$users->email}}</div>
                  </div>
                  <div class="row">
                     <div class="col-lg-3 col-md-4 label">Phone Number</div>
                     <div class="col-lg-9 col-md-8">: +917594828589</div>
                  </div>
               </div>
            </div>
         </div></div>
          <div class="col-md-6">   <div class="card">
            <div class="card-body pt-3">
               <!-- Bordered Tabs -->
               <div class="tab-content pt-2">
                  <h5 class="card-title text-center pb-0 fs-4">Drop TIMESHEET Here!</h5>
                  <hr>
                  <form id="my-form" method="post"action="{{ route('ocr.extractText',encrypt($users->id))}}"
                     enctype="multipart/form-data">
                     @csrf
                     <div class="form-group">
                        <label for="image">Select an image:</label>
                        <input type="file" class="form-control-file" id="image" name="image" accept="image/*">
                     </div>
                     <hr>
                     <!-- Google reCaptcha v2 -->
                     {!! htmlFormSnippet() !!}
                     @if ($errors->has('g-recaptcha-response'))
                     <div>
                        <br>
                        <br>
                        <small class="text-danger">{{ $errors->first('g-recaptcha-response') }}</small>
                     </div>
                     @endif
                     <hr>
                     <button type="submit" id="submit-btn"class="btn btn-primary">Extract Text</button>
                  </form>
               </div>
            </div>
         </div></div>
        </div>
        <div class="row">
          <div class="col-md-6" style="min-height: 300px">
            <div class="card">
              <div class="card-body pt-3" >
                 <!-- Bordered Tabs -->
                 <ul class="nav nav-tabs nav-tabs-bordered">
                    <li class="nav-item">
                       <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Working Details</button>
                    </li>
                 </ul>
                 <div class="tab-content pt-2">
                    <canvas id="myChart" height="100px"></canvas>
                 </div>
              </div>
           </div>
         </div>
          <div class="col-md-6" ><div class="card">
            <div class="card-body pt-3" style="min-height: 300px">
               <!-- Bordered Tabs -->
               <ul class="nav nav-tabs nav-tabs-bordered">
                  <li class="nav-item">
                     <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Timesheet History</button>
                  </li>
               </ul>
               <div class="tab-content pt-2 ">
                  <table class="table">
                     <thead>
                        <tr>
                           <th scope="col">TimeSheet</th>
                           <th scope="col">Date</th>
                           <th scope="col">Total Hours Worked</th>
                           <th scope="col">Amount</th>
                        </tr>
                     </thead>
                     <tbody>
                        @if (session('timesheet') && count(session('timesheet')) >0 )
                        @foreach (session('timesheet') as $item)
                        <tr>
                           <th scope="row"> {{$item['timesheet']}}</th>
                           <td> {{$item['date']}}</td>
                           <td> {{$item['total_working_hours']}}</td>
                           <td>{{$item['amount']}} £</td>
                        </tr>
                        @endforeach
                        @endif
                     </tbody>
                  </table>
                  <div  class="pagination"  style="width: 400px;hieght: 100px;">
                     {{ session('timesheet')->links() }} 
                  </div>
               </div>
            </div>
         </div></div>
        </div>

      </div>






            

      <script>
         function loadPage(url) {
             // Make an AJAX request to fetch the paginated content
             $.ajax({
                 url: url,
                 type: 'GET',
                 dataType: 'html',
                 success: function(response) {
                     $('#tab-content pt-2').html(response); // Replace the content of the container div with the fetched content
                 }
             });
         }
         
         // Listen for click events on pagination links
         $(document).on('click', '#tab-content pt-2  .pagination a', function(event) {
             event.preventDefault();
             var url = $(this).attr('href');
             loadPage(url);
         });
      </script> 
      <script>
         document.getElementById("my-form").addEventListener("submit", function(evt) {
         
             var response = grecaptcha.getResponse();
             if (response.length == '') {
                 //reCaptcha not verified
                 alert("please verify you are human!");
                 evt.preventDefault();
                 return false;
             }
             //captcha verified
             //do the rest of your validations here
         
         });
      </script>
      @if (session('error'))
      <script>
         window.onload = function() {
             alert('{{ session('error') }}');
         };
      </script>
      @endif
     
      <!-- Vendor JS Files -->
      <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
      <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="assets/vendor/chart.js/chart.min.js"></script>
      <script src="assets/vendor/echarts/echarts.min.js"></script>
      <script src="assets/vendor/quill/quill.min.js"></script>
      <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
      <script src="assets/vendor/tinymce/tinymce.min.js"></script>
      <script src="assets/vendor/php-email-form/validate.js"></script>
      {{-- CHART --}}
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
      <!-- Template Main JS File -->
      <script src="assets/js/main.js"></script>
      <script type="text/javascript">
        var labels =  {{ Js::from($labels) }};
        var users =  {{ Js::from($data) }};
        
        const data = {
            labels: labels,
            datasets: [{
                label: 'Total Worked Hours',
                backgroundColor: 'rgb(224, 155, 36)',
                borderColor: 'rgb(0, 0, 255)',
                data: users,
            }]
        };
        
        const config = {
          type: 'line',
          data: data,
          options: {
              responsive: true, // Make the chart responsive
              // maintainAspectRatio: false, // Allow the chart to adjust its aspect ratio
        
              // Customize the scales (x and y axes)
              scales: {
                  x: {
                      display: true, // Display the x-axis
                      title: {
                          display: true,
                          text: 'Date' // X-axis label
                      }
                  },
                  y: {
                      display: true, // Display the y-axis
                      title: {
                          display: true,
                          text: 'Total Worked Hours' // Y-axis label
                      },
                     
                  }
              },
        
           
          }
        };
        
        
        
        const myChart = new Chart(
            document.getElementById('myChart'),
            config
        );
        
     </script>
   </body>
</html>
