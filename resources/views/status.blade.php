@extends('layouts.layout')

@section("content")
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Appointment Status</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-phone"></i> 0917 959 4101
      </div>
      <div class="d-none d-lg-flex social-links align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="/homedental">Smith-Delos Reyes</a></h1>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto " href="/homedental#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="/homedental#about">About</a></li>
          <li><a class="nav-link scrollto" href="/homedental#services">Services</a></li>
          <li><a class="nav-link scrollto" href="/homedental#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="/homedental#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">Make an</span> Appointment</a>

    </div>
  </header><!-- End Header -->

  <main id="main">
    <section class="inner-page">
      <div class="container">
        <p>
        </p>
      </div>
    </section>

    <div class="container">
      <div class="card">
        <h5 class="my-3" style="padding-left:3em;">Appointment Status</h5>
        <div class="card-body" style="padding-left:6em;">
          <div class="row my-3" id="track">Tracking number: </div>
          <div class="row my-3" id="name">Name: </div>
          <div class="row my-3" id="time">Appointment time: </div>
          <div class="row my-3" id="serive">Service:  </div>
          <div class="row my-3" id="status">Status: </div>
        </div>
      </div> <br>
      <button type="submit" class="btn btn-primary">Request Cancel</button> <br>
      <small>Note: If you have approximately one hour until your appointment, you cannot cancel your request. </small>
    </div> <br> <br> 

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Medilab</h3>
            <p>
              Nueno Street <br>
              Imus Cavite 0412 Imus, <br>
              Philippines <br><br>
              <strong>Phone:</strong> 0917 959 4101<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="/homedental#hero">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/homedental#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/homedental#services">Services</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="/homedental#services">Restoration/Filling</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/homedental#services">Oral Prophylaxis</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/homedental#services">Deep Scaling</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/homedental#services">Brace/Retainers</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/homedental#services">Many more...</a></li>
            </ul>
          </div>
          <div class="col-lg-4 col-md-6 footer-newsletter">
            <div class="rating">
              <h4>Feedback:</h4>
              <div class="star">
                <input type="radio" name="rating1" id="rating1">
                <label for="rating1" class="fa fa-star"> </label>
                <input type="radio" name="rating1" id="rating2">
                <label for="rating2" class="fa fa-star"> </label>
                <input type="radio" name="rating1" id="rating3">
                <label for="rating3" class="fa fa-star"> </label>
                <input type="radio" name="rating1" id="rating4">
                <label for="rating4" class="fa fa-star"> </label>
                <input type="radio" name="rating1" id="rating5">
                <label for="rating5" class="fa fa-star"> </label>
              </div>
            </div> <br> 
            <form action="" method="post">
             <textarea placeholder="Are you satisfied?">
             </textarea>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    
    <div class="container d-md-flex py-4">
      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Smith-Delos Reyes Dental clinic</span></strong>. All Rights Reserved
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="https://www.facebook.com/Smthdelosreyes" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
</body>
</html>
@endsection