<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>AGROHEN ENTERPRISE </title>
    <meta name="description" content="Agrohen poultry enterprise is a private limited company that was incorporated under the constitution of Kenya government in the years 2021, dealing with production and distribution of improved kienyeji chicken.">
    <!--/google-fonts -->
    <link href="//fonts.googleapis.com/css2?family=Outfit:wght@400;600;700&display=swap" rel="stylesheet">
    <!--//google-fonts -->
    <!--/Template-CSS -->
    <link rel="stylesheet" href="{{asset('storage/assets/css/style-starter.css')}}">
    <!--//Template-CSS -->
</head>

<body>
    <!--/Header-->
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light stroke py-lg-0">
                <h1><a class="navbar-brand" href="/">
                        <span class="w3yellow">AGROHEN</span> ENTERPRISE
                    </a></h1>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav mx-lg-auto my-2 my-lg-0 navbar-nav-scroll">
                        <li class="nav-item">
                            <a class="nav-link {{request()->path()=='/'?'active':''}}" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{request()->path()=='about'?'active':''}}" href="/about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{request()->path()=='products'?'active':''}}" href="/products">Products</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{request()->path()=='article'?'active':''}}" href="article">Articles</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{request()->path()=='contact'?'active':''}}" href="/contact">Contact</a>
                        </li>

                    </ul>
                    <!--/search-right-->
                    <ul class="header-search me-lg-4">
                        <li class="nav-item search-right">
                            <a href="#search" class="btn search-btn btn-primary" title="search"><span class="fas fa-search me-2" aria-hidden="true"></span> Search</a>

                            <div id="search" class="pop-overlay">
                                <div class="popup">
                                    <h3 class="title-w3l two mb-4 text-left">Search Here</h3>
                                    <form action="/search" method="get" class="search-box d-flex position-relative">
                                        @csrf
                                        <input type="search" placeholder="Enter Keyword here" name="search" required="required" autofocus="">
                                        <button type="submit" class="btn"><span class="fas fa-search" aria-hidden="true"></span></button>
                                    </form>
                                </div>
                                <a class="close" href="#close">×</a>
                            </div>
                        </li>
                    </ul>
                    <!--//search-right-->
                </div>
                <!-- toggle switch for light and dark theme -->
                <div class="mobile-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>

                    </nav>
                </div>
                <div class="ms-4">
                    <a href="/admin"><i class="fa fa-user fa-2x text-"></i></a>
                </div>
            </nav>
        </div>
    </header>
    <div class="">
        @yield('content')
    </div>
    <footer class="w3l-footer">
        <div class="w3l-footer-16 py-5">
            <div class="container py-md-5 py-3 pb-0">
                <div class="row footer-p right-side">
                    <div class="col-lg-4 col-md-6 pe-lg-5">
                        <h2 class="footerw3l-logo"><a class="navbar-brand" href="index.html">
                                <span class="w3yellow">AGROHEN</span> ENTERPRISE
                            </a></h2>
                        <p class="mt-3"></p>
                        <div class="columns-2 mt-lg-5 mt-4">
                            <ul class="social">
                                <li><a href="https://www.facebook.com/profile.php?id=100095148372888" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <!-- <li><a href=""><i class="fab fa-twitter"></i></a>
                                </li> -->
                                <li><a href=" https://www.instagram.com/agrohen_poultry?igsh=YzljYTk1ODg3Zg==" target="_blank"><i class="fab fa-instagram"></i></a>
                                </li>
                                <li><a href="https://www.tiktok.com/@agrohen_001" target="_blank"><i class="fab fa-tiktok"></i></a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-lg-0 mt-5">
                        <div class="row">
                            <div class="col-xl-5 col-6 column">
                                <h3>Links</h3>
                                <ul class="footer-gd-16">
                                    <li><a href="/">About Us</a></li>
                                    <li><a href="/products">Products</a></li>

                                    <li><a href="/about">About Us</a></li>
                                    <li><a href="/articles">Articles</a></li>
                                    <li><a href="/contact">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="col-6 column">
                                <h3>Products</h3>
                                <ul class="footer-gd-16">
                                    <li><a href="#">Brown Eggs</a></li>
                                    <li><a href="#">Chicken Broiler</a></li>
                                    <li><a href="#">Free Shipping</a></li>
                                    <li><a href="#">Quality Matters</a></li>
                                    <li><a href="#">Poultry Cages</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-lg-4 col-md-6 column mt-lg-0 mt-4 pl-xl-0">
                        <h3>Instagram Feed</h3>
                        <div class="end-column row">
                            <div class="col-4 w3indta-grid">
                                <a href="#insta">
                                    <img src="assets/images/g1.jpg" class="img-fluid radius-image" alt="poultryfield">
                                </a>
                            </div>
                            <div class="col-4 w3indta-grid">
                                <a href="#insta">
                                    <img src="assets/images/g2.jpg" class="img-fluid radius-image" alt="poultryfield">
                                </a>
                            </div>
                            <div class="col-4 w3indta-grid">
                                <a href="#insta">
                                    <img src="assets/images/g3.jpg" class="img-fluid radius-image" alt="poultryfield">
                                </a>
                            </div>
                            <div class="col-4 w3indta-grid mt-4">
                                <a href="#insta">
                                    <img src="assets/images/g4.jpg" class="img-fluid radius-image" alt="poultryfield">
                                </a>
                            </div>
                            <div class="col-4 w3indta-grid mt-4">
                                <a href="#insta">
                                    <img src="assets/images/g5.jpg" class="img-fluid radius-image" alt="poultryfield">
                                </a>
                            </div>
                            <div class="col-4 w3indta-grid mt-4">
                                <a href="#insta">
                                    <img src="assets/images/g6.jpg" class="img-fluid radius-image" alt="poultryfield">
                                </a>
                            </div>


                        </div>
                    </div> -->
                </div>
                <div class="below-section text-center pt-lg-4 mt-5">
                    <p class="copy-text">&copy; {{date('Y')}} Agrohen Enterprise. All rights reserved. </a>
                    </p>
                    
                    <ul class="footer-gd-16 d-flex justify-content-center">
                        <li><a href="#terms">Terms
                            </a></li>
                        <li class="mx-2">/
                        </li>
                        <li><a href="#policy">Privacy Policy</a></li>
                    </ul>
                    <p class="copy-text">Design by <a href="https://apekinc.top" target="_blank"> <span class="text-info">APEK</span> <span class="text-white">INC</span></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- //footer -->

    <!-- Js scripts -->
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fas fa-arrow-up" aria-hidden="true"></span>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- //move top -->
    <!--//footer-9 -->
    <!-- Template JavaScript -->
    <script src="{{asset('storage/assets/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('storage/assets/js/theme-change.js')}}"></script>


    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function() {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function() {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function() {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function() {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });
    </script>
    <!-- //MENU-JS -->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function() {
            $('.navbar-toggler').click(function() {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- //disable body scroll which navbar is in active -->
    <!-- //bootstrap -->
    <script src="{{asset('storage/assets/js/bootstrap.min.js')}}"></script>

</body>

</html>