<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>Contact</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content=""> 
<!-- bootstrap css -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- Responsive-->
<link rel="stylesheet" href="css/responsive.css">
<!-- fevicon -->
<link rel="icon" href="images/fevicon.png" type="image/gif" />
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
<!-- Tweaks for older IEs-->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<!-- owl stylesheets --> 
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
</head>
<body>
  <!--header section start -->
  <div class="header_section">
      <div class="header_left">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="logo"><a href="index.php"><img src="images/logo.png"></a></div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="services.php">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="team.php">Team</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Us</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
    <!--header section end -->
    <!-- contact section start -->
    <div class="contact_section layout_padding">
      <div class="container-fluid">
        <h1 class="what_taital">Contact us</h1>
        <p class="amet_text">Let us know how we can reach you! </p>
        <div class="contact_section2">
          <div class="row">
            <div class="col-md-6 padding_left_0">
              <form action="userinfo.php" method="post">
                <div class="form_group">
                  <input type="text" class="form-control" placeholder="Name" name="name">
                </div><br>
                <div class="form_group">
                  <input type="text" class="form-control" placeholder="E-mail" name="email">
                </div><br>
                <div class="form_group">
                  <input type="text" class="form-control" placeholder="Contact no." name="mobile">
                </div><br>
                <div class="form-group">
                  <textarea class="form-control" placeholder="Message" rows="5" id="comment" name="comment"></textarea>
                </div><br>
                  <button type="submit" class="btn btn-danger">Send</button>
              </form>
            </div>
            <div class="col-md-6 padding_0">
              <div class="map-responsive">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9134.791156204432!2d84.96915870878159!3d24.687565037045886!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f32ce13a41da99%3A0x148bb7143449c5ae!2sIndian%20Institute%20of%20Management%E2%80%93Bodh%20Gaya%20(IIM%E2%80%93Bodh%20Gaya)!5e0!3m2!1sen!2sin!4v1675888506719!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- contact section end -->
    <!--footer section start -->
    <div class="footer_section layout_padding margin_top_90">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-sm-6">
            <h4 class="about_text">About Financial</h4>
            <div class="location_text"><img src="images/map-icon.png"><span class="padding_left_15">Locations</span></div>
            <div class="location_text"><img src="images/call-icon.png"><span class="padding_left_15">+01 9876543210</span></div>
            <div class="location_text"><img src="images/mail-icon.png"><span class="padding_left_15">demo@gmail.com</span></div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <h4 class="about_text">About Financial</h4>
            <p class="dolor_text">ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
          </div>
          <div class="col-lg-3 col-sm-6">
            <h4 class="about_text">Instagram</h4>
            <div class="footer_images">
              <div class="footer_images_left">
                <div class="image_12"><img src="images/img-12.png"></div>
                <div class="image_12"><img src="images/img-12.png"></div>
                <div class="image_12"><img src="images/img-12.png"></div>
              </div>
              <div class="footer_images_right">
                <div class="image_12"><img src="images/img-12.png"></div>
                <div class="image_12"><img src="images/img-12.png"></div>
                <div class="image_12"><img src="images/img-12.png"></div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <h4 class="about_text">Newsletter</h4>
            <input type="text" class="mail_text" placeholder="Enter your email" name="Enter your email">
            <div class="subscribe_bt"><a href="#">Subscribe</a></div>
            <div class="footer_social_icon">
              <ul>
                <li><a href="#"><img src="images/fb-icon1.png"></a></li>
                 <li><a href="#"><img src="images/twitter-icon1.png"></a></li>
                <li><a href="#"><img src="images/linkedin-icon1.png"></a></li>
                <li><a href="#"><img src="images/youtub-icon1.png"></a></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- copyright section start -->
        <div class="copyright_section">
          <div class="copyright_text">Copyright 2019 All Right Reserved By <a href="https://html.design">Free html  Templates</a></div>
        </div>
        <!-- copyright section end -->
      </div>
    </div>
    <!--footer section end -->
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- javascript --> 
    <script src="js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script> 
</body>
</html>