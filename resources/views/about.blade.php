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
                <p class="mt-3">Founded in 2020 and based in western region, Agrohen is more than just a hatchery. We're your one-stop shop for high-quality improved Kienyeji chicks, top-of-the-line poultry equipment, and expert training to unlock the potential of your poultry farm.</p>

                <p class="mt-3">We simply exist to empower the western region with sustainable and profitable poultry farming. We achieve this by:</p>
                <ul style="list-style:none; padding-left:20vw;">
                    <li>Hatching and distributing healthy, high-yielding improved Kienyeji chicks. </li>
                    <li>Providing access to quality poultry equipment to optimize your farm's efficiency. </li>
                    <li>Offering practical, hands-on training on best practices in poultry management. </li>
                    <li>Promoting resource pooling and cooperative production for greater success and shared prosperity.</li>
                </ul>

                <p class="mt-3">At Agrohen, we believe in the power of community. We're committed to supporting local farmers with the knowledge and resources they need to build thriving poultry businesses. Join us on the journey to a sustainable and prosperous future for western's poultry industry.</p>
                <div class="row two-grids mt-5 pt-lg-4">
                    <div class="col-sm-6 grids_info d-flex mt-sm-0 mt-4">
                        <i class="fas fa-bullseye"></i>
                        <div class="detail ms-3">
                            <h4>Mission</h4>
                            <p>To provide high-quality kienyeji chicks and equipment to small-holder farmers in western region, Kenya, and to help them improve their livelihoods.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 grids_info d-flex">
                        <i class="fas fa-binoculars"></i>
                        <div class="detail ms-3">
                            <h4>Vision</h4>
                            <p>To be the leading provider of kienyeji chicks and equipment to small-holder farmers in Kenya, and to help them achieve food security and economic independence.</p>
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
                    <p class="counter">25 </p>
                    <h3>Products</h3>
                </div>
                <div class="col-lg-3 col-6 stats_info counter_grid">
                    <p class="counter">1500</p>
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
                        <a href="/contact" class="btn btn-style btn-primary mt-4 ms-3">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--//w3l-join-main-->
@endsection