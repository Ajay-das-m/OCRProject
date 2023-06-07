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

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.3.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

 <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center" >

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Nurses Group</span>
      </a>

    </div><!-- End Logo -->

  

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

       
     

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
      
          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->
    
    
   <div class="container-fluid" style="padding-top: 70px;" >
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
             <div class="col-6 mb-3">
              <a href="{{'upload'}}"><button type="button" class="btn btn-primary">Back To Profile</button></a>
             </div>
             <div class="col-6 mb-3">
              <a href="{{'pdf'}}"><button type="button" class="btn btn-primary">Download Slip</button></a>
             </div>
          
           </div>
         
           
           
         </div>
   
     </div></div>
     <div class="col-md-4"></div>
       </div>
    </div>
  

 
      





  

 

  
  


  
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


         

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
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
</body>

</html>











































