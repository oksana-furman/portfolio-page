<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $message = htmlspecialchars($_POST["message"]);
        $name = htmlspecialchars($_POST["name"]);
        $headers = "FROM : " . $email . "\r\n";
        $myEmail = "oksan9a.furman@gmail.com";
        if (mail($myEmail, "message coming from the contact form", $message, $headers)) {
            echo "sent";
        } else {
            echo "error";
            }
    }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Oksana Furman</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">

    <link href="https://fonts.googleapis.com/css?family=Karla:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/style.css">


    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <nav id="colorlib-main-nav" role="navigation">
        <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle active"><i></i></a>
        <div class="js-fullheight colorlib-table">
            <div class="colorlib-table-cell js-fullheight">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="text" class="form-control" id="search" placeholder="Enter any key to search...">
                            <button type="submit" class="btn btn-primary"><i class="icon-search3"></i></button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="services.html">Services</a></li>
                            <li><a href="work.html">Work</a></li>
                            <li class="active"><a href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="head-title">Works</h2>
                        <a href="images/work-1.jpg" class="gallery image-popup-link text-center" style="background-image: url(images/work-1.jpg);">
                            <span><i class="icon-search3"></i></span>
                        </a>
                        <a href="images/work-2.jpg" class="gallery image-popup-link text-center" style="background-image: url(images/work-2.jpg);">
                            <span><i class="icon-search3"></i></span>
                        </a>
                        <a href="images/work-3.jpg" class="gallery image-popup-link text-center" style="background-image: url(images/work-3.jpg);">
                            <span><i class="icon-search3"></i></span>
                        </a>
                        <a href="images/work-4.jpg" class="gallery image-popup-link text-center" style="background-image: url(images/work-4.jpg);">
                            <span><i class="icon-search3"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div id="colorlib-page">
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="colorlib-navbar-brand">
                            <a class="colorlib-logo" href="index.html"><span>Ok</span><span>sa</span><span>na</span></a>
                        </div>
                        <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
                    </div>
                </div>
            </div>
        </header>

        <div id="colorlib-contact">
            <div class="container">
                <div class="row text-center">
                    <h2 class="bold">Contact</h2>
                </div>
                <div class="row">
                    <div class="col-md-12 col-md-offset-0 text-center animate-box intro-heading">
                        <span>Contact</span>
                        <h2>Contact Me</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="rotate">
                            <h2 class="heading">Contact</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-md-offset-0">
                        <div class="row">
                            <!-- <div class="col-md-4 animate-box"> -->
                            <div class="col-md-4">
                                <h3>Contact me</h3>
                                <ul class="contact-info">
                                    <!-- <li><span><i class="icon-map5"></i></span>88 West 21th Street, Suite 721 New York NY 10016</li> -->
                                    <li><span><i class="icon-phone4"></i> </span>+ 43 670 355 09 71</li>
                                    <li><span><i class="icon-envelope2"></i> </span><a href="#"> oksan9a.furman@gmail.com </a></li>
                                </ul>
                            </div>
                            <!-- <div class="col-md-7 col-md-push-1 animate-box"> -->
                            <div class="col-md-7 col-md-push-1">
                                <form class="form-group" method="post">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea name="message" class="form-control" id="" cols="30" rows="7" placeholder="Message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input name="name" type="text" class="form-control" placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input name="email" type="email" class="form-control" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="submit" name="submit" value="Send Message" class="btn btn-primary">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <div id="footer">
                <div class="container">
                    <!-- <div class="row">
                        <div class="col-md-4 col-pb-sm">
                            <div class="row">
                                <div class="col-md-10">
                                    <h2>Let's Talk</h2>
                                    <p>A small river named Duden flows by their place and supplies.</p>
                                    <p><a href="#">noah@info.com</a></p>
                                    <p class="colorlib-social-icons">
                                        <a href="#"><i class="icon-facebook4"></i></a>
                                        <a href="#"><i class="icon-twitter3"></i></a>
                                        <a href="#"><i class="icon-googleplus"></i></a>
                                        <a href="#"><i class="icon-dribbble2"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div id="contactDiv">
                                <h3>Contact Me</h3>
                                <ul class="contact-info">

                                    <li><span><i class="icon-phone4"></i></span> + 43 670 355 09 71 </li>
                                    <li><span><i class="icon-envelope2"></i></span><a href="#">oksan9a.furman@gmail.com</a></li>
                                    <!-- <li><span><i class="icon-globe3"></i></span><a href="#">www.yoursite.com</a></li> -->
                                </ul>
                            </div>
                            <p>
                                &copy;
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with <i class="icon-heart4" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>

</body>

</html>