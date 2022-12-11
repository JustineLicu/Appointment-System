@extends('layouts.layout')

@section("content")
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Smith-Delos Reyes Dental Clinic</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <script src="https://kit.fontawesome.com/fc383ab5c6.js" crossorigin="anonymous"></script>


  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">



</head>
<body>  
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      <div class="track-form">
        <form action="" class="track">
        <small>Already have an appointment? Enter your tracking number here:</small><br>
          <input type="text" placeholder="Enter tracking number" name="search">
          <button type="submit"><i class="fa fa-search"></i></button>
        </form>
      </div>
    </div>
  </div>


  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="/homedental">Smith-Delos Reyes</a></h1>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="/status">Appointment Status</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

      <a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">Make an</span> Appointment</a>

    </div>
  </header>

   <!-- ======= Appointment Section ======= -->
   <section id="appointment" class="appointment section-bg">
    <div class="container">
      <br> <br> <br> <br> <br> <br>
      <div class="section-title">
        <h2>Make an Appointment</h2>
      </div>

      <form action="forms/appointment.php" method="post" role="form" class="php-email-form">
        <div class="row">
          <div class="col-md-4 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
            <div class="validate"></div>
          </div>
          <div class="col-md-4 form-group mt-3 mt-md-0">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email (Optional)" data-rule="email" data-msg="Please enter a valid email">
            <div class="validate"></div>
          </div>
          <div class="col-md-4 form-group mt-3 mt-md-0">
            <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
            <div class="validate"></div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 form-group mt-3">
            <input type="date" name="date" class="form-control datepicker" id="date" placeholder="Appointment Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
            <div class="validate"></div>
          </div>
          <div class="col-md-4 form-group mt-3">
            <input type="time" name="date" class="form-control datepicker" id="date" placeholder="Appointment Time" required>

            <div class="validate"></div>
          </div>
          <div class="col-md-4 form-group mt-3">
            <select name="doctor" id="doctor" class="form-select">
              <option value="">Select Services</option>
              <option value="Services 1">Restoration/Filling</option>
              <option value="Services 2">Oral Prophylaxis</option>
              <option value="Services 3">Deep Scaling</option>
              <option value="Services 4">Gum Treatment, Flouride, Cavity liner</option>
              <option value="Services 5">Prostho Thermosen</option>
              <option value="Services 6">Flexable/Rubberize Dentures</option>
              <option value="Services 7">Partial Porcelain Jacket</option>
              <option value="Services 8">Plastic Jacket</option>
              <option value="Services 9">All Porcelaine Zirconia and Veneering Composite</option>
              <option value="Services 10">All Porcelaine Veneer</option>
              <option value="Services 11">Braces/Retainers</option>
              <option value="Services 12">Impaction(Wisdom Tooth Removal)</option>
              <option value="Services 13">Tooth Extraction</option>
            </select>
            <div class="validate"></div>
          </div>
        </div>

        <div class="form-group mt-3">
          <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
          <div class="validate"></div>
        </div>
        <div class="mb-3">
          <div class="loading">Loading</div>
          <div class="error-message"></div>
          <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
        </div>
        <div class="text-center"><button type="submit">Make an Appointment</button></div>
      </form>

    </div>
  </section><!-- End Appointment Section -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1>Smith-Delos Reyes Dental Clinic</h1>
      <h2>I became a <em>Dentist</em> because <em>your smile is worth </em>my time </h2>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">    
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative">
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <br> <br> <br> <br> <br>
            <h3>About:</h3>
            <div class="icon-box">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href="">Dra. Ma. Sheree Delos Reyes</a></h4>
              <p class="description">General dentistry, Orthodontics, and Cosmetic dentistry.</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="fa-regular fa-building"></i></div>
              <h4 class="title"><a href="">Business Founded</a></h4>
              <p class="description">In the year of 2014, Smith-Delos Reyes Dental Clinic founded.</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="fa-regular fa-calendar-days"></i></div>
              <h4 class="title"><a href="">Office Hours</a></h4>
              <p class="description">Monday to Saturday, by Sunday could be settle by directly messaging Dra. Delos Reyes <br>
              Clinic Hours 10:00AM to 5:00PM.</p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->
    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Services</h2>
          <p>Performing oral screenings to detect diseases and infections. Getting rid
            of tooth decay and plaque Applying prosthetics, sealants, and whiteners.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <div class="icon"><i class="fa-sharp fa-solid fa-fill-drip"></i></div>
              <h4><a href="">Restoration/Filling</a></h4>
              <p>Fillings are special materials that your dentist places in or on your teeth to repair tooth decay (cavities) or defects on the tooth surface. </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="fa-solid fa-teeth-open"></i></div>
              <h4><a href="">Oral Prophylaxis</a></h4>
              <p>Cleaning procedure performed to thoroughly clean the teeth. Prophylaxis is an important dental treatment for halting the progression of periodontal disease and gingivitis.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="fa-solid fa-teeth-open"></i></div>
              <h4><a href="">Deep Scaling</a></h4>
              <p>Deep cleaning. During routine dental check-ups, hygienists typically clean teeth up to the gum line.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="fa-solid fa-teeth-open"></i></div>
              <h4><a href="">Gum Treatment, Flouride, Cavity liner</a></h4>
              <p>Dentists provide professional fluoride treatments in the form of a highly concentrated rinse, foam, gel, or varnish.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="fa-solid fa-teeth-open"></i></div>
              <h4><a href="">Prostho Thermosen</a></h4>
              <p>Flexable/Rubberize Dentures, Complete, Partial Porcelain Jacket, Plastic Jacket,
                all Porcelaine Zirconia and Veneering Composite, all Porcelaine Veneer.
              </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="fa-regular fa-face-grimace"></i></div>
              <h4><a href="">Braces and Retainers</a></h4>
              <p>Braces, are much more robust.Retainers can be a solution for minor problems.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="fa-regular fa-face-grimace"></i></div>
              <h4><a href="">Impaction(Wisdom Tooth Removal)</a></h4>
              <p>If a tooth does not come in, or emerges only partially, it is considered to be impacted.
                This most commonly happens with the wisdom teeth</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="fa-regular fa-face-grimace"></i></div>
              <h4><a href="">Tooth Extraction</a></h4>
              <p>Permanent removal of a tooth from its socket and may be done manually using forceps or surgically.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
        </div>
      </div>

      <div>
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3864.0391284653933!2d120.93774551449688!3d14.424907985226145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397d2f5d11810d3%3A0x5a505f26c163f059!2sNueno%20Ave%2C%20Imus%2C%20Cavite!5e0!3m2!1sen!2sph!4v1669956572509!5m2!1sen!2sph" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container">
        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Nueno Street Imus Cavite 0412 Imus, Philippines</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>0917 959 4101</p>
              </div>
            </div>
          </div>      
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">



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