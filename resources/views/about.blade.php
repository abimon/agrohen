@extends('layouts.app')
@section('content')
<div class="inner-banner py-5">
    <section class="w3l-breadcrumb text-left py-sm-5 ">
        <div class="container">
            <div class="w3breadcrumb-gids">
                <div class="w3breadcrumb-left text-left">
                    <h2 class="inner-w3-title mt-lg-5 mt-4">
                        About Us </h2>
                </div>
                <div class="w3breadcrumb-right">
                    <ul class="breadcrumbs-custom-path">
                        <li><a href="index.html">Home</a></li>
                        <li class="active"><span class="fas fa-arrow-right mx-2"></span> About Us</li>
                    </ul>
                </div>
            </div>

        </div>
    </section>
</div>
<!--//inner-page-->
<!--/about-page-->
<section class="w3l-ab-page py-5" id="about1">
    <div class="container py-lg-5 py-md-4 py-2">
        <div class="row align-items-center">
            <div class="col-lg-6 pe-lg-5">
                <h3 class="title-w3l mb-2">Our Info</h3>

                <p class="mt-3">Agrohen poultry enterprise is a private limited company that was incorporated under the constitution of Kenya government in the years 2021, dealing with production and distribution of improved kienyeji chicken. We are located in Mamboleo estate, Kisumu city with several outlets throughout the country .Under the management of Mr. Hillary Awidhi, a financial consultant and a business analyst with a vast experience in poultry industry as the company CEO, with a board of directors and a motivated team, the company is destined to capture the evident business gap in the industry.</p>
                <div class="row two-grids mt-5 pt-lg-4">
                    <div class="col-sm-6 grids_info d-flex mt-sm-0 mt-4">
                        <i class="fas fa-bullseye"></i>
                        <div class="detail ms-3">
                            <h4>Mission</h4>
                            <p>To provide  the community with quality chicken breeds, training and influence to build sustainable poultry ecosystem that generates decent earning to my community.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 grids_info d-flex">
                        <i class="fas fa-binoculars"></i>
                        <div class="detail ms-3">
                            <h4>Vision</h4>
                            <p>To be a leading center for production and distribution of quality chicks as well as training and influencing community into sustainable chicken farming in my region </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1 text-end mt-lg-0 mt-5 position-relative">
                <img src="{{asset('storage/assets/images/pack.jpeg')}}" alt="" class="img-fluid radius-image">
                <div class="imginfo__box">
                    <h6 class="imginfo__title">{{date('Y')-2021}}+</h6>
                    <p>Years of experience</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/w3-grids-->
<section class="w3l-stats-section py-5 pt-0" id="stats">
    <div class="container py-md-5 pt-0">
        <div class="w3l-stats-inner-inf">
            <div class="row stats-con">
                <div class="col-lg-3 col-6 stats_info counter_grid">
                    <p class="counter">2500 </p>
                    <h3>Products</h3>
                </div>
                <div class="col-lg-3 col-6 stats_info counter_grid">
                    <p class="counter">1500 </p>
                    <h3>Expert Farmers</h3>
                </div>
                <div class="col-lg-3 col-6 stats_info counter_grid mt-lg-0 mt-4">
                    <p class="counter">1280 </p>
                    <h3>Business Success</h3>
                </div>
                <div class="col-lg-3 col-6 stats_info counter_grid mt-lg-0 mt-4">
                    <p class="counter">3020</p>
                    <h3>Happy Clients</h3>
                </div>

            </div>
        </div>
    </div>
</section>
<!--//w3-grids-->
<!--/bottom-3-grids-->
<div class=" w3l-3-grids py-5" id="grids-3">
    <div class="container py-md-4">
        <div class="row">
            <div class="col-md-6 mt-md-0">
                <div class="grids3-info position-relative">
                    <a href="#img" class="d-block zoom"><img src="{{asset('storage/assets/images/banner1.jpg')}}" alt="" class="img-fluid news-image"></a>
                    <div class="w3-grids3-info">
                        <h4 class="gdnhy-1"><a href="#img">The chicken always comes chief.</a>
                            <a class="w3item-link btn btn-style mt-4" href="#">
                                Read More
                            </a>

                        </h4>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-md-0 mt-4 grids3-info2">
                <div class="grids3-info position-relative">
                    <a href="#img" class="d-block zoom"><img src="{{asset('storage/assets/images/banner2.jpg')}}" alt="" class="img-fluid news-image"></a>
                    <div class="w3-grids3-info second">
                        <h4 class="gdnhy-1"><a href="#img">Natures Intention with chicken.</a>
                            <a class="w3item-link btn btn-style mt-4" href="#">
                                Read More
                            </a>
                        </h4>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!--//bottom-3-grids-->

