@extends('layouts.app')
@section('content')
<div class="inner-banner py-5">
    <section class="w3l-breadcrumb text-left py-sm-5 ">
        <div class="container">
            <div class="w3breadcrumb-gids">
                <div class="w3breadcrumb-left text-left">
                    <h2 class="inner-w3-title mt-lg-3 mt-1 text-capitalize">
                        Articles</h2>

                </div>
                <div class="w3breadcrumb-right">
                    <ul class="breadcrumbs-custom-path">
                        <li><a href="/">Home</a></li>
                        <li class="active"><span class="fas fa-arrow-right mx-2"></span> Articles</li>
                    </ul>
                </div>
            </div>

        </div>
    </section>
</div>
<div class=" container row">
    @if($article)
    <div class="col-md-8">
        <div class="container p-3" style="min-height:400px;">
            <h2 class='f-bold text-start'>{{$article->title}}</h2>
            <p class="f-bold mt-1 mb-1">By {{$article->writer->name}}</p>
            <div class="" style="min-height: 200px;"><?php echo html_entity_decode($article->body); ?></div>
            <div class="col-md-8">
                <div class="d-flex justify-content-between">
                    <button class="btn">{{$article->comments->count()}} <i class="fa fa-comment text-primary"></i> Comments</button>
                    <a href="/like/{{$article->id}}"><button class="btn">{{$article->likes->count()}} <i class="fa fa-thumbs-up text-info"></i> Likes</button></a>
                    <button class="btn"><i class="fa fa-share text-warning"></i> Share</button>
                    <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                        <a class="a2a_button_whatsapp"></a>
                        <a class="a2a_button_copy_link"></a>
                        <a class="a2a_button_facebook"></a>
                        <a class="a2a_button_twitter"></a>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between">
                <h2 class="f-bold">Comments</h2>
                <a href="#comment">Leave yours</a>
            </div>

            <hr>
            @foreach($article->comments as $comment)
            <div class="mb-2 d-flex justify-content-start">
                <div class="me-2"><img src="{{asset('storage/assets/images/user.png')}}" alt="" style="width:40px;height:40px;object-fit:cover;"></div>
                <div>
                    <h5></i> {{$comment->user->name}}</h5>
                    <i>{{($comment->created_at)->diffForHumans()}}</i>
                    <p class="">{{$comment->comment}}</p>
                </div>
            </div>
            @endforeach
            <form action="{{route('comment.store',['post_id'=>$article->id])}}" method="post" id="comment">
                @csrf
                <h3 class="f-bold">Leave a Reply</h3>
                <p class="mb-1">Your email address will not be published. Required fields are marked *</p>
                <div class="form-floating mb-3">
                    <input type="text" placeholder=" " name="name" id="" class="form-control">
                    <label for="">Your Name*</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" placeholder=" " name="email" id="" class="form-control">
                    <label for="">Your Email*</label>
                </div>
                <div class="">
                    <label for="">Comment*</label>
                    <textarea name="comment" placeholder=" " id="" cols="20" rows="10" class="form-control mb-3"></textarea>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Post</button>
                </div>
            </form>


        </div>
    </div>
    <div class="col-md-4 p-3">
        <h2 class="f-bold">Other Articles</h2>
        <hr>
        <ul>
            @foreach($articles as $art)
            <li><a href="/article/{{$art->slug}}">{{$art->title}}</a></li>
            <hr>
            @endforeach
        </ul>
    </div>
    @else
    <h3 class="text-center">Oooops! No articles available currently.</h3>
    @endif
    
</div>
<script async src="https://static.addtoany.com/menu/page.js"></script>
@endsection