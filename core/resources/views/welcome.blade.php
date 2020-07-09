<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Home</title>

</head>
<body>

<nav class="navbar navbar-expand-md navbar-light bg-success">
    <a href="#" class="navbar-brand">Wallet</a>

    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <!--        <div class="navbar-nav">-->
        <!--            <a href="#" class="nav-item nav-link active">Home</a>-->
        <!--            <a href="#" class="nav-item nav-link">Profile</a>-->
        <!--            <a href="#" class="nav-item nav-link">Messages</a>-->
        <!--            <a href="#" class="nav-item nav-link disabled" tabindex="-1">Reports</a>-->
        <!--        </div>-->
        <div class="navbar-nav ml-auto">
            <a href="{{route('userLogin')}}" class="nav-item nav-link">Login</a>
            <a href="{{route('userRegister')}}" class="nav-item nav-link">Register</a>
        </div>
    </div>
</nav>

</br>
<div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner container">
        <div class="carousel-item active">
            <img src="{{asset('assets/frontEnd/4.jpg')}}" alt="Los Angeles">
        </div>
        <div class="carousel-item">
            <img src="{{asset('assets/frontEnd/5.jpg')}}" alt="Chicago">
        </div>
        <div class="carousel-item">
            <img src="{{asset('assets/frontEnd/7.jpg')}}" alt="New York">
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>

</div>



</br>
</br>
<div data-aos="fade-right">
    <section  class="we-do" >
        <div class="container">
            <div class="we-do-details">
                <div class="section-header text-center">
                    <h2>What We Do</h2>
                    <p>
                        Pallamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </p>
                </div><!--/.section-header-->
                <div class="we-do-carousel">
                    <div class="row">
                        <div class="col-sm-4 col-xs-12">
                            <div class="single-we-do-box text-center">
                                <div class="we-do-description">
                                    <div class="we-do-info">
                                        <div class="we-do-img">
                                            <img src="{{asset('assets/frontEnd/do.jpg')}}" alt="image of consultency" />
                                        </div><!--/.we-do-img-->
                                        <div class="we-do-topics">
                                            <h2>
                                                <a href="#">
                                                    Business Consultancy
                                                </a>
                                            </h2>
                                        </div><!--/.we-do-topics-->
                                    </div><!--/.we-do-info-->
                                    <div class="we-do-comment">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ul.
                                        </p>
                                    </div><!--/.we-do-comment-->
                                </div><!--/.we-do-description-->
                            </div><!--/.single-we-do-box-->
                        </div><!--/.col-->
                        <div class="col-sm-4 col-xs-12">
                            <div class="single-we-do-box text-center">
                                <div class="we-do-description">
                                    <div class="we-do-info">
                                        <div class="we-do-img">
                                            <img src="{{asset('assets/frontEnd/do.jpg')}}" alt="image of business" />
                                        </div><!--/.we-do-img-->
                                        <div class="we-do-topics">
                                            <h2>
                                                <a href="#">
                                                    help to grow Business
                                                </a>
                                            </h2>
                                        </div><!--/.we-do-topics-->
                                    </div><!--/.we-do-info-->
                                    <div class="we-do-comment">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ul.
                                        </p>
                                    </div><!--/.we-do-comment-->
                                </div><!--/.we-do-description-->
                            </div><!--/.single-we-do-box-->
                        </div><!--/.col-->
                        <div class="col-sm-4 col-xs-12">
                            <div class="single-we-do-box text-center">
                                <div class="we-do-description">
                                    <div class="we-do-info">
                                        <div class="we-do-img">
                                            <img src="{{asset('assets/frontEnd/do.jpg')}}" alt="image of support" />
                                        </div><!--/.we-do-img-->
                                        <div class="we-do-topics">
                                            <h2>
                                                <a href="#">
                                                    great support
                                                </a>

                                            </h2>
                                        </div><!--/.we-do-topics-->
                                    </div><!--/.we-do-info-->
                                    <div class="we-do-comment">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ul.
                                        </p>
                                    </div><!--/.we-do-comment-->
                                </div><!--/.we-do-description-->
                            </div><!--/.single-we-do-box-->
                        </div><!--/.col-->
                    </div><!--/.row-->
                </div><!--/.we-do-carousel-->
            </div><!--/.we-do-details-->
        </div><!--/.container-->

    </section>