<!--/w3l-join-main-->
<section class="w3l-join-main py-5">
    <div class="container py-md-5">
        <div class="w3l-project-in">
            <div class="row bottom-info text-left">
                <div class="col-lg-7 w3l-project-in-left pe-lg-5">
                    <h6 class="title-subw3hny mb-2">Our Invention</h6>
                    <h3 class="title-w3l two mb-2">Our Invention Is Always The Best
                    </h3>


                </div>
                <div class="col-lg-5 w3l-project-in-right">
                    <div class="w3banner-content-btns">
                        <a href="about.html" class="btn btn-style btn-white mt-4">Read More </a>
                        <a href="contact.html" class="btn btn-style btn-primary mt-4 ms-3">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--//w3l-join-main-->
<!--/team-sec-->
<section class="w3l-team-main team py-5" id="team">
    <div class="container py-lg-5">
        <div class="title-content text-center mb-2">
            <h6 class="title-subw3hny mb-1">Our Clients</h6>
            <h3 class="title-w3l">Who Worked With Us.</h3>
        </div>
        <div class="row team-row justify-content-center">
            <div class="col-lg-4 col-6 team-wrap mt-lg-5 mt-4">
                <div class="team-member text-center">
                    <div class="team-img">
                        <img src="{{asset('storage/assets/images/team1.jpg')}}" alt="" class="radius-image">
                        <div class="overlay-team">
                            <div class="team-details text-center">
                                <div class="socials mt-20">
                                    <a href="#url">
                                        <span class="fab fa-facebook-f"></span>
                                    </a>
                                    <a href="#url">
                                        <span class="fab fa-twitter"></span>
                                    </a>
                                    <a href="#url">
                                        <span class="fab fa-linkedin-in"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#url" class="team-title">Lawrence Petrie</a>
                    <p>Lorem Ipsum</p>
                </div>
            </div>
            <!-- end team member -->
            <div class="col-lg-4 col-6 team-wrap mt-lg-5 mt-4">
                <div class="team-member text-center">
                    <div class="team-img">
                        <img src="{{asset('storage/assets/images/team3.jpg')}}" alt="" class="radius-image">
                        <div class="overlay-team">
                            <div class="team-details text-center">
                                <div class="socials mt-20">
                                    <a href="#url">
                                        <span class="fab fa-facebook-f"></span>
                                    </a>
                                    <a href="#url">
                                        <span class="fab fa-twitter"></span>
                                    </a>
                                    <a href="#url">
                                        <span class="fab fa-linkedin-in"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#url" class="team-title">Jack Peters</a>
                    <p>Lorem Ipsum</p>
                </div>
            </div>
            <!-- end team member -->
            <div class="col-lg-4 col-6 team-wrap mt-lg-5 mt-4">
                <div class="team-member text-center">
                    <div class="team-img">
                        <img src="{{asset('storage/assets/images/team2.jpg')}}" alt="" class="radius-image">
                        <div class="overlay-team">
                            <div class="team-details text-center">
                                <div class="socials mt-20">
                                    <a href="#url">
                                        <span class="fab fa-facebook-f"></span>
                                    </a>
                                    <a href="#url">
                                        <span class="fab fa-twitter"></span>
                                    </a>
                                    <a href="#url">
                                        <span class="fab fa-linkedin-in"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#url" class="team-title">Anna Phillips</a>
                    <p>Lorem Ipsum</p>
                </div>
            </div>
            <!-- end team member -->
        </div>

    </div>
</section>
<!--//team-sec-->
@endsection