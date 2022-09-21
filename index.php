<?php
session_start();
if (isset($_SESSION['username'])) {
?>
<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <link rel="icon" href="images/favicon.png" type="image/gif" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Tracork</title>

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <!-- range slider -->
    <!-- font awesome style -->
    <link href="css/font-awesome.min.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />

</head>

<body>

    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section">
            <div class="header_top">
                <div class="container-fluid">
                    <div class="top_nav_container">
                        <a class="navbar-brand d-none d-lg-flex" href="index.php">
                            <span>
                                Woodstreet Academy Computer Repairs
                            </span>
                        </a>
                        <div class="contact_nav">
                            <a href="">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <span>
                                    Call : +01 123455678990
                                </span>
                            </a>
                            <a href="">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <span>
                                    Email : woodstreetacademy@repairs.co.za
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header_bottom">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg custom_nav-container ">
                        <a class="navbar-brand d-lg-none" href="index.php">
                            <span>
                                Woodstreet Adacemy Computer Repairs
                            </span>
                        </a>

                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class=""> </span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <?php
                  if (isset($_SESSION['type'])) {
                  ?>
                                <li class="nav-item">
                                    <a class="nav-link pl-lg-0" href="index.php">Home </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="service.html">Services</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.html"> About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="why.html">Why Us</a>
                                </li>
                                <?php
                    if ($_SESSION['type'] == 1) {
                    ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="manage.php"> Manage</a>
                                </li>
                                <?php
                    }
                    ?>
                                <li class="nav-item active">
                                    <a class="nav-link" href="signup.php">new User<span class="sr-only">(current)</span>
                                    </a>
                                </li>
                                <?php
                  } else { ?>
                                <li class="nav-item active">
                                    <a class="nav-link" href="track.php">Track</a>
                                </li>
                                <?php              }
                  ?>
                                <li class="nav-item active">
                                    <a class="nav-link" href="contacts.html">contact</a>
                                </li>
                            </ul>
                            <from class="search_form">
                                <input type="text" class="form-control" placeholder="Search here...">
                                <button class="" type="submit">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </button>
                            </from>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <!-- end header section -->
        <!-- slider section -->
        <section class="slider_section ">
            <div class="slider-bg">
                <img src="images/slider-bg.jpg" alt="">
            </div>
            <div id="customCarousel1" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container ">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="detail-box">
                                        <h1>
                                            Computer problem? <br>
                                            We will fix your computer
                                        </h1>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste quam velit
                                            saepe dolorem deserunt quo quidem ad optio.
                                        </p>
                                        <a href="">
                                            Read More
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container ">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="detail-box">
                                        <h1>
                                            Computer problem? <br>
                                            We will fix your computer
                                        </h1>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste quam velit
                                            saepe dolorem deserunt quo quidem ad optio.
                                        </p>
                                        <a href="">
                                            Read More
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container ">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="detail-box">
                                        <h1>
                                            Computer problem? <br>
                                            We will fix your computer
                                        </h1>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste quam velit
                                            saepe dolorem deserunt quo quidem ad optio.
                                        </p>
                                        <a href="">
                                            Read More
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel_btn_box">
                    <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </section>
        <!-- end slider section -->
    </div>


    <!-- service section -->

    <section class="service_section layout_padding">
        <div class="service_container">
            <div class="container ">
                <div class="heading_container heading_center">
                    <h2>
                        Our <span>Services</span>
                    </h2>
                    <p>
                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                        alteration
                    </p>
                </div>
                <div class="row">
                    <div class="col-md-6 ">
                        <div class="box ">
                            <div class="img-box">
                                <img src="images/s1.png" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Computer Repair
                                </h5>
                                <p>
                                    fact that a reader will be distracted by the readable content of a page when looking
                                    at its layout.
                                    The
                                    point of using
                                </p>
                                <a href="">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="box ">
                            <div class="img-box">
                                <img src="images/s2.png" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Hardware Replacement
                                </h5>
                                <p>
                                    fact that a reader will be distracted by the readable content of a page when looking
                                    at its layout.
                                    The
                                    point of using
                                </p>
                                <a href="">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="box ">
                            <div class="img-box">
                                <img src="images/s3.png" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Data Recovery
                                </h5>
                                <p>
                                    fact that a reader will be distracted by the readable content of a page when looking
                                    at its layout.
                                    The
                                    point of using
                                </p>
                                <a href="">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="box ">
                            <div class="img-box">
                                <img src="images/s4.png" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Software Update
                                </h5>
                                <p>
                                    fact that a reader will be distracted by the readable content of a page when looking
                                    at its layout.
                                    The
                                    point of using
                                </p>
                                <a href="">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-box">
                    <a href="">
                        See All
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- end service section -->

    <!-- about section -->

    <section class="about_section">
        <div class="container ">
            <div class="row">
                <div class="col-md-6">
                    <div class="detail-box">
                        <div class="heading_container">
                            <h2>
                                We Provide Best Service
                            </h2>
                        </div>
                        <p>
                            Fast Business Funding is a leading marketplace for business loans in the United States and
                            Australia. The
                            company helps small-to-medium businesses get the right funding solutions by matching them
                            with optimal
                            lenders in the quickest and simplest way possible.
                            Fast Business Funding is rapidly growing with over 55,000 loyal customers registered through
                            its platform.
                        </p>
                        <a href="">
                            Read More
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="img-box">
                        <img src="images/about-img.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end about section -->

    <!-- why us section -->

    <section class="why_us_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Why Choose Us
                </h2>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="box ">
                        <div class="img-box">
                            <img src="images/w1.png" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                Free Diagnostics
                            </h5>
                            <p>
                                variations of passages of Lorem Ipsum available
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box ">
                        <div class="img-box">
                            <img src="images/w2.png" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                Quick Repair Process
                            </h5>
                            <p>
                                variations of passages of Lorem Ipsum available
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box ">
                        <div class="img-box">
                            <img src="images/w3.png" alt="">
                        </div>
                        <div class="detail-box">
                            <h5>
                                Low Price Guarantee
                            </h5>
                            <p>
                                variations of passages of Lorem Ipsum available
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end why us section -->

    <!-- client section -->

    <section class="client_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    What Our Customers Say
                </h2>
            </div>
            <div class="carousel-wrap">
                <div class="owl-carousel">
                    <div class="item">
                        <div class="box">
                            <div class="client_id">
                                <div class="img-box">
                                    <img src="images/client-1.jpg" alt="">
                                </div>
                                <div class="client_detail">
                                    <div class="client_info">
                                        <h6>
                                            Mike Miller
                                        </h6>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="client_text">
                                <p>
                                    Chunks as necessary, making this the first true generator on the Internet. It uses a
                                    dictionary of over 200 Latin words, combined with a handful of model sentence
                                    structures, to generate Lorem Ipsum
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <div class="client_id">
                                <div class="img-box">
                                    <img src="images/client-2.jpg" alt="">
                                </div>
                                <div class="client_detail">
                                    <div class="client_info">
                                        <h6>
                                            Lex William
                                        </h6>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="client_text">
                                <p>
                                    Chunks as necessary, making this the first true generator on the Internet. It uses a
                                    dictionary of over 200 Latin words, combined with a handful of model sentence
                                    structures, to generate Lorem Ipsum
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <div class="client_id">
                                <div class="img-box">
                                    <img src="images/client-1.jpg" alt="">
                                </div>
                                <div class="client_detail">
                                    <div class="client_info">
                                        <h6>
                                            Mike Miller
                                        </h6>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="client_text">
                                <p>
                                    Chunks as necessary, making this the first true generator on the Internet. It uses a
                                    dictionary of over 200 Latin words, combined with a handful of model sentence
                                    structures, to generate Lorem Ipsum
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <div class="client_id">
                                <div class="img-box">
                                    <img src="images/client-2.jpg" alt="">
                                </div>
                                <div class="client_detail">
                                    <div class="client_info">
                                        <h6>
                                            Lex William
                                        </h6>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="client_text">
                                <p>
                                    Chunks as necessary, making this the first true generator on the Internet. It uses a
                                    dictionary of over 200 Latin words, combined with a handful of model sentence
                                    structures, to generate Lorem Ipsum
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end client section -->

    <!-- contact section -->
    <section class="contact_section layout_padding">

        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Contact Us
                </h2>
            </div>
            <div class="row">
                <div class="col-md-9 mx-auto">
                    <div class="form_container">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" placeholder="First Name" />
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" placeholder="Last Name" />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="email" class="form-control" placeholder="Email" />
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" placeholder="Phone Number" />
                                </div>
                            </div>
                            <div class="form-group ">
                                <input type="text" class="message-box" placeholder="Message" />
                            </div>
                            <div class="btn-box">
                                <button type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end contact section -->


    <!-- footer section -->
    <footer class="footer_section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 footer-col">
                    <div class="footer_detail">
                        <h4>
                            About
                        </h4>
                        <p>
                            Necessary, making this the first true generator on the Internet. It uses a dictionary of
                            over 200 Latin words, combined with a handful
                        </p>
                        <div class="footer_social">
                            <a href="">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2 mx-auto footer-col">
                    <div class="footer_link_box">
                        <h4>
                            Links
                        </h4>
                        <div class="footer_links">
                            <a class="active" href="index.php">
                                Home
                            </a>
                            <a class="" href="service.html">
                                Services
                            </a>
                            <a class="" href="about.html">
                                About
                            </a>
                            <a class="" href="why.html">
                                Why Us
                            </a>
                            <a class="" href="contact.html">
                                Contact Us
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 footer-col">
                    <div class="footer_contact">
                        <h4>
                            Contact Info
                        </h4>
                        <div class="contact_link_box">
                            <p>
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span>
                                    Location
                                </span>
                            </p>
                            <a href="">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <span>
                                    Call +01 1234567890
                                </span>
                            </a>
                            <a href="">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <span>
                                    demo@gmail.com
                                </span>
                            </a>
                            <p>
                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <span>
                                    Mon-Sat: 09.00 am - 06.00 pm
                                </span>
                            </p>
                            <p>
                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <span>
                                    Sunday: closed
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 footer-col">
                    <div class="map_container">
                        <div class="map">
                            <div id="googleMap"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-info">
            <div class="container">
                <p>
                    &copy; <span id="displayYear"></span> All Rights Reserved By
                    <a href="https://html.design/">Free Html Templates</a>
                </p>
            </div>
        </div>
    </footer>
    <!-- footer section -->

    <!-- jQery -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    </script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
    </script>
    <!-- End Google Map -->

</body>

</html>
<?php
} else {
  header("Location: login.html");
}
?>