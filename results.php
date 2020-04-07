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
  <script src="jquery-1.12.0.min.js" type="text/javascript"></script>

  <!-- Title -->
  <title>Wiley Corporate Solution</title>

  <!-- Favicon Icon -->
  <link rel="shortcut icon" href="assets/images/favicon.ico" />

  <!-- inject css start -->
  <link href="assets/css/theme-plugin.css" rel="stylesheet" />
  <link href="assets/css/theme.min.css" rel="stylesheet" />
  <!-- inject css end -->

  <script type="text/javascript">
    $(document).ready(function(){

      $("#sel_cat").change(function(){
        var catid = $(this).val();

        $.ajax({
          url: 'getSubcats.php',
          type: 'post',
          data: {cat:catid},
          dataType: 'json',
          success:function(response){

            var len = response.length;

            $("#sel_subcat").empty();
            for( var i = 0; i<len; i++){
              var id = response[i]['item_id'];
              var field = response[i]['field'];

              $("#sel_subcat").append("<option value='"+id+"'>"+field+"</option>");
            }
          }
        });
      });
    });
  </script>
</head>

<body>

  <!-- page wrapper start -->

  <div class="page-wrapper">

    <!-- preloader start -->

    <!-- <div id="ht-preloader">
      <div class="loader clear-loader">
        <span></span>
        <p>WCS</p>
      </div>
    </div> -->

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
<section>
  <div class="container">
    <div class="row" style="background-color: #f5faff; margin: auto; padding: 5%;">
      <div class="col-lg-12">
        <!-- <?php echo '<h1>Search results for "'.$_GET['searchtext'].'"</h1><br>'; ?> -->
        <div class="row">
          <div class="col-lg-6">
            <label>Subject Area</label>
            <select class="form-control" id="sel_cat">
              <option value="0" disabled selected>Select</option>
              <?php 
              // Fetch Department
              $sql_cat = "SELECT * FROM cat ORDER BY name";
              $cat_data = mysqli_query($link,$sql_cat);
              while($row = mysqli_fetch_assoc($cat_data) ){
                $catid = $row['cat_id'];
                $cat_name = $row['name'];

                echo "<option value='".$catid."' >".$cat_name."</option>";
              }
              ?>
            </select>
          </div>
          <div class="col-lg-6">
            <label>Specific Subject Field</label>
            <select class="form-control" id="sel_subcat">
              <option value="0" disabled selected>Select</option>
            </select>
          </div>
        </div>

        <br>

        <form method="GET" action="results.php">
          <div class="row">
            <div class="col-lg-8">
              <input type="text" class="form-control" placeholder="Search" name="searchtext">
            </div>
            <div class="col-lg-4">
              <button type="submit" class="btn btn-primary" name="submitsearch" value="Search" style="height: 47px; width: 100%;">Search</button >
            </div>
          </div>
        </form>

      </div>
    </div>
    <div class="row" style="background-color: white;">
      <div class="col-lg-12"><br>
        <?php populate_main(); ?>
      </div>
    </div>
    <div class="col-lg-12 text-center"><br>
      <h5>Is the journal or publication you're looking for not listed? Search the Wiley Online Library with over 1,600 journals, 200+ reference works and 21,000 online books.</h5>
      <br>
      <a href="#" class="btn btn-primary" style="background-color:rgb(34,27,104); font-weight: 500;">Visit Wiley Online Library</a><br><br>
    </div><hr>
  </div>
  
</section>



<!--hero section end--> 

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

<script src="assets/js/theme-plugin.js"></script>
<script src="assets/js/theme-script.js"></script>

</body>

</html>
