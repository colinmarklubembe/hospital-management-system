<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>One Health - Medical Center HTML5 Template</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span> +256 787970988</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span> onehealth@gmail.com</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="#"><span class="mai-logo-facebook-f"></span></a>
              <a href="#"><span class="mai-logo-twitter"></span></a>
              <a href="#"><span class="mai-logo-dribbble"></span></a>
              <a href="#"><span class="mai-logo-instagram"></span></a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary">One</span>-Health</a>

        <form action="#">
          <div class="input-group input-navbar">
            <div class="input-group-prepend">
              <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
            </div>
            <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
          </div>
        </form>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{ url('') }}">Home</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{ url('about') }}">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('blog') }}">News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('contact') }}">Contact</a>
            </li>
            @if (Route::has('login'))

            @auth
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3"  href="{{ url('myappointment') }}">My Appointment</a>
            </li>

            <x-app-layout>
            </x-app-layout>

            @else    
            
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{ route('login') }}">Login</a>
            </li>
            <li class="nav-item">
                <a class="btn btn-primary ml-lg-3" href="{{ route('register') }}">Register</a>
            </li>

            @endauth

            @endif
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

  <div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">About</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">About Us</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->

  <div class="page-section bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-4 py-3 wow zoomIn">
          <div class="card-service">
            <div class="circle-shape bg-secondary text-white">
              <span class="mai-chatbubbles-outline"></span>
            </div>
            <p><span>Chat</span> with our doctors</p>
          </div>
        </div>
        <div class="col-md-4 py-3 wow zoomIn">
          <div class="card-service">
            <div class="circle-shape bg-primary text-white">
              <span class="mai-shield-checkmark"></span>
            </div>
            <p><span>One</span>-Health Protection</p>
          </div>
        </div>
        <div class="col-md-4 py-3 wow zoomIn">
          <div class="card-service">
            <div class="circle-shape bg-accent text-white">
              <span class="mai-basket"></span>
            </div>
            <p><span>One</span>-Health Pharmacy</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="page-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 wow fadeInUp">
          <h1 class="text-center mb-3" style="font-size: 2rem">Welcome to Your Health Center</h1>
          <div class="text-lg">
            Welcome to One-Health about page! At our hospital, we are committed to providing the highest level of medical care and support to our patients and their families. We are proud to be a leading healthcare provider in our community, and our team of dedicated healthcare professionals is passionate about helping our patients achieve optimal health and wellness.
            <br>

            Our hospital is equipped with state-of-the-art facilities and advanced medical technology to ensure that our patients receive the best possible care. We offer a wide range of medical services, including emergency care, surgery, diagnostic testing, and more, all delivered with compassion and expertise.
            <br>
            Our hospital is not just a place where medical care is provided, but it is also a community where patients and their families can feel supported and cared for. We understand that being in a medical setting can be overwhelming, so we strive to create a warm and welcoming atmosphere where patients feel comfortable and at ease.
            <br>
            At our hospital, we believe that every patient deserves personalized care that is tailored to their unique needs. Our healthcare professionals take the time to listen to our patients, understand their concerns, and develop a treatment plan that is customized to their specific situation.
            <br>
            We are proud of the work we do at our hospital, and we are committed to continuing to provide the highest level of medical care and support to our community. Thank you for choosing our hospital, and we look forward to helping you achieve optimal health and wellness.</p>
          </div>
        </div>

        <div class="container" style="margin-top: 50px; margin-bottom: 80px;">
          <h3 class="text-center wow fadeInUp" style="padding:30px; font-size:2rem;">Our Services</h3>
          <table class="table table-striped table-bordered">
            <thead class="thead-dark">
              <tr>
                  <th>Name</th>
                  <th>Description</th>
                  <th>Cost</th>
              </tr>
            </thead>
      
        <tbody>
          @foreach($service as $services)
              <tr>
                  <td>{{ $services->name }}</td>
                  <td>{{ $services->description }}</td>
                  <td>{{ $services->cost }}</td>
                  
              </tr>
      
          @endforeach
        </tbody>
          </table>
      
        </div>
        </div>
      </div>
    </div>
  </div>

   <!-- .banner-home -->

  <footer class="page-footer">
    <div class="container">
      <div class="row px-md-3">
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Company</h5>
          <ul class="footer-menu">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Career</a></li>
            <li><a href="#">Editorial Team</a></li>
            <li><a href="#">Protection</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>More</h5>
          <ul class="footer-menu">
            <li><a href="#">Terms & Condition</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Advertise</a></li>
            <li><a href="#">Join as Doctors</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Our partner</h5>
          <ul class="footer-menu">
            <li><a href="#">One-Fitness</a></li>
            <li><a href="#">One-Drugs</a></li>
            <li><a href="#">One-Live</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Contact</h5>
          <p class="footer-link mt-2">351 Willow Street Franklin, MA 02038</p>
          <a href="#" class="footer-link">701-573-7582</a>
          <a href="#" class="footer-link">healthcare@temporary.net</a>

          <h5 class="mt-3">Social Media</h5>
          <div class="footer-sosmed mt-3">
            <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-google-plus-g"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-linkedin"></span></a>
          </div>
        </div>
      </div>

      <hr>

      <p id="copyright">Copyright &copy; 2020 <a href="https://macodeid.com/" target="_blank">MACode ID</a>. All right reserved</p>
    </div>
  </footer>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>