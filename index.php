<?php
session_start();
include('./data_management/connectdb.php');
include ('./populate/populate.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>

  <!-- meta tags -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="keywords" content="bootstrap 4, premium, multipurpose, sass, scss, saas" />
  <meta name="description" content="Bootstrap 4 Landing Page Template" />
  <meta name="author" content="www.themeht.com" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>Wiley Corporate Solution</title>

  <!-- Favicon Icon -->
  <link rel="shortcut icon" href="assets/images/wiley.png"/>

  <!-- inject css start -->

  <link href="assets/css/theme-plugin.css" rel="stylesheet" />
  <link href="assets/css/theme.min.css" rel="stylesheet" />

  <!-- inject css end -->

</head>

<body>

  <!-- page wrapper start -->

  <div class="page-wrapper">

    <!-- preloader start -->

    <div id="ht-preloader">
      <div class="loader clear-loader">
        <span></span>
        <p>WCS</p>
      </div>
    </div>

    <!-- preloader end -->
    <!--header start-->

    <header class="site-header">
      <div id="header-wrap">
        <div class="container">
          <div class="row">
            <!--menu start-->
            <div class="col d-flex align-items-center justify-content-between">
              <a class="navbar-brand logo mb-0" href="index.php">
                Wiley Corporate Solutions<span class="text-primary font-weight-bold"> </span>
              </a>
              <nav class="navbar navbar-expand-lg navbar-light ml-auto">            
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown"> <a class="nav-link" href="#" data-toggle="dropdown">Publications <i class="las la-angle-down"></i></a>
                      <ul class="dropdown-menu penu" style="margin-top:-2%">
                    <!-- <li class="d-flex"><a class="dropdown-item" href="index.html">Psychology</a>
                    </li>
                      <li class="d-flex"><a class="dropdown-item" href="index.html">Physical Science & Engineering</a></li>
                    <li class="d-flex"><a class="dropdown-item" href="index.html">Veterinary Medicine</a><a class="dropdown-item" href="index.html">Law & Criminology</a>
                    </li> -->
                    <div style="float: left;"> 
                      <li><a class="dropdown-item" href="results.php?searchtext=&cat=Medicine">Medicine</a>
                      </li>
                      <li><a class="dropdown-item" href="results.php?searchtext=&cat=Physical+Sciences+%26+Engineering">Physical Sciences & Engineering</a>
                      </li>
                      <li><a class="dropdown-item" href="results.php?searchtext=&cat=Chemistry">Chemistry</a>
                      </li>
                      <li><a class="dropdown-item" href="results.php?searchtext=&cat=Life+Sciences">Life Sciences</a>
                      </li>
                      <li><a class="dropdown-item" href="results.php?searchtext=&cat=Nursing%2C+Dentistry+%26+Healthcare">Nursing, Detistry & Healthcare</a>
                      </li>
                      <li><a class="dropdown-item" href="results.php?searchtext=&cat=Psychology">Psychology</a>
                      </li>
                      <li><a class="dropdown-item" href="results.php?searchtext=&cat=Veterinary+Medicine">Veterinary Medicine</a>
                      </li>
                    </div>

                    <div style="float: left;"> 
                      <li><a class="dropdown-item" href="results.php?searchtext=&cat=Agriculture%2C+Aquaculture+%26+Fish+Science">Agriculture, Aquaculture & Fish Science</a>
                      </li>
                      <li><a class="dropdown-item" href="results.php?searchtext=&cat=Business%2C+Economics%2C+Finance+%26+Accounting">Business, Economics, Finance & Accounting </a>
                      </li>
                      <li><a class="dropdown-item" href="results.php?searchtext=&cat=Social+%26+Behavioral+Sciences">Social & Behavioral Sciences</a>
                      </li>
                      <li><a class="dropdown-item" href="results.php?searchtext=&cat=Mathematics+%26+Statistics">Mathematics & Statistics</a>
                      </li>
                      <li><a class="dropdown-item" href="results.php?searchtext=&cat=Earth%2C+Space+%26+Environmental+Sciences">Earth, Space & Environmental Sciences</a>
                      </li>
                      <li><a class="dropdown-item" href="results.php?searchtext=&cat=Humanities">Humanities</a>
                      </li>
                      <li><a class="dropdown-item" href="results.php?searchtext=&cat=Law+%26+Criminology">Law & Criminology</a>
                      </li>
                    </div>
                  </ul>
                </li>
                <li class="nav-item dropdown"> <a class="nav-link" href="#" data-toggle="dropdown"> Solutions <i class="las la-angle-down"></i></a>
                  <ul class="dropdown-menu" style="margin-top:-2%">
                    <li class="dropdown-submenu"><a class="dropdown-item" href="#">Reach</a>
                    </li>
                    <li class="dropdown-submenu"><a class="dropdown-item" href="#">Content</a>
                    </li>
                    <li class="dropdown-submenu"><a class="dropdown-item" href="#">Engagement & Impact</a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item dropdown"> <a class="nav-link" href="#">Case Studies</a><!-- 
                  <ul class="dropdown-menu"style="margin-top:-2%">
                    <li><a class="dropdown-item" href="product-grid.html">Product Grid</a>
                    </li>
                    <li><a class="dropdown-item" href="product-list.html">Product List</a>
                    </li>
                    <li><a class="dropdown-item" href="product-single.html">Product Single</a>
                    </li>
                    <li><a class="dropdown-item" href="product-cart.html">Cart</a>
                    </li>
                    <li><a class="dropdown-item" href="product-checkout.html">Checkout</a>
                    </li>
                    <li><a class="dropdown-item" href="order-complete.html">Order Completed</a>
                    </li>
                  </ul> -->
                </li>
                <li class="nav-item dropdown"> <a class="nav-link" href="#" data-toggle="dropdown">Resources <i class="las la-angle-down"></i></a>
                  <ul class="dropdown-menu" style="margin-top:-2%">
                    <li><a class="dropdown-item" href="feature-accordion.html">Case Studies</a>
                    </li>
                    <li><a class="dropdown-item" href="blog.html">Blog</a>
                    </li>
                    <li><a class="dropdown-item" href="feature-counter.html">Videos</a>
                    </li>
                    <li><a class="dropdown-item" href="feature-icon-box.html">White Papers</a>
                    </li>
                    <li><a class="dropdown-item" href="events.html">Events & Webinars</a>
                    </li>
                    <!-- <li><a class="dropdown-item" href="feature-gallery.html">Lightbox Gallery</a>
                    </li>
                    <li><a class="dropdown-item" href="feature-pricing.html">Price Table</a>
                    </li>
                    <li><a class="dropdown-item" href="feature-video.html">Video Lightbox</a>
                    </li>
                    <li><a class="dropdown-item" href="feature-team.html">Team</a>
                    </li>
                    <li><a class="dropdown-item" href="feature-testimonial.html">Testimonial</a>
                    </li> -->
                  </ul>
                </li>
                <li class="nav-item dropdown"> <a class="nav-link" href="about.html">About Us</a>
                  <!-- <ul class="dropdown-menu" style="margin-top:-2%">
                    <li><a class="dropdown-item" href="product-grid.html">Product Grid</a>
                    </li>
                    <li><a class="dropdown-item" href="product-list.html">Product List</a>
                    </li>
                    <li><a class="dropdown-item" href="product-single.html">Product Single</a>
                    </li>
                    <li><a class="dropdown-item" href="product-cart.html">Cart</a>
                    </li>
                    <li><a class="dropdown-item" href="product-checkout.html">Checkout</a>
                    </li>
                    <li><a class="dropdown-item" href="order-complete.html">Order Completed</a>
                    </li>
                  </ul> -->
                </li>
                <li><img src="assets/images/magnifying1.jpg" height="22" width="30"></li>
                <li class="nav-item dropdown"> <a class="nav-link" href="#" data-toggle="">Contact</a>
                </li>
                <!--  <li class="nav-item dropdown"> <a class="nav-link" href="#" data-toggle=""><img src="assets/images/magnifying.jpg" height="5" width="5">Contact</a>
                </li> -->
                <li class="nav-item dropdown btn btn-primary shadow px-3 py-1 rounded"> <a class="nav-link text-white " href="#" data-toggle="dropdown">English <i class="las la-angle-down"></i></a>
                  <ul class="dropdown-menu" style="margin-top:-2%">
                    <li class="dropdown-submenu"><a class="dropdown-item not-allowed" href="#">中文</a>
                    </li>
                    <li class="dropdown-submenu"><a class="dropdown-item not-allowed" href="#">Deutsche</a>
                    </li>
                    <li class="dropdown-submenu"><a class="dropdown-item not-allowed" href="#">日本人</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </nav>  
          <!--  <a class="btn btn-primary ml-8 d-none d-lg-block" href="#">English</a>   -->                  
        </div>
        <!--menu end--> 
      </div>
    </div>
  </div>
</header>

<!--hero section start-->

<section class="bg-light">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 col-lg-5 col-xl-6 order-lg-2 mb-8 mb-lg-0">
        <!-- Image -->
        <img src="assets/images/about/homepage-one.jpg" class="img-fluid" alt="...">
      </div>
      <div class="col-12 col-lg-7 col-xl-6 order-lg-1">
        <!-- Heading -->
        <!--  <h6 class="border rounded-pill px-3 py-2 text-muted d-inline-block"> <span class="badge badge-pill badge-primary mr-3">New</span> Say Hello to all Bootsland</h6> -->
        <h3 class="display-4C">
          You need to share your<br> research to make real-world<br> change. We're here to help.             
        </h3><br>
        <!-- Text -->
        <p class="learned">Your priority is to share your findings so professionals can make the best informed decisions impacting future outcomes of their patients or their industry.Whether your audience is in medical, life, or physical sciences, we can connect you with them.</p>
        <!-- Buttons --> <!-- <a href="#" class="btn btn-primary shadow mr-1">
                Download
              </a> -->
              <!-- <a href="http://vimeo.com/99025203" class="btn popup-vimeo link-title"> <i class="la la-play-circle mr-1 ic-3x align-middle line-h-0"></i> Play Video</a> -->
            </div>
          </div>
          <!-- / .row -->
        </div>
        <!-- / .container -->
      </section>

      <!--hero section end--> 


      <!--body content start-->

      <!-- <div class="page-content"> -->

        <!--services start-->

<!-- <section class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="p-7 rounded bg-white shadow">
          <div class="row align-items-center">
            <div class="col-xl-4 col-lg-4 mb-8 mb-lg-0">
              <div>
                <div>
                  <img class="img-fluid" src="assets/images/services/01.png" alt="">
                </div>
                <h5 class="mt-4 mb-3">Overview</h5>
                <p>Serspiciatis unde omnis iste natus error sit doloremque laudantium, totam rem aperiam.</p>
                <a class="btn-link" href="#">Read Details</a>
              </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-sm-6">
              <div>
                <div>
                  <img class="img-fluid" src="assets/images/services/02.png" alt="">
                </div>
                <h5 class="mt-4 mb-3">Video Chat</h5>
                <p>Serspiciatis unde omnis iste natus error sit doloremque laudantium, totam rem aperiam.</p>
                <a class="btn-link" href="#">Read Details</a>
              </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-sm-6 mt-6 mt-sm-0">
              <div>
                <div>
                  <img class="img-fluid" src="assets/images/services/03.png" alt="">
                </div>
                <h5 class="mt-4 mb-3">Unique Data</h5>
                <p>Serspiciatis unde omnis iste natus error sit doloremque laudantium, totam rem aperiam.</p>
                <a class="btn-link" href="#">Read Details</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->

<!--services end-->


<!--about start-->

<!-- <section class="pt-0">
  <div class="container">
    <div class="row align-items-center justify-content-between">
      <div class="col-12 col-lg-6 mb-6 mb-lg-0">
        <img src="assets/images/about/14.png" alt="Image" class="img-fluid">
      </div>
      <div class="col-12 col-lg-6 col-xl-5">
        <div> <span class="badge badge-primary-soft p-2">
                  <i class="la la-exclamation ic-3x rotation"></i>
              </span>
          <h2 class="mt-3">Bulit for everybody with unlimited unique features</h2>
          <p class="lead">We use the latest technologies it voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
        </div>
        <a href="#" class="btn btn-primary text-white text-left mr-1"> <i class="la la-apple mr-2 ic-3x d-inline-block"></i>
          <div class="d-inline-block"> <small class="d-block">Available On The</small>
            App Store</div>
        </a>
        <a href="#" class="btn btn-dark text-white text-left"> <i class="la la-android mr-2 ic-3x d-inline-block"></i>
          <div class="d-inline-block"> <small class="d-block">Android App On</small>
            Google Play</div>
        </a>
      </div>
    </div>
  </div>
</section> -->

<!--about end-->


<!--counter start-->

<!-- <section class="custom-py-2 position-relative bg-dark parallaxie" style="background-image: url(assets/images/bg/01.jpg);background-position: center center; background-size: cover; background-repeat: no-repeat;" data-overlay="6">
  <div class="container">
    <div class="row align-items-center justify-content-between">
      <div class="col-12 col-lg-4 col-xl-5 mb-11 mb-lg-0 text-center">
        <div class="video-btn"> <a class="play-btn popup-youtube" href="https://www.youtube.com/watch?v=P_wKDMcr1Tg"><i class="la la-play"></i></a>
          <div class="spinner-eff">
            <div class="spinner-circle circle-1"></div>
            <div class="spinner-circle circle-2"></div>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-7 col-xl-6">
        <div class="row text-center">
          <div class="col-lg-6 col-md-6">
            <div class="counter bg-primary rounded p-5 shadow">
              <div class="counter-desc text-white">
                <h5>Reviews</h5>
                <span class="count-number display-4" data-to="234" data-speed="10000">234</span>
                <span class="display-4">k</span> 
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 mt-5">
            <div class="counter bg-white rounded p-5 shadow">
              <div class="counter-desc">
                <h5>Comments</h5>
                <span class="count-number display-4 text-primary" data-to="455" data-speed="10000">455</span>
                <span class="display-4 text-primary">k</span> 
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 mt-5 mt-md-0">
            <div class="counter bg-white rounded p-5 shadow">
              <div class="counter-desc">
                <h5>App Downloads</h5>
                <span class="count-number display-4 text-primary" data-to="365" data-speed="10000">365</span>
                <span class="display-4 text-primary">k</span> 
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 mt-5">
            <div class="counter bg-orange rounded p-5 shadow">
              <div class="counter-desc text-white">
                <h5>Happy Client</h5>
                <span class="count-number display-4" data-to="528" data-speed="10000">528</span>
                <span class="display-4">k</span> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- / .row -->
  <!-- </div>
  <div class="shape-1" style="height: 200px; overflow: hidden;">
    <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
      <path d="M0.00,49.98 C150.00,150.00 271.49,-50.00 500.00,49.98 L500.00,0.00 L0.00,0.00 Z" style="stroke: none; fill: #fff;"></path>
    </svg>
  </div>
  <div class="shape-1 bottom" style="height: 200px; overflow: hidden;">
    <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
      <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path>
    </svg>
  </div>
</section>
-->
<!--counter end-->


<!--services start-->

<!-- <section class="pt-0">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-5 col-12 order-lg-1 mb-8 mb-lg-0">
        <img src="assets/images/about/08.png" alt="Image" class="img-fluid">
      </div>
      <div class="col-lg-7 col-12">
        <div class="mb-8"> <span class="badge badge-primary-soft p-2">
                  <i class="la la-cubes ic-3x rotation"></i>
              </span>
          <h2 class="mt-3 mb-0">Bootsland Users Love App Features</h2>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <div class="d-flex align-items-start">
              <div>
                <div class="f-icon-shape-sm text-white bg-primary rounded-circle shadow-primary mr-3"> <i class="la la-wechat ic-2x"></i>
                </div>
              </div>
              <div>
                <h5>Live Chat</h5> 
                <p class="mb-0">Serspiciatis unde omnis iste natus laudantium.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 mt-6 mt-md-0">
            <div class="d-flex align-items-start">
              <div>
                <div class="f-icon-shape-sm text-white bg-dark rounded-circle shadow-primary mr-3"> <i class="la la-desktop ic-2x"></i>
                </div>
              </div>
              <div>
                <h5>Responsive</h5> 
                <p class="mb-0">Serspiciatis unde omnis iste natus laudantium.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 mt-6">
            <div class="d-flex align-items-start">
              <div>
                <div class="f-icon-shape-sm text-white bg-white rounded-circle shadow-primary mr-3"> <i class="la la-download ic-2x text-primary"></i>
                </div>
              </div>
              <div>
                <h5>Free Update</h5> 
                <p class="mb-0">Serspiciatis unde omnis iste natus laudantium.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 mt-6">
            <div class="d-flex align-items-start">
              <div>
                <div class="f-icon-shape-sm text-white bg-orange rounded-circle shadow-primary mr-3"> <i class="la la-headphones ic-2x"></i>
                </div>
              </div>
              <div>
                <h5>Online Support</h5> 
                <p class="mb-0">Serspiciatis unde omnis iste natus laudantium.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
-->
<!--services end-->


<!--work start-->
<section>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h3 class="display-4C" >Start your publication search:</h3>
        <form method="GET" action="results.php">
          <div class="form-row">
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Search by keyword or journal title" name="searchtext">
            </div>
            <div class="col-auto mt-3 mt-sm-0 pl-11 pl-sm-0" >
              <!-- <button type="Search" class="btn btn-primary">Search</button> -->
              <button type="submit" class="btn btn-primary" name="submitsearch" value="Search" style="margin-left: 1%; width: 100%; height: 47px;">Search</button >
            </div>  
            <!--  for the buttons -->
            <h4 class="display-5C mt-3" >Journals by Subject area:</h4>
            <div class="col-md-12">
              <?php populate_catlist()?>
            </div> 
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <nav id ="slider"> <!-- custom -->
          <h3 class="display-4C">Solution We Offer:</h3><br>
          <div class="nav nav-tabs d-flex justify-content-center border-0" id="nav-tab" role="tablist"> <a class="nav-item nav-link  border-0 active" id="nav-tab-1" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">Reach</a>
            <!-- <div class = "underline"></div> -->
            <a class="nav-item nav-link border-0" id="nav-tab-2" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">Content</a>
            <!--  <div class = "underline"></div> -->
            <a class="nav-item nav-link border-0" id="nav-tab-3" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">Engagement & Impact</a>
            <!-- <div class = "underline"></div> -->
          </div>

         <!--  <div class = "underline"></div>
          <div class = "underline"></div>
          <div class = "underline"></div> -->
        </nav>
        <div class="tab-content mt-8" id="nav-tabContent">
          <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="nav-tab-1">
            <div class="row align-items-center justify-content-between mb-10">
              <div class="col-12 col-lg-6 mb-6 mb-lg-0">
                <img src="assets/images/about/homepage-five.jpg" alt="Image" class="img-fluid">
              </div>
              <div class="col-12 col-lg-6 col-xl-5">
                <div>
                  <h4 class="mt-3">Share your message with our audiences</h4><br>
                  <p class="lead">We work with communities of researchers and professionals in more than 200 countries around the world. Our reach means that your message can be seen by 10 million unique visitors on Wiley Online Library every month, or that you can advertise your products to more than 590 societies with 200 million members. </p>
                  <p class="mb-0">Journal Advertising | Display Advertising | Email Advertising</p>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="nav-tab-2">
            <div class="row align-items-center justify-content-between mb-10">
              <div class="col-12 col-lg-6 mb-6 mb-lg-0">
                <img src="assets/images/about/homepage-four.jpg" alt="Image" class="img-fluid">
              </div>
              <div class="col-12 col-lg-6 col-xl-5">
                <div>
                  <h4 class="mt-3">Publish your research in valued sources</h4>
                  <p class="lead">Researchers and professionals know that we value quality more than anything for our published content. So when you sponsor special issues or publish your research in one of our 1,600 journals, your audience knows they can trust  your findings.</p>
                  <p class="mb-0">We use the latest technologies it voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="nav-tab-3">
            <div class="row align-items-center justify-content-between mb-10">
              <div class="col-12 col-lg-6 mb-6 mb-lg-0">
                <img src="assets/images/about/homepage-two.jpg" alt="Image" class="img-fluid">
              </div>
              <div class="col-12 col-lg-6 col-xl-5">
                <div>
                  <h4 class="mt-3">Make your research stand out</h4>
                  <p class="lead">With so much information out there, it can be a challenge to rise above the noise so your research can cut through. We can help turn your findings into easy-to-consume formats so your professional audience knows the most important information right away.</p>
                  <p class="mb-0"> Journal Advertising | Display Advertising | Email Advertising </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--work end-->

<!--testimonial start-->

<section class="bg-light">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col">
        <div class="owl-carousel no-pb owl-2" data-dots="false" data-nav="true" data-items="1" data-autoplay="true">
          <div class="item">
            <div class="row justify-content-center text-center">
              <div class="col-12 col-md-10 col-lg-8">
                <div class="card bg-transparent border-0">
                  <div>
                    <h1 class="mt-4 mb-0" style="margin-left: 7%;">Our Customers Stories:</h1><br><br>
                  </div>
                  <div class="card-body p-0 mt-5">
                    <p class="lead font-w-5">“Yesterday we received the off-prints of the chronic hand eczema supplement in JEADV – it really looks great and is a tremendous resource for anyone interested in CHE!”</p>
                    <div>
                      <h5 class="text-primary d-inline mb-0">Johan Söderström</h5>
                      <small class="text-dark font-w-5 font-italic">- Global Publications Manager at LEO Pharma</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="row justify-content-center text-center">
              <div class="col-12 col-md-10 col-lg-8">
                <div class="card bg-transparent border-0">
                  <!-- <div>
                    <img alt="Image" src="assets/images/testimonial/02.jpg" class="shadow-primary img-fluid rounded-circle d-inline">
                  </div> -->
                  <div class="card-body p-0 mt-5">
                    <p class="lead font-w-5">“Wiley's Web Development team is amazing!Their design is fantastic and uses cutting edge technology.We could not be more happier!”</p>
                    <div>
                      <h5 class="text-primary d-inline mb-0">Johny Stock</h5>
                      <small class="text-dark font-w-5 font-italic">- Supervisor</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="row justify-content-center text-center">
              <div class="col-12 col-md-10 col-lg-8">
                <div class="card bg-transparent border-0">
                  <!-- <div>
                    <img alt="Image" src="assets/images/testimonial/03.jpg" class="shadow-primary img-fluid rounded-circle d-inline">
                  </div> -->
                  <div class="card-body p-0 mt-5">
                    <p class="lead font-w-5">Wiley's Web Development team is amazing!Their design is fantastic and uses cutting edge technology.We could not be more happier!”</p>
                    <div>
                      <h5 class="text-primary d-inline mb-0">Leeny Biton</h5>
                      <small class="text-dark font-w-5 font-italic">- Manager</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--testimonial end-->



<!--screenshots start-->

<!-- <section>
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-12 col-md-12 col-lg-8 mb-8 mb-lg-0">
        <div class="mb-5"> <span class="badge badge-primary-soft p-2">
                  <i class="la la-file-image-o ic-3x rotation"></i>
              </span>
          <h2 class="mt-3">See Our Bootsland App Screenshots</h2>
          <p class="lead mb-0">All types of businesses need access to development resources, so we give you the option to decide how much you need to use.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="owl-carousel no-pb" data-dots="false" data-items="3" data-sm-items="2" data-autoplay="true">
          <div class="item">
            <img class="img-fluid" src="assets/images/app/01.png" alt="">
          </div>
          <div class="item">
            <img class="img-fluid" src="assets/images/app/02.png" alt="">
          </div>
          <div class="item">
            <img class="img-fluid" src="assets/images/app/03.png" alt="">
          </div>
          <div class="item">
            <img class="img-fluid" src="assets/images/app/01.png" alt="">
          </div>
          <div class="item">
            <img class="img-fluid" src="assets/images/app/02.png" alt="">
          </div>
          <div class="item">
            <img class="img-fluid" src="assets/images/app/03.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->

<!--screenshots end-->


<!--blog start-->

<section>
  <div class="container">
    <div class="row align-items-end mb-5">
      <div class="col-12 col-md-12 col-lg-4">
        <div> <!-- <span class="badge badge-primary-soft p-2">
                  <i class="la la-bold ic-3x rotation"></i>
                </span> -->
                <h1 class="display-4C">Latest News</h1>
              </div>
            </div>
            <div class="col-12 col-md-12 col-lg-6 ml-auto">
              <div>
                <!-- <p class="lead mb-0">All types of businesses need access to development resources, so we give you the option to decide how much you need to use.</p> -->
              </div>
            </div>
          </div>
          <!-- / .row -->
          <div class="row">
            <div class="col-12 col-lg-4 mb-6 mb-lg-0">
              <!-- Blog Card -->
              <div class="card border-0 bg-transparent">
                <div class="position-absolute bg-dark text-white shadow-primary text-center p-2 ml-3 mt-3">EVENTS</div>
                <img class="card-img-top shadow" src="assets/images/about/homepage-seven.jpg" alt="Image" height="255" width="350">
                <div class="card-body pt-5"> <a class="d-inline-block text-muted mb-2" href="#">Event</a>
                  <h2 class="h5 font-weight-medium">
                    <a class="link-title" href="blog-single.html">Wiley Research Seminar, Tokyo, Japan - 28 June 2020</a>
                  </h2>
                  <p>The next Wiley Research Seminar is a perfect opportunity to discuss publishing trends with researchers, academics, learned societies and other corporate peers. Click here to be informed when registration opens.</p>
                </div>
          <!-- <div class="card-footer bg-transparent border-0 pt-0">
            <ul class="list-inline mb-0">
              <li class="list-inline-item pr-4"> <a href="#" class="text-muted"><i class="ti-comments mr-1 text-primary"></i> 131</a>
              </li>
              <li class="list-inline-item pr-4"> <a href="#" class="text-muted"><i class="ti-eye mr-1 text-primary"></i> 255</a>
              </li>
              <li class="list-inline-item"> <a href="#" class="text-muted"><i class="ti-comments mr-1 text-primary"></i> 14</a>
              </li>
            </ul>
          </div> -->
          <div></div>
        </div>
        <!-- End Blog Card -->
      </div>
      <div class="col-12 col-lg-4 mb-6 mb-lg-0">
        <!-- Blog Card -->
        <div class="card border-0 bg-transparent">
          <div class="position-absolute bg-dark text-white shadow-primary text-center p-2 ml-3 mt-3">WHITEPAPER</div>
          <img class="card-img-top shadow" src="assets/images/about/homepage-six.jpg" alt="Image" height="255" width="350">
          <div class="card-body pt-5"> <a class="d-inline-block text-muted mb-2" href="#">Blog</a>
            <h2 class="h5 font-weight-medium">
              <!-- <a class="link-title" href="blog-single.html">The most powerfull template that make you.</a> -->
            </h2>
            <p>Will visuals make your message pop? Our latest blog post explores how to boost engagement in your pharma marketing with a well-designed graphic.  </p>
          </div>
          <!-- <div class="card-footer bg-transparent border-0 pt-0">
            <ul class="list-inline mb-0">
              <li class="list-inline-item pr-4"> <a href="#" class="text-muted"><i class="ti-comments mr-1 text-primary"></i> 131</a>
              </li>
              <li class="list-inline-item pr-4"> <a href="#" class="text-muted"><i class="ti-eye mr-1 text-primary"></i> 255</a>
              </li>
              <li class="list-inline-item"> <a href="#" class="text-muted"><i class="ti-comments mr-1 text-primary"></i> 14</a>
              </li>
            </ul>
          </div> -->
          <div></div>
        </div>
        <!-- End Blog Card -->
      </div>
      <div class="col-12 col-lg-4">
        <!-- Blog Card -->
        <div class="card border-0 bg-transparent">
          <div class="position-absolute bg-dark text-white shadow-primary text-center p-2 ml-3 mt-3">VIDEO</div>
          <img class="card-img-top shadow" src="assets/images/about/homepage-three.jpg" alt="Image" height="255" width="350">
          <div class="card-body pt-5"> <a class="d-inline-block text-muted mb-2" href="#">VIDEO</a>
            <h2 class="h5 font-weight-medium">
              <!-- <a class="link-title" href="blog-single.html">A brand for a company is like a reputation person.</a> -->
            </h2>
            <p>Discover what a partnership with us looks like for so many global pharmaceutical companies. </p>
          </div>
        <!--   <div class="card-footer bg-transparent border-0 pt-0">
            <ul class="list-inline mb-0">
              <li class="list-inline-item pr-4"> <a href="#" class="text-muted"><i class="ti-comments mr-1 text-primary"></i> 131</a>
              </li>
              <li class="list-inline-item pr-4"> <a href="#" class="text-muted"><i class="ti-eye mr-1 text-primary"></i> 255</a>
              </li>
              <li class="list-inline-item"> <a href="#" class="text-muted"><i class="ti-comments mr-1 text-primary"></i> 14</a>
              </li>
            </ul>
          </div> -->
          <div></div>
        </div>
        <!-- End Blog Card -->
      </div>
    </div>
  </div>
</section>

<!--blog end-->

</div>

<!--body content end--> 


<!--footer start-->

<footer class="py-6 bg-primary position-relative">
  <div class="shape-1" style="height: 150px; overflow: hidden;">
    <!-- <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
      <path d="M0.00,49.98 C150.00,150.00 271.49,-50.00 500.00,49.98 L500.00,0.00 L0.00,0.00 Z" style="stroke: none; fill: #fff;"></path>
    </svg> -->
  </div>
  <div class="container mt-1">
    <div class="row">
      <div class="col-12 col-lg-5 col-xl-4 mr-auto mb-6 mb-lg-0">
        <div class="subscribe-form">
          <h5 class="mb-4 text-white">Send me relevant marketing solutions for corporate clients.</h5>
          
          <!-- <h6 class="text-light">Subscribe Our Newsletter</h6> -->
          <form id="mc-form" class="group">
            <div class="checkbox text-light" >
              <label><input type="checkbox" value=""> Yes, I consent to  receive email on  Wiley products and services and have read Wiley's privacy policy and Terms of Use. </label>
            </div>
            <input type="email" value="" name="EMAIL" class="email form-control" id="mc-email" placeholder="Email Address" required="" style="height: 60px;">
            <select class="form-control mt-2" id="sel1">
              <option>United States</option>
              <option>Canada</option>
              <option>Australia</option>
              <option>United Kingdom</option>
              <option>China</option>
              <option>Sigpapore</option>
              <option>France</option>
              <option>Germany</option>
            </select>
            <input class="btn btn-outline-light btn-block mt-3 mb-2" type="submit" name="subscribe" value="Subscribe">
          </form> <small class="text-light">By registering you confirm that you agree to the processing of your  personal data by Wiley as per Wiley's Privacy Policy.</small>
        </div>
      </div>
      <div class="col-12 col-lg-6 col-xl-7">
        <div class="row">
          <div class="col-12 col-sm-4 navbar-dark">
            <h5 class="mb-4 text-white">Pages</h5>
            <ul class="navbar-nav list-unstyled mb-0">
              <li class="mb-3 nav-item"><a class="nav-link" href="about-us-1.html">About</a>
              </li>
              <li class="mb-3 nav-item"><a class="nav-link" href="product-grid.html">Case Studies</a>
              </li>
              <li class="mb-3 nav-item"><a class="nav-link" href="faq.html">Resources</a>
              </li>
              <li class="mb-3 nav-item"><a class="nav-link" href="blog-card.html">Blogs</a>
              </li>
              <li class="nav-item"><a class="nav-link" href="contact-us.html">Contact Us</a>
              </li>
            </ul>
          </div>
          <div class="col-12 col-sm-4 mt-6 mt-sm-0 navbar-dark">
            <h5 class="mb-4 text-white">Service</h5>
            <ul class="navbar-nav list-unstyled mb-0">
              <li class="mb-3 nav-item"><a class="nav-link" href="#">Reach</a>
              </li>
              <li class="mb-3 nav-item"><a class="nav-link" href="#">Content</a>
              </li>
              <li class="mb-3 nav-item"><a class="nav-link" href="login.html">Engangement</a>
              </li>
              <!-- <li class="nav-item"><a class="nav-link" href="career.html">Careers</a>
              </li> -->
            </ul>
          </div>
          <div class="col-12 col-sm-4 mt-6 mt-sm-0 navbar-dark">
            <h5 class="mb-4 text-white">Legal</h5>
            <ul class="navbar-nav list-unstyled mb-0">
              <li class="mb-3 nav-item"><a class="nav-link" href="terms-and-conditions.html">Copyright  &copy 2020 Wiley</a>
              </li>
              <li class="mb-3 nav-item"><a class="nav-link" href="privacy-policy.html">Privacy Policy</a>
              </li>
              <li class="mb-3 nav-item"><a class="nav-link" href="privacy-policy.html">Sitemap</a>
              </li>
              <li class="nav-item"><a class="nav-link" href="#">Terms & Condition</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-12 col-sm-6">
            <a class="footer-logo text-white h2 mb-0" href="index.php">
              Wi<span class="font-weight-bold">ley.</span>
            </a>
          </div>
          <div class="col-12 col-sm-6 mt-6 mt-sm-0">
            <ul class="list-inline mb-0">
              <li class="list-inline-item"><a class="text-light ic-2x" href="#"><i class="la la-facebook"></i></a>
              </li>
              <!-- <li class="list-inline-item"><a class="text-light ic-2x" href="#"><i class="la la-dribbble"></i></a>
              </li>
              <li class="list-inline-item"><a class="text-light ic-2x" href="#"><i class="la la-instagram"></i></a>
              </li> -->
              <li class="list-inline-item"><a class="text-light ic-2x" href="#"><i class="la la-twitter"></i></a>
              </li>
              <li class="list-inline-item"><a class="text-light ic-2x" href="#"><i class="la la-linkedin"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="row text-white text-center mt-8">
     <!--  <div class="col">
      <hr class="mb-8">Copyright 2019 Bootsland Theme by <u><a class="text-white" href="#">ThemeHt</a></u> | All Rights Reserved</div> -->
    </div>
  </div>
</footer>

<!--footer end-->

</div>

<!-- page wrapper end -->


<!--back-to-top start-->

<div class="scroll-top"><a class="smoothscroll" href="#top"><i class="las la-angle-up"></i></a></div>

<!--back-to-top end-->

<!-- inject js start -->

<script src="assets/js/theme-plugin.js"></script>
<script src="assets/js/theme-script.js"></script>

<!-- inject js end -->

</body>

</html>
