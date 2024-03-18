@extends('layouts.app')
@section('content')
<div class="inner-banner py-5">
    <section class="w3l-breadcrumb text-left py-sm-5 ">
        <div class="container">
            <div class="w3breadcrumb-gids">
                <div class="w3breadcrumb-left text-left">
                    <h2 class="inner-w3-title mt-lg-5 mt-4">
                        Contact Us </h2>

                </div>
                <div class="w3breadcrumb-right">
                    <ul class="breadcrumbs-custom-path">
                        <li><a href="index.html">Home</a></li>
                        <li class="active"><span class="fas fa-arrow-right mx-2"></span> Contact</li>
                    </ul>
                </div>
            </div>

        </div>
    </section>
</div>
<!--//inner-page-->
<!-- contacts-5-grid -->
<div class="w3l-contact-10 py-5" id="contact">
    <div class="form-41-mian pt-md-5 pt-3">
        <div class="container">
            <div class="row contacts-5-grid-main mb-5">
                <div class="col-lg-6 contacts-5-grid pe-lg-5">
                    <h5 class="title-subw3hny">Contact our team</h5>
                    <h3 class="title-w3l mb-3">Get in touch with us</h3>
                    <p></p>
                    <h4 class="title-w3l-adinf mt-4">Address Info</h4>
                    <div class="address-grid d-flex">
                        <i class="fas fa-map-marker-alt mt-2"></i>
                        <p>PO. Box 302-40302 Ndhiwa</p>
                    </div>
                    <h4 class="title-w3l-adinf mt-4">Support Center 24/7</h4>
                    <div class="address-grid d-flex">
                        <i class="fas fa-headset mt-2"></i>
                        <p><a href="tel:+254701971316" class="link1"> +254 701 971 316</a></p>
                    </div>
                    <div class="address-grid d-flex">
                        <i class="fas fa-phone mt-2"></i>
                        <p><a href="tel:+254725759463" class="link1"> +254 725 759 463</a></p>
                    </div>
                    <div class="address-grid d-flex">
                        <i class="fas fa-envelope"></i>
                        <p class="mt-0"><a href="mailto: info.agrohenfarms@gmail.com" class="link1"> info.agrohenfarms@gmail.com</a></p>
                    </div>
                </div>

                <div class="col-lg-6 form-inner-cont mt-lg-0 mt-4">
                    <form action="" method="post" class="signin-form">
                        <div class="form-grids">
                            <div class="form-input">
                                <input type="text" name="name" id="w3lName" placeholder="Enter your name *"
                                    required="" />
                            </div>
                            <div class="form-input">
                                <input type="text" name="w3lSubject" id="w3lSubject" placeholder="Enter subject "
                                    required />
                            </div>
                            <div class="form-input">
                                <input type="email" name="email" id="w3lSender" placeholder="Enter your email *"
                                    required />
                            </div>
                            <div class="form-input">
                                <input type="text" name="phone" id="w3lPhone" placeholder="Enter your Phone Number *"
                                    required />
                            </div>
                        </div>
                        <div class="form-input">
                            <textarea name="message" id="w3lMessage" placeholder="Type your query here"
                                required=""></textarea>
                        </div>
                        <div class="w3-submit text-right">
                            <button class="btn btn-style btn-primary">Send Message <i
                                    class="fas fa-paper-plane ms-2"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- //contacts-5-grid -->
</div>
<!-- /map-->
<div class="contacts-sub-5">
    <div class="contacts-mapw3 position-relative">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387193.305935303!2d-74.25986548248684!3d40.69714941932609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1563262564932!5m2!1sen!22sin"
            style="border:0" allowfullscreen></iframe>
    </div>
</div>
@endsection