<!DOCTYPE html>
<html>
<?php
//session start
session_start();
?>

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

<body class="sub_page">

    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section">
            <div class="header_top">
                <div class="container-fluid">
                    <div class="top_nav_container">
                        <a class="navbar-brand d-none d-lg-flex" href="index.html">
                            <span>
                                Tracork
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
                                    Email : demo@gmail.com
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header_bottom">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg custom_nav-container ">
                        <a class="navbar-brand d-lg-none" href="index.html">
                            <span>
                                Tracork
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
                                if (isset($_SESSION['userName'])) {
                                ?>
                                <li class="nav-item">
                                    <a class="nav-link pl-lg-0" href="index.html">Home </a>
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

                                <li class="nav-item active">
                                    <a class="nav-link" href="contacts.html">contact</a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="signup.php">new User<span class="sr-only">(current)</span>
                                    </a>
                                </li>
                                <?php
                                } else {
                                ?>
                                <li class="nav-item active">
                                    <a class="nav-link" href="login.php">login</a>
                                </li>
                                <?php
                                }
                                ?>
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
    </div>

    <!-- contact section -->
    <section class="contact_section layout_padding">

        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Sign Up
                </h2>
            </div>
            <div class="row">
                <div class="col-md-9 mx-auto">
                    <div class="form_container">
                        <form action="php/newUser.php" method="post">
                            <div class="form-group col-md-6">
                                <label for="type">UserType:</label>

                                <select id="type" name="type" required>
                                    <option value="1">Admin</option>
                                    <option value="2">Technician</option>
                                    <option value="3">Customer</option>
                                </select>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" name="name" id="name"
                                        placeholder="First Name" required />
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" name="lastname" id="lastname"
                                        placeholder="Last Name" required />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="email" id="email" name="email" class="form-control" placeholder="Email"
                                        required />
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" name="phone" placeholder="Phone Number"
                                        id="phone" required />
                                </div>
                            </div>
                            <div class=" form-group ">
                                <label for="" class=" form-label">Password</label>
                                <input type="password" class="form-control" name="password" id="txtNewPassword"
                                    placeholder="" required>
                            </div>
                            <div class="form-group ">
                                <label for="" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" name="" id="txtConfirmPassword"
                                    placeholder="" required>
                                <div id="divCheckPasswordMatch"></div>
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
                            <a class="active" href="index.html">
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
<script>
//password verification
function checkPasswordMatch() {
    var password = $("#txtNewPassword").val();
    var confirmPassword = $("#txtConfirmPassword").val();

    if (password != confirmPassword)
        $("#divCheckPasswordMatch").html("<span style = 'color: red;'>Passwords do not match!</span>");
    else
        $("#divCheckPasswordMatch").html("<span style = 'color: green;'> Passwords match. </span>");
}

$(document).ready(function() {
    $("#txtConfirmPassword").keyup(checkPasswordMatch);
});
</script>

</html>