</div>
</br>
</br>
<div data-aos="fade-left">
    <section id="about" class="about-us">
        <div class="container">
            <div class="about-us-content">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="single-about-us">
                            <div class="about-us-txt">
                                <h2>About Us</h2>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                    laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse.
                                </p>
                                <p> Duis aute irure dolor in reprehenderit in voluptate velit esse.Duis aute irure dolor in reprehenderit in voluptate velit esse.
                                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.
                                </p>
                                <div class="project-btn">
                                    <a href="#"  class="project-view">learn more
                                    </a>
                                </div><!--/.project-btn-->
                            </div><!--/.about-us-txt-->
                        </div><!--/.single-about-us-->
                    </div><!--/.col-->
                    <div class="col-sm-6">
                        <div class="single-about-us">
                            <div class="about-us-img">
                                <img src="{{asset('assets/frontEnd/about.jpg')}}" alt="about images">
                            </div><!--/.about-us-img-->
                        </div><!--/.single-about-us-->
                    </div><!--/.col-->
                </div><!--/.row-->
            </div><!--/.about-us-content-->
        </div><!--/.container-->

    </section>
</div>
</br>
</br>



<div data-aos="fade-down-right">
    <section id="service"  class="service">
        <div class="container">
            <div class="service-details">
                <div class="section-header text-center">
                    <h2>Our Services</h2>
                    <p>
                        Pallamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </p>
                </div><!--/.section-header-->
                <div class="service-content-one">
                    <div class="row">
                        <div class="col-sm-4 col-xs-12">
                            <div class="service-single text-center">
                                <div class="service-img">
                                    <img src="{{asset('assets/frontEnd/s1.jpg')}}" alt="image of service" />
                                </div><!--/.service-img-->
                                <div class="service-txt">
                                    <h2>
                                        <a href="#">busisness planning</a>
                                    </h2>
                                    <p>
                                        Lorem ipsum dolo dolor in  in voluptate velit esse cillum dolore. epteur sint oat cupidatat
                                    </p>
                                    <a href="#" class="service-btn">
                                        learn more
                                    </a>
                                </div><!--/.service-txt-->
                            </div><!--/.service-single-->
                        </div><!--/.col-->
                        <div class="col-sm-4 col-xs-12">
                            <div class="service-single text-center">
                                <div class="service-img">
                                    <img src="{{asset('assets/frontEnd/s2.jpg')}}" alt="image of service" />
                                </div><!--/.service-img-->
                                <div class="service-txt">
                                    <h2>
                                        <a href="#">busisness consultency</a>
                                    </h2>
                                    <p>
                                        Lorem ipsum dolo dolor in  in voluptate velit esse cillum dolore. epteur sint oat cupidatat
                                    </p>
                                    <a href="#" class="service-btn">
                                        learn more
                                    </a>
                                </div><!--/.service-txt-->
                            </div><!--/.service-single-->
                        </div><!--/.col-->
                        <div class="col-sm-4 col-xs-12">
                            <div class="service-single text-center">
                                <div class="service-img">
                                    <img src="{{asset('assets/frontEnd/s1.jpg')}}" alt="image of service" />
                                </div><!--/.service-img-->
                                <div class="service-txt">
                                    <h2>
                                        <a href="#">financial services</a>
                                    </h2>
                                    <p>
                                        Lorem ipsum dolo dolor in  in voluptate velit esse cillum dolore. epteur sint oat cupidatat
                                    </p>
                                    <a href="#" class="service-btn">
                                        learn more
                                    </a>
                                </div><!--/.service-txt-->
                            </div><!--/.service-single-->
                        </div><!--/.col-->
                    </div><!--/.row-->
                </div><!--/.service-content-one-->
                <div class="service-content-two">
                    <div class="row">
                        <div class="col-sm-4 col-xs-12">
                            <div class="service-single text-center">
                                <div class="service-img">
                                    <img src="{{asset('assets/frontEnd/s2.jpg')}}" alt="image of service" />
                                </div><!--/.service-img-->
                                <div class="service-txt">
                                    <h2>
                                        <a href="#">risk management</a>
                                    </h2>
                                    <p>
                                        Lorem ipsum dolo dolor in  in voluptate velit esse cillum dolore. epteur sint oat cupidatat
                                    </p>
                                    <a href="#" class="service-btn">
                                        learn more
                                    </a>
                                </div><!--/.service-txt-->
                            </div><!--/.service-single-->
                        </div><!--/.col-->
                        <div class="col-sm-4 col-xs-12">
                            <div class="service-single text-center">
                                <div class="service-img">
                                    <img src="{{asset('assets/frontEnd/s1.jpg')}}" alt="image of service" />
                                </div><!--/.service-img-->
                                <div class="service-txt">
                                    <h2>
                                        <a href="#">expert advisers</a>
                                    </h2>
                                    <p>
                                        Lorem ipsum dolo dolor in  in voluptate velit esse cillum dolore. epteur sint oat cupidatat
                                    </p>
                                    <a href="#" class="service-btn">
                                        learn more
                                    </a>
                                </div><!--/.service-txt-->
                            </div><!--/.service-single-->
                        </div><!--/.col-->
                        <div class="col-sm-4 col-xs-12">
                            <div class="service-single text-center">
                                <div class="service-img">
                                    <img src="{{asset('assets/frontEnd/s2.jpg')}}" alt="image of service" />
                                </div><!--/.service-img-->
                                <div class="service-txt">
                                    <h2>
                                        <a href="#">24/7 customer support</a>
                                    </h2>
                                    <p>
                                        Lorem ipsum dolo dolor in  in voluptate velit esse cillum dolore. epteur sint oat cupidatat
                                    </p>
                                    <a href="#" class="service-btn">
                                        learn more
                                    </a>
                                </div><!--/.service-txt-->
                            </div><!--/.service-single-->
                        </div><!--/.col-->
                    </div><!--/.row-->
                </div><!--/.service-content-two-->
            </div><!--/.service-details-->
        </div><!--/.container-->

    </section>
</div>

</br>
</br>
<div data-aos="fade-up">
    <section id="pricing" class="pricing">
        <div class="container">
            <div class="pricing-details">
                <div class="section-header text-center">
                    <h2 class="price-head">Our Pricing Table</h2>
                    <p>
                        Pallamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </p>
                </div><!--/.section-header-->
                <div class="pricing-content">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="pricing-box">
                                <div class="card bg-primary text-white mb-4">
                                    <h2 class="text-center">Basic</h2>
                                    <h3 class="text-center"><span>$</span>99</h3>
                                    <p class="text-center">monthly</p>
                                </div><!--/.pricing-header-->
                                <ul class="plan-lists">
                                    <li>01 user</li>
                                    <li>01 project</li>
                                    <li>01 advisor team</li>
                                    <li>complete statistics</li>
                                    <li>E-Mail support</li>
                                </ul><!--/ul-->

                                <!--/.project-btn-->
                            </div><!--/.pricing-box-->
                        </div><!--/.col-->

                        <div class="col-md-3 col-sm-6">
                            <div class="pricing-box">
                                <div class="card bg-info text-white mb-4">
                                    <h2 class="text-center">Standared</h2>
                                    <h3 class="text-center"><span>$</span>199</h3>
                                    <p class="text-center">monthly</p>
                                </div><!--/.pricing-header-->
                                <ul class="plan-lists">
                                    <li>05 user</li>
                                    <li>05 project</li>
                                    <li>05 advisor team</li>
                                    <li>complete statistics</li>
                                    <li>full support</li>
                                </ul><!--/ul-->

                                <!--/.project-btn-->
                            </div><!--/.pricing-box-->
                        </div><!--/.col-->

                        <div class="col-md-3 col-sm-6">
                            <div class="pricing-box">
                                <div class="card bg-secondary text-white mb-4">
                                    <h2 class="text-center">Adavanced</h2>
                                    <h3 class="text-center"><span>$</span>299</h3>
                                    <p class="text-center">monthly</p>
                                </div><!--/.pricing-header-->
                                <ul class="plan-lists">
                                    <li>10 user</li>
                                    <li>10 project</li>
                                    <li>10 advisor team</li>
                                    <li>complete statistics</li>
                                    <li>full support</li>
                                </ul><!--/ul-->

                                <!--/.project-btn-->
                            </div><!--/.pricing-box-->
                        </div><!--/.col-->

                        <div class="col-md-3 col-sm-6">
                            <div class="pricing-box">
                                <div class="card bg-success text-white mb-4">
                                    <h2 class="text-center">Unlimited</h2>
                                    <h3 class="text-center"><span>$</span>399</h3>
                                    <p class="text-center">monthly</p>
                                </div><!--/.pricing-header-->
                                <ul class="plan-lists">
                                    <li>unlimited user</li>
                                    <li>unlimited project</li>
                                    <li>unlimited advisor team</li>
                                    <li>complete statistics</li>
                                    <li>full support</li>
                                </ul><!--/ul-->

                                <!--/.project-btn-->
                            </div><!--/.pricing-box-->
                        </div><!--/.col-->

                    </div><!--/.row-->
                </div><!--/.pricing-content-->
            </div><!--/.pricing-details-->
        </div><!--/.container-->

    </section>
