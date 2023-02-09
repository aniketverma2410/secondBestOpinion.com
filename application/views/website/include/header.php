<!DOCTYPE html>
<html lang="en-US" dir="ltr">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- ===============================================-->
<!--    Document Title-->
<!-- ===============================================-->
<title>Second Best Opinion</title>

<!-- ===============================================-->
<!--    Favicons-->
<!-- ===============================================-->
<link rel="apple-touch-icon" sizes="180x180" href="<?= base_url();?>assets/website/img/favicons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?= base_url();?>assets/website/img/favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?= base_url();?>assets/website/img/favicons/favicon-16x16.png">
<link rel="shortcut icon" type="image/x-icon" href="<?= base_url();?>assets/website/img/favicons/favicon.ico">
<link rel="manifest" href="<?= base_url();?>assets/website/img/favicons/manifest.json">
<meta name="msapplication-TileImage" content="<?= base_url();?>assets/website/img/favicons/mstile-150x150.png">
<meta name="theme-color" content="#fff">

<!-- ===============================================-->
<!--    Stylesheets-->
<!-- ===============================================-->
<link href="<?= base_url();?>assets/website/css/fontcss.css" rel="stylesheet">
<link href="<?= base_url();?>assets/website/lib/loaders.css/loaders.min.css" rel="stylesheet">
<link href="<?= base_url();?>assets/website/lib/flexslider/flexslider.css" rel="stylesheet">
<link href="<?= base_url();?>assets/website/css/theme.css" rel="stylesheet">
<link href="<?= base_url();?>assets/website/css/style.css" rel="stylesheet">
</head>

