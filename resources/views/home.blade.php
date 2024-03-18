@extends('layouts.app')
@section('content')
<section class="w3l-main-slider banner-slider" id="home">
    <div class="owl-one owl-carousel owl-theme">
        <div class="slider-info banner-view banner-top1">
            <div class="container">
                <div class="w3banner-grids">
                    <div class="banner-info header-hero-19">
                        <p class="w3hny-tag">Loyal to quality</p>
                        <h3 class="title-hero-19">The chicken always comes chief.</h3>
                        <a href="/about" class="btn btn-style btn-primary mt-4">Read More </a>
                    </div>
                    <div class="banner-left position-relative mt-5">
                        <a href="#small-dialog" class="popup-with-zoom-anim play-view text-center position-absolute">
                            <span class="video-play-icon">
                                <span class="fa fa-play"></span>
                            </span>
                        </a>
                        <!-- dialog itself, mfp-hide class is required to make dialog hidden --
                                <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
                                  <iframe src="https://player.vimeo.com/video/26489864?h=0cb4432fb5" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
								  
                                </div>
								<!-- dialog itself, mfp-hide class is required to make dialog hidden -->
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- //main-slider -->
<!--/grids-->
<section class="w3l-grids-3 py-5" id="about">
    <div class="container py-md-5 py-3">
        <div class="row w3home-ab-grids">
            <div class="w3ab-right-top col-lg-6 pe-lg-5">
                <img src="{{asset('storage/assets/images/2wsasso.jpeg')}}" alt="" class="img-fluid radius-image">
            </div>
            <div class="w3ab-left-top col-lg-6 mt-lg-0 mt-4 pt-lg-0 pt-2">
                <h6 class="title-subw3hny mb-1">Get rather healthy.</h6>
                <h3 class="title-w3l mb-2">Welcome to Our Poultry Field.</h3>
                <p class="my-3"> Our breeds includes the multicolored sasso breeds, single color sasso breeds, rainbow roosters and kuroilers . These breeds are available for sale as 1 day old, 2 weeks old, 3weeks old, 4 weeks old and 8 weeks old. We have a brooding capacity of 5000 chicks which has since proved insufficient for our customers. Our 8000 egg capacity incubators currently operates at 70% translating to about 6000 chicks. We envisions to increase our hatching capacity to 12000 chicks weekly and 10000 brooder capacity by 2026. We also envisions to expand our market territory coastal and north eastern region by 2025.</p>
            </div>

        </div>
    </div>
</section>
<!-- Services-section -->
<section class="w3l-features py-5" id="features">
    <div class="container py-lg-5 py-md-4 py-2">
        
        <div class="main-cont-wthree-2">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 mt-lg-5 mt-4">
                    <div class="grids-1 box-wrap">
                        <div class="icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h4><a href="#service" class="title-head mb-3">Quality Matters</a></h4>
                        <p class="text-para">We offer quality through simple poutry farming tips for starters</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-lg-5 mt-4">
                    <div class="grids-1 box-wrap">
                        <div class="icon">
                            <i class="fas fa-shipping-fast"></i>
                        </div>
                        <h4><a href="#service" class="title-head mb-3">Free Countrywide Delivery</a></h4>
                        <p class="text-para">We offer free delivery for 100+ chicks across all parts of Kenya</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-lg-5 mt-4">
                    <div class="grids-1 box-wrap">
                        <div class="icon">
                            <i class="fas fa-user-shield"></i>
                        </div>
                        <h4><a href="#service" class="title-head mb-3">Customer Satisfaction</a></h4>
                        <p class="text-para">It is our goal to ensure our customers' needs are met to dot. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Service-section -->

<section class="w3l-newsletter">
    <div class="container">
        <div class="uphny-w3l-newsletter-inf">
            <div class="row uphny-w3l-newsletter align-items-center">
                <div class="col-lg-6 w3l-newsletter-left text-left">
                    <h3 class="titlehny">Don't miss our future updates! Get subscribed today!</h3>
                </div>
                <div class="col-lg-6 w3l-newsletter-form ps-lg-5 mt-lg-0 mt-md-5 mt-4">
                    <form action="#" method="post" class="subscribe-wthree">
                        <div class="flex-wrap subscribe-wthree-field">
                            <input class="form-control" type="email" placeholder="Type Your Email Address" name="email" required="">
                            <button class="btn btn-style btn-primary" type="submit">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection