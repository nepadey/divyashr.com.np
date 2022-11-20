<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Divya - Developer</title>
    <meta name="description" content="Divya Shrestha - Developer"/>
    <meta name="author" content="Divya"/>
    <meta name="keywords" content="web, web developer, developer, divya, Divya,Divya Shrestha, Shrestha Divya design website
"/>
    <meta name="theme-color" content="#2a2d35">

    <!--	og tags -->
    <meta property="og:title" content="Divya Shrestha - Developer"/>
    <meta property="og:image" content="{{asset('assets/images/avatar.jpg')}}"/>
    <meta property="og:url" content="{{asset('/')}}"/>
    <meta property="og:description"
          content="Passionate problem solver adoring work with new innovation and settle the issue by breaking them to littler simpler and solve them."/>
    <meta property="og:locale" content="np"/>
    <meta property="og:site_name" content="Personal"/>

    <!--	<meta property="og:type" content="video.movie"/>-->
    <!--	<meta property="og:audio" content="https://example.com/bond/theme.mp3"/>-->
    <!--	<meta property="og:determiner" content="the"/>-->
    <!--	<meta property="og:video" content="https://example.com/bond/trailer.swf"/>-->

    <link rel="icon" href="{{asset('assets/icon/favicon.jpg')}}" type="image/jpg">
    <link rel="stylesheet" href="{{asset('assets/css/vendor.css')}}"/>
    <link href="{{asset('assets/css/settings.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/justin-red.css')}}">
    <style>
        .services-list-1 {
            background-image: url("{{asset('assets/images/custom/web.jpg')}}");
        }

        .services-list-2 {
            background-image: url("{{asset('assets/images/custom/frontend.jpg')}}");
        }

        .services-list-3 {
            background-image: url("{{asset('assets/images/custom/backend.jpg')}}");
        }

        .services-list-4 {
            background-image: url("{{asset('assets/images/custom/analytics.jpg')}}");
        }

        .services-list-5 {
            background-image: url("{{asset('assets/images/custom/restApi.jpg')}}");
        }

        .services-list-back {
            background: #6c757d;
        }

        .navbar-nav .nav-link.active {
            color: #367181 !important;
            font-style: oblique;
        }
    </style>
</head>
<body data-spy="scroll" data-target=".navbar">



<div id="preloader" class="preloader">
    <div class="spinner-grow text-dark" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<div class="page-wrapper">
    <nav class="navbar navbar-expand-lg navbar-custom navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand  mr-auto " href="index-14.html">Divya</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler"
                    aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                <svg class="ham hamRotate ham1" viewBox="0 0 100 100" width="60">
                    <path class="line top"
                          d="m 30,33 h 40 c 0,0 9.044436,-0.654587 9.044436,-8.508902 0,-7.854315 -8.024349,-11.958003 -14.89975,-10.85914 -6.875401,1.098863 -13.637059,4.171617 -13.637059,16.368042 v 40"></path>
                    <path class="line middle" d="m 30,50 h 40"></path>
                    <path class="line bottom"
                          d="m 30,67 h 40 c 12.796276,0 15.357889,-11.717785 15.357889,-26.851538 0,-15.133752 -4.786586,-27.274118 -16.667516,-27.274118 -11.88093,0 -18.499247,6.994427 -18.435284,17.125656 l 0.252538,40"></path>
                </svg>
            </button>
            <div class="collapse navbar-collapse" id="navbarToggler">
                <ul class="navbar-nav ml-auto">
                    <li><a class="nav-link active" href="#home">Home</a></li>
                    <li><a class="nav-link" href="#services">Working Area</a></li>
                    <li><a class="nav-link" href="#skills">Skills</a></li>
                    <li><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="section-home " id="home">
        <div class="overlay d-flex justify-content-center align-items-center">
            <div class="overlay-wrap section-head">
                <span class="mb-2">Hello, I am</span>
                <h1>Divya Shrestha</h1>
            </div>
        </div>
        <div id="particles-js"></div>
    </section>
    <section class="section section-about" id="about">
        <div class="section-about-wrap">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-7">
                    <div class="about-desc">
                        <div class="about-desc-content">
                            <h2>About Me</h2>
                            <p class="mt-4 font-weight-light">
                                Passionate problem solver adoring work with new innovation and settle the issue by
                                breaking them to littler simpler and solve them.
                            </p>
                        </div>
                        <ul class="about-desc-social mt-4 list-unstyled list-inline">
                            <li class="list-inline-item"><a href="https://www.facebook.com/divyashr"><i
                                        class="fab fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a href="https://www.linkedin.com/in/divyashr/"><i
                                        class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5 d-none d-md-block">
                    <img class="img-fluid img-thumbnail" src="{{asset('assets/images/avatar.jpg')}}"
                         alt="About Picture">
                </div>
            </div>
        </div>
    </section>
    <section class="section section-services" id="services">
        <div class="container">
            <div class="section-head">
                <span>WHAT I DO</span>
                <h2>Working Area</h2>
            </div>
            <div class="row mt-4">
                <div class="col-sm-12 col-md-12">
                    <div class="services-flip wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".2s">
                        <div class="services-list">
                            <div class="services-list-front services-list-1">
                                <div class="flip-content">
                                    <h5 class="mb-0">Web Development</h5>
                                </div>
                            </div>
                            <div class="services-list-back col-sm-12 col-md-12">
                                <div class="flip-content">
                                    <div class="services-list-icon">
                                        <img src="{{asset('assets/icon/website.svg')}}" height="50" width="50">
                                    </div>
                                    <div class="mt-4">
                                        <h5 class="mb-0">Web Development</h5>
                                        <p class=" mt-3">
                                            Building, creating, and an maintaining websites. It includes
                                            aspects such as web design, web publishing, web programming, and database
                                            management.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="services-flip wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".4s">
                        <div class="services-list">
                            <div class="services-list-front services-list-2">
                                <div class="flip-content">
                                    <h5 class="mb-0">Frontend Design</h5>
                                </div>
                            </div>
                            <div class="services-list-back">
                                <div class="flip-content">
                                    <div class="services-list-icon">
                                        <img src="{{asset('assets/icon/frontend.svg')}}" height="50" width="50">
                                    </div>
                                    <div class="mt-4">
                                        <h5 class="mb-0">Frontend Design</h5>
                                        <p class=" mt-3">
                                            Frontend is the part of the website that you can see and interact with
                                            directly in order to receive the backend capabilities of the system. It
                                            involves everything that the user can see, touch and experience.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="services-flip wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".6s">
                        <div class="services-list">
                            <div class="services-list-front services-list-3">
                                <div class="flip-content">
                                    <h5 class="mb-0">Backend Engineering</h5>
                                </div>
                            </div>
                            <div class="services-list-back">
                                <div class="flip-content">
                                    <div class="services-list-icon">
                                        <img src="{{asset('assets/icon/coding.svg')}}" height="50" width="50">
                                    </div>
                                    <div class="mt-4">
                                        <h5 class="mb-0">Backend Engineering</h5>
                                        <p class=" mt-3">
                                            Backend, also referred to as the “server-side”, is the part of the website
                                            which you cannot see and interact with. Basically, everything that happens
                                            behind the scenes can be attributed to the backend.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="services-flip wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1s">
                        <div class="services-list">
                            <div class="services-list-front services-list-4">
                                <div class="flip-content">
                                    <h5 class="mb-0">Analytics</h5>
                                </div>
                            </div>
                            <div class="services-list-back">
                                <div class="flip-content">
                                    <div class="services-list-icon">
                                        <img src="{{asset('assets/icon/analytic.svg')}}" height="50" width="50">
                                    </div>
                                    <div class="mt-4">
                                        <h5 class="mb-0">Analytics</h5>
                                        <p class=" mt-3">
                                            Analyzing raw data in order to make conclusions about that
                                            information. Many of the techniques and processes of data analytics have
                                            been automated into mechanical processes and algorithms that work over raw
                                            data for human consumption.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="services-flip wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".8s">
                        <div class="services-list">
                            <div class="services-list-front services-list-5">
                                <div class="flip-content">
                                    <h5 class="mb-0">REST API</h5>
                                </div>
                            </div>
                            <div class="services-list-back">
                                <div class="flip-content">
                                    <div class="services-list-icon">
                                        <img src="{{asset('assets/icon/api.svg')}}" height="50" width="50">
                                    </div>
                                    <div class="mt-4">
                                        <h5 class="mb-0">REST API</h5>
                                        <p class=" mt-3">
                                            Those Application Programming Interface (API) that allows programs to talk
                                            to each other and developed by following the a set of rules that each
                                            developers follow.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-work" id="skills">
        <div class="container">
            <div class="section-head text-center">
                <span>What I Know </span>
                <h2>Skills</h2>
            </div>
        </div>
        <div class="container swiper-container swiper-portfolio wow fadeInUp" data-wow-duration="1.5s">
            <div class=" swiper-wrapper">
                <div class="portfolio-item swiper-slide slideshow" data-groups="all slideshow">
                    <a href="{{asset('assets/images/custom/frontendskill.jpg')}}"
                       class="portfolio-item--content simple-ajax-popup">
                        <div class="portfolio-item--img b-box">
                            <img src="{{asset('assets/images/custom/frontendskill.jpg')}}" class="img-fluid mx-auto"
                                 alt="work-img">
                        </div>
                        <div class="portfolio-item--desc d-flex justify-content-center align-items-center">
                            <div class="portfolio-item--desc-in">
                                <h1 class="text-white">Frontend Skill</h1>
                                <ol>
                                    <li class="ms-2 text-white">Html/Css</li>
                                    <li class="ms-2 text-white">Javascript/Jquery</li>
                                    <li class="ms-2 text-white">Responsive Design</li>
                                </ol>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="portfolio-item swiper-slide image" data-groups="all image">
                    <a href="{{asset('assets/images/custom/nodejs.jpg')}}"
                       class="portfolio-item--content simple-ajax-popup">
                        <div class="portfolio-item--img b-box">
                            <img src="{{asset('assets/images/custom/nodejs.jpg')}}" class="img-fluid mx-auto"
                                 alt="work-img">
                        </div>
                        <div class="portfolio-item--desc d-flex justify-content-center align-items-center">
                            <div class="portfolio-item--desc-in">
                                <h1 class="text-white">Backend Skill</h1>
                                <ol>
                                    <li class="ms-2 text-white">Express js</li>
                                    <li class="ms-2 text-white">Socket.io</li>
                                    <li class="ms-2 text-white">MEAN.io</li>
                                </ol>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="portfolio-item swiper-slide " data-groups="all slideshow">
                    <a href="{{asset('assets/images/custom/php.jpg')}}"
                       class="portfolio-item--content simple-ajax-popup">
                        <div class="portfolio-item--img b-box">
                            <img src="{{asset('assets/images/custom/php.jpg')}}" class="img-fluid mx-auto" alt="work-img">
                        </div>
                        <div class="portfolio-item--desc d-flex justify-content-center align-items-center">
                            <div class="portfolio-item--desc-in">
                                <h1 class="text-white">Backend Skill</h1>
                                <ol>
                                    <li class="ms-2 text-white">Laravel</li>
                                    <li class="ms-2 text-white">CodeIgniter</li>
                                    <li class="ms-2 text-white">Wordpress</li>
                                    <li class="ms-2 text-white">Ruby on Rails</li>
                                </ol>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="portfolio-item swiper-slide video" data-groups="all video">
                    <a href="{{asset('assets/images/custom/database.jpg')}}"
                       class="portfolio-item--content simple-ajax-popup">
                        <div class="portfolio-item--img b-box">
                            <img src="{{asset('assets/images/custom/database.jpg')}}" class="img-fluid mx-auto"
                                 alt="work-img">
                        </div>
                        <div class="portfolio-item--desc d-flex justify-content-center align-items-center">
                            <div class="portfolio-item--desc-in">
                                <h1 class="text-white">Database Skill</h1>
                                <ol>
                                    <li class="ms-2 text-white">SQL</li>
                                    <li class="ms-2 text-white">Mongo</li>
                                </ol>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="portfolio-item swiper-slide image" data-groups="all image">
                    <a href="{{asset('assets/images/p9-9.jpg')}}" class="portfolio-item--content simple-ajax-popup">
                        <div class="portfolio-item--img b-box">
                            <img src="{{asset('assets/images/p9-9.jpg')}}" class="img-fluid mx-auto" alt="work-img">
                        </div>
                        <div class="portfolio-item--desc d-flex justify-content-center align-items-center">
                            <div class="portfolio-item--desc-in">
                                <h1 class="text-white">Extra Skill</h1>
                                <ol>
                                    <li class="ms-2 text-white">AWS server creation and project Deployment</li>
                                    <li class="ms-2 text-white">Project Deployment in any Cpanel</li>
                                    <li class="ms-2 text-white">Version Control/Git</li>
                                    <li class="ms-2 text-white">Testing/Debugging</li>
                                </ol>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="portfolio-pagination"></div>
        </div>
    </section>
    <section class="section section-dark section-contact" id="contact">
        <div class="contact-Otherdetails">
            <div class="container">
                <div class="section-head">
                    <span>say Hello</span>
                    <h2>Contact </h2>
                </div>
                <div class="contact-details">
                    <div class="row">
                        <div class="col-md-4 col-lg-4">
                            <div class="contact-details--panel p-4 b-box text-center hover-state wow fadeInUp"
                                 data-wow-duration="1.5s">
                                <div class="mb-4">
                                    <i class="fas fa-map-marked-alt"></i>
                                </div>
                                <div class="mt-2">
                                    <a href="#" class="center">Itahari - 4, Sunsari<br/> Nepal </a>
                                    <p class="mt-1 font-weight-bold ">Address</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="contact-details--panel p-4 b-box text-center hover-state wow fadeInUp"
                                 data-wow-duration="1.5s">
                                <div class="mb-4">
                                    <i class="fas fa-mobile-alt  "></i>
                                </div>
                                <div class="mt-2">
                                    <a href="tel:9876543210" class="center">+9779824380151 <br/> +9779824380151</a>
                                    <p class="mt-1 font-weight-bold ">Call Us</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="contact-details--panel p-4 b-box text-center hover-state wow fadeInUp"
                                 data-wow-duration="1.5s" data-wow-delay=".2s">
                                <div class="mb-4">
                                    <i class="fas fa-envelope  "></i>
                                </div>
                                <div class="mt-2">
                                    <a href="mailto:hello@divyashr.com.np" class="center">hello@divyashr.com.np</a>
                                    <br/>
                                    <a href="mailto:divya@divyashr.com.np" class="center">divya@divyashr.com.np</a>
                                    <p class="mt-1 font-weight-bold ">Email Us</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php if (isset($_POST['form_submitted'])): ?> 
                    <h2>Thank You </h2>
                    <?php else: ?>
                            <h2>Register properly</h2>


                <div class="contact-form mt-5">
                    <form action="/" method="POST" >
                    @csrf
                        <h5 class="section-subHead mb-2"> Contact Form</h5>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group mt-3 wow fadeInUp" data-wow-duration="1.5s">
                                    <input name="name" id="name" type="text" class="form-control b-box"
                                         >
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mt-3 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".2s">
                                    <input name="email" id="email" type="email" class="form-control b-box"
                                           >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group mt-3 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
                                    <input type="text" class="form-control b-box" name="subject" id="subject"
                                          />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group mt-3 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".4s">
									<textarea name="comments" id="comments" rows="4" class="form-control b-box"
                                              "></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 text-center mt-4 mb-5  wow fadeInUp" data-wow-duration="1.5s"
                                 data-wow-delay=".5s">
                                <button class="btn hover-state">Submit</button>
                            </div>
                        </div>
                        <?php endif ?> 
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer section section-light">
        <div class="container">
            <p class="copyright text-center mb-0">&copy; Divya {{date("Y")}} | All Right Reserved</p>
        </div>
    </footer>
</div>
<script src="{{asset('assets/js/vendor.js')}}"></script>
<script src="{{asset('assets/js/particles.min.js')}}"></script>
<script src="{{asset('assets/js/particlesjs-config-4.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
</body>
</html>
