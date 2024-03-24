@extends('layouts.app')
@section('content')
<div class="inner-banner py-5">
    <section class="w3l-breadcrumb text-left py-sm-5 ">
        <div class="container">
            <div class="w3breadcrumb-gids">
                <div class="w3breadcrumb-left text-left">
                    <h2 class="inner-w3-title mt-lg-5 mt-4">
                        Our Products </h2>

                </div>
                <div class="w3breadcrumb-right">
                    <ul class="breadcrumbs-custom-path">
                        <li><a href="/">Home</a></li>
                        <li class="active"><span class="fas fa-arrow-right mx-2"></span> Products </li>
                    </ul>
                </div>
            </div>

        </div>
    </section>
</div>
<!--//inner-page-->
<!--/features-section-->
<section class="w3l-features w3l-services-page py-5" id="work">
    <div class="container py-lg-5 py-md-4 py-2">
        <div class="title-content text-center mb-lg-3 mb-4">
            <h6 class="title-subw3hny mb-1">Our Products</h6>
            <h3 class="title-w3l">What We Offer</h3>
        </div>
        <div class="main-cont-wthree-2">
            <div class="row gal-page-grids text-center">
                @if($products->count()>0)
                @foreach($products as $product)
                <div class="col-lg-4 col-6 w3layouts_gallery_grid">
                    <a href="#gal">
                        <div class="w3layouts_team_grid">
                            <img src="{{asset('storage/images/products/'.$product->path)}}" alt=" " class="img-fluid radius-image" style="width: 100%;height:200px;object-fit:cover;" />
                            <div class="w3layouts_team_grid_pos">
                                <div class="wthree_text">
                                    <h2 class="text-white">{{$product->title}}</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="row d-flex justify-content-between">
                        <h5 class="col-md-8">{{$product->title}}</h5>
                        <p class="col-md-4">Ksh. {{$product->price}}</p>
                    </div>
                    <div class="d-flex justify-content-end">
                        <a href="https://wa.me/+254701971316?text=Hello! I wish to order the {{$product->title}}" target="_blank"><button class="btn btn-primary"> Place Order</button></a>
                    </div>
                </div>
                @endforeach
                @else
                <h3>Oooops! No products found.</h3>
                @endif
            </div>

        </div>
    </div>
</section>
<!--//features-section -->
@endsection