</div>

</br>
</br>
<header class="bg-secondary text-center py-3 mb-4 container">
    <div class="container">
        <h1 class="font-weight-light text-white">Our Profile</h1>
    </div>
</header>
<div data-aos="zoom-in">
    <section class="hm-footer bg-dark">
        <div class="container">
            <div class="hm-footer-details">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="hm-footer-widget">
                            <div class="hm-foot-title ">
                                <div class="logo">
                                    <a href="index.html">
                                        <img src="{{asset('assets/frontEnd/soft.jpg')}}" alt="logo" />
                                    </a>
                                </div><!-- /.logo-->
                            </div><!--/.hm-foot-title-->
                            <div class="hm-foot-para text-white">
                                <p>
                                    Lorem ipsum dolor sit amt conetur adcing elit. Sed do eiusod tempor utslr. Ut laboris nisi ut aute irure dolor in rein velit esse.
                                </p>
                            </div><!--/.hm-foot-para-->
                            <!--/.hm-foot-icon-->
                        </div><!--/.hm-footer-widget-->
                    </div><!--/.col-->
                    <div class=" col-md-2 col-sm-6 col-xs-12">
                        <div class="hm-footer-widget">
                            <div class="hm-foot-title">
                                <h4 class="text-white">Useful Links</h4>
                            </div><!--/.hm-foot-title-->
                            <div class="footer-menu ">
                                <ul class="text-white">
                                    <li><a href="index.html" >Home</a></li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="services.html">Service</a></li>
                                    <li><a href="portfolio.html">Portfolio</a></li>
                                    <li><a href="blog.html">Blog</a></li>

                                </ul>
                            </div><!-- /.footer-menu-->
                        </div><!--/.hm-footer-widget-->
                    </div><!--/.col-->
                    <!--/.col-->
                    <div class=" col-md-3 col-sm-6  col-xs-12">
                        <div class="hm-footer-widget">
                            <div class="hm-foot-title">
                                <h4 class="text-white"> Our Newsletter</h4>
                            </div><!--/.hm-foot-title-->
                            <div class="hm-foot-para">
                                <p class="para-news text-white">
                                    Subscribe to our newsletter to get the latest News and offers..
                                </p>
                            </div><!--/.hm-foot-para-->
                            <div class="hm-foot-email">
                                <div class="foot-email-box">
                                    <input type="text" class="form-control" placeholder="Email Address">
                                </div><!--/.foot-email-box-->
                                <div class="foot-email-subscribe text-center">
                                    <button type="button" class="btn btn-primary">go</button>
                                </div><!--/.foot-email-icon-->
                            </div><!--/.hm-foot-email-->
                        </div><!--/.hm-footer-widget-->
                    </div><!--/.col-->
                </div><!--/.row-->
            </div><!--/.hm-footer-details-->
        </div><!--/.container-->

    </section>

</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</body>
</html>
