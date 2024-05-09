
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/nlogo.png">
	<link rel="icon" type="image/png" href="assets/img/nlogo.png">	
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>GRANARY INSURANCE</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
	
    <link href="bootstrap3/css/bootstrap.css" rel="stylesheet" />
	<link href="assets/css/gsdk.css" rel="stylesheet" />  
    <link href="assets/css/demo.css" rel="stylesheet" /> 
    
    <!--     Font Awesome     -->
    <link href="bootstrap3/css/font-awesome.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>

 <!-- Vendor CSS Files -->

  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  
  <!-- Vendor CSS Files -->

  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  
  

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

<body>
<div id="navbar-full">
    
        <nav class="navbar navbar-ct-blue navbar-fixed-top" role="navigation">
          
         
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.php">
                     <div class="logo-container">
                        <div class="logo">
                            <img src="assets/img/nlogo.png">
                        </div>
                        <div class="brand">
                            GRANARY INSURANCE
                        </div>
                    </div>
                </a>
            </div>

             <!-- Collect the nav links, forms, and other content for toggling -->
             
              <ul class="nav navbar-nav navbar-right">
              <li><a href="index.php">Home</a></li>
                    <li><a href="services.php">Our Services</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="https://bimatek.co.ke/dashboard/build/pages/sign-in.php" class="btn btn-round btn-default">LOGIN</a></li>
               </ul>
              
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
    </div><!--  end container-->

</body>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/desk.png');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Contact US</h2>
              <p>All your INSURANCE queries addressed.</p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Contact</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div>
            <h2> Find us here</h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m19!1m8!1m3!1d63820.92117912692!2d36.865051!3d-1.289708!3m2!1i1024!2i768!4f13.1!4m8!3e0!4m0!4m5!1s0x182f17c7e2855fbf%3A0x15ac29b981233af2!2sIplus%20Insurance%20Agency%20Limited%2C%20Ngara%20Rd%2C%20Nairobi!3m2!1d-1.2782518!2d36.8300975!5e0!3m2!1sen!2ske!4v1661700046561!5m2!1sen!2ske" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>        </div><!-- End Google Maps -->
                <div class="col-lg-4">



          </div>

          <div class="col-lg-8">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
  <?php
include "nav/footer.php";

?>