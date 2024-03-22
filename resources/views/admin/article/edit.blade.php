@extends('layouts.dash',['title'=>'Create Article'])
@section('dashboard')
<div class="container">
    <form action="{{route('articles.update',$article->id)}}" method="get">
        @csrf
        @method("PUT")
        <div class="row">
            <div class="col-md-5 m-3">
                <div class="form-floating">
                    <input type="text" name="title" id="" value="{{$article->title}}" placeholder=" " class="form-control">
                    <label for="">Title</label>
                </div>
            </div>
            <div class="col-md-5 m-3">
                <div class="form-floating">
                    <input type="text" name="category" id="" value="{{$article->category}}" placeholder=" " class="form-control">
                    <label for="">Category</label>
                </div>
            </div>
            <div class="container">
                <textarea name="body" id="editor">{{$article->body}}</textarea>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary"><i class="fa fa-upload"></i> Update</button>
        </div>
    </form>
</div>
@endsection