<body>
<!-- ===============================================--> 
<!--    Main Content--> 
<!-- ===============================================-->
<main class="main" id="top"> 
  <!-- ============================================--> 
  <!-- Preloader ==================================-->
  <div class="preloader p-0" id="preloader">
    <div class="loader d-flex flex-column align-items-center"><img src="<?= base_url();?>assets/website/img/illustrations/loader.gif" alt="" /></div>
  </div>
  <!-- ============================================--> 
  <!-- End of Preloader ===========================--> 
  <a class="bottom-to-top rounded-soft" href="#top" data-fancyscroll> <span class="fas fa-angle-up lg" data-fa-transform="down-2"></span> </a>
  <nav class="navbar navbar-expand navbar-light bg-light sticky-top font-weight-semi-bold fs--1 text-base shadow-sm">
    <div class="container">
      <ul class="navbar-nav align-items-center">
        <li class="nav-item dropdown"><a class="btn btn-light btn-sm dropdown-toggle mr-2" id="languageDropdown" href="#!" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/img/illustrations/united-states.svg" width="20" alt="" /></a>
          <div class="dropdown-menu" aria-labelledby="languageDropdown"><a class="dropdown-item font-weight-semi-bold text-primary d-flex justify-content-between" href="#!">
            <div class="media align-items-center"><img src="<?= base_url();?>assets/website/img/illustrations/united-states.svg" width="20" alt="" />
              <div class="media-body ml-2">EN</div>
            </div> 
            <span class="fas fa-check" data-fa-transform="down-4 shrink-4"></span> </a><a class="dropdown-item font-weight-semi-bold text-primary" href="#!">
            <div class="media align-items-center"><img src="<?= base_url();?>assets/website/img/illustrations/germany.svg" width="20" alt="" />
              <div class="media-body ml-2">DE</div>
            </div>
            </a><a class="dropdown-item font-weight-semi-bold text-primary" href="#!">
            <div class="media align-items-center"><img src="<?= base_url();?>assets/website/img/illustrations/saudi-arabia.svg" width="20" alt="" />
              <div class="media-body ml-2">AR</div>
            </div>
            </a></div>
        </li>
        <li class="nav-item">
          <form class="input-iconic">
            <div class="input-icon">
              <button type="submit"><span class="fas fa-search text-300"></span></button>
            </div>
            <input class="form-control form-control-sm" type="search" placeholder="Search..." />
          </form>
        </li>
      </ul>
      <ul class="navbar-nav align-items-center">
        <li class="nav-item"> 
          <a class="btn btn-outline-danger btn-sm mx-2" href="about.html"> 
            <span class="d-none d-md-inline">About </span>SBO 
          </a> 
        </li>
        <li class="nav-item"> 
          <a class="btn btn-outline-danger btn-sm mx-2" href="contact.html"> 
            <span class="d-none d-md-inline">Contact </span>Us 
          </a> 
        </li>
        <li class="nav-item ml-2">
          <a class="btn btn-primary btn-sm" href="#appointmentModal" data-toggle="modal">
            <span class="d-none d-md-inline">Request </span>Appointment
          </a>
        </li>
        <li class="nav-item ml-2">
          <a class="btn btn-primary btn-sm" href="#registerModal" data-toggle="modal">
            <span class="d-none d-md-inline">Register</span>
          </a>
        </li>        
        <li class="nav-item ml-2">
          <a class="btn btn-primary btn-sm" href="#loginModal" data-toggle="modal">
            <span class="d-none d-md-inline">Login</span>
          </a>
        </li>
      </ul>
    </div>
  </nav>
  <nav class="navbar navbar-expand-lg navbar-light bg-200 navbar-split py-3">
    <div class="container"><a class="navbar-brand d-flex align-items-center z-index-1" href="index.html"><img src="<?= base_url();?>assets/website/img/logo.png" alt="" height="30" /></a>
      <div class="navbar-nav text-base d-none d-lg-flex">
        <div class="nav-item">
          <div class="media border-right pr-3 mr-3"><span class="fas fa-map-marker-alt fs-2 text-primary" data-fa-transform="down-1.5"></span>
            <div class="media-body ml-2">
              <h5 class="fs-0 mb-1">Address</h5>
              <p class="fs--1 mb-0"> P G I Raibareli Road<br/>
                Near O P Chaudhary Hospital.</p>
            </div>
          </div>
        </div>
        <div class="nav-item">
          <div class="media"><span class="fas fa-headset fs-2 text-primary" data-fa-transform="down-1.5"></span>
            <div class="media-body ml-2">
              <h5 class="fs-0 mb-1">Phone Appointment</h5>
              <ul class="nav flex-column fs--1">
                <li class="nav-item"><a href="tel:05220000000">(0522) 000-0000</a></li>
                <li class="nav-item"><a href="tel:+918400200054">(+91) 8400200054</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <button class="navbar-toggler ml-4 z-index-1" type="button" data-toggle="collapse" data-target="#navbarStandard" aria-controls="navbarStandard" aria-expanded="true" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    </div>
  </nav>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary font-weight-semi-bold py-0 fs--1">
    <div class="container">
      <div class="collapse navbar-collapse" id="navbarStandard">
        <ul class="navbar-nav">
          <li class="nav-item"> <a class="nav-link"  href="index.html" role="button">Home</a> </li>
          <li class="nav-item dropdown dropdown-menu-on-hover"><a class="nav-link dropdown-toggle" id="" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Patient care</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownPlugins"> <a class="dropdown-item" href="find_doctor.html">Find a Doctor</a> <a class="dropdown-item" href="appointment.html">Get an Appointment</a> <a class="dropdown-item" href="sevices_fascility.html">Sevices & Fascility</a> <a class="dropdown-item" href="make_enquiry.html">Make an Enquiry</a> <a class="dropdown-item" href="feedback.html">Give Feedback</a> <a class="dropdown-item" href="faq.html">FAQ</a> </div>
          </li>
          <li class="nav-item dropdown dropdown-menu-on-hover"><a class="nav-link dropdown-toggle" id="" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Medical Specialist</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownPlugins"> <a class="dropdown-item" href="centre_excellence.html">Centre of Excellence</a> <a class="dropdown-item" href="specialities.html">Specialities</a> </div>
          </li>
          <li class="nav-item dropdown dropdown-menu-on-hover"><a class="nav-link dropdown-toggle" id="" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Patients' Experience</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownPlugins"> <a class="dropdown-item" href="patients_speak.html">Patients Speak</a> <a class="dropdown-item" href="patients_vedio.html">Patients Vedio</a> </div>
          </li>
          <li class="nav-item dropdown dropdown-menu-on-hover"><a class="nav-link dropdown-toggle" id="" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Journal</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownPlugins"> <a class="dropdown-item" href="journal.html">Daily Journal</a> <a class="dropdown-item" href="journal.html">Weekly Journal</a> <a class="dropdown-item" href="journal.html">Monthly Journa</a> </div>
          </li>
          <li class="nav-item dropdown dropdown-menu-on-hover"><a class="nav-link dropdown-toggle" id="" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Wellness</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownPlugins"> <a class="dropdown-item" href="doctor_speak.html">Doctors' Speak</a> <a class="dropdown-item" href="blog.html">Blogs</a> </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="error_validator" id="hide_data" style="z-index: 999;position: absolute;margin-top: 150px;margin-left: 900px;">
      <?php echo validation_errors(); if($this->session->flashdata('login_message')) echo $this->session->flashdata('login_message'); ?> 
  </div> 
 