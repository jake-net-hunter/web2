<?php include 'mail.php'?>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>
    Cyran Kyle
  </title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Raleway:400,700&display=swap" rel="stylesheet" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <a class="navbar-brand" href="index.html">
            <img src="images/logo.png" alt="" />
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item ">
                  <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.html">
                    About
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="service.html">
                    Services
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="portfolio.html">
                    Portfolio
                  </a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="contact.html">Contact Us</a>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
              </form>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>
  <!-- end hero area -->


  <!-- contact section -->

  <section class="contact_section layout_padding-bottom layout_padding2-top">
    <div class="container px-0">
      <div class="heading_container">
        <h2 class="">
          Con<span>ta</span>ct Us
        </h2>
      </div>

    </div>
    <div class="container container-bg">
      <div class="row">
        <div class="col-lg-8 col-md-7 px-0">
          <div class="map_container">
            <div class="map-responsive">
              <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France" width="600" height="300" frameborder="0" style="border:0; width: 100%; height:100%" allowfullscreen></iframe>
            </div>
          </div>
        </div>
        <div class="col-md-5 col-lg-4 px-0">
          <form method="POST" id="contact-form">
            <div>
              <input name="name" type="text" placeholder="Name" />
            </div>
            <div>
              <input name="email" type="email" placeholder="Email" />
            </div>
            <div>
              <input name="phone" type="text" placeholder="Phone" />
            </div>
            <div my-2><?php echo $alert; ?></div>
            <div>
              <input name="message" type="text" class="message-box" placeholder="Message" />
            </div>
            <div class="d-flex ">
              <button name="submit">
                SEND
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->

  <!-- client section -->

  <section class="client_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container">
        <h2>
          What <span>says</span> our clients
        </h2>
      </div>
      <div class="box">
        <div class="client_id">
          <div class="name">
            <h4>
              Marian <br>
              Andrew
            </h4>
          </div>
          <div class="img-box">
            <img src="images/client.jpg" alt="">
          </div>
        </div>
        <div class="detail-box">
          <p>
            Kyle IT services provides the best IT services in the whole wide world
          </p>
          <img src="images/quote.png" alt="">
        </div>
      </div>
    </div>
  </section>

  <!-- end client section -->


  <!-- info section -->

  <section class="info_section  layout_padding2-top">
    <div class="social_container">
      <div class="social_box">
        <a href="https://facebook.com/therealmhaltiti">
          <img src="images/fb.png" alt="">
        </a>
        <a href="https://mobile.twitter.com/therealmhaltiti">
          <img src="images/twitter.png" alt="">
        </a>
        
      </div>
    </div>
    <div class="info_container ">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3">
            <h6>
              ABOUT US
            </h6>
            <p>
              We are the best IT firm located in the whole Globe!!
            </p>
          </div>
          <div class="col-md-6 col-lg-3">
            <h6>
              Instagram
            </h6>
            <p>
              @cyrangraphics
            </p>
          </div>
          
          <div class="col-md-6 col-lg-3">
            <h6>
              CONTACT US
            </h6>
            <div class="info_link-box">
              <a href="https://www.google.com/maps/@5.6131584,-0.2162688,10z">
                <img src="images/location.png" alt="">
                <span> Market AVE</span>
              </a>
              <a href="https://wa.link/jzq0ko">
                <img src="images/call.png" alt="">
                <span> +233596371001</span>
              </a>
              <a href="">
                <img src="images/mail.png" alt="">
                <span> cyrankyle.it@gmail.com</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- footer section -->
    <section class=" footer_section">
      <div class="container">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By
          <a href="https://wa.me/233596371001/">Cyran Kyle Designs</a>
        </p>
      </div>
    </section>
    <!-- footer section -->

  </section>

  <!-- end info section -->



  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script type="text/javascript" src="js/custom.js"></script>
</body>

</html>
