@extends('layouts.dash',['title'=>'Create Article'])
@section('dashboard')
<div class="container">
    <form action="{{route('articles.store')}}" method="post">
        @csrf
        <div class="row">
            <div class="col-md-5 m-3">
                <div class="form-floating">
                    <input type="text" name="title" id="" value="{{old('title')}}" placeholder=" " class="form-control">
                    <label for="">Title</label>
                </div>
            </div>
            <div class="col-md-5 m-3">
                <div class="form-floating">
                    <input type="text" name="category" id="" value="{{old('category')}}" placeholder=" " class="form-control">
                    <label for="">Category</label>
                </div>
            </div>
            <div class="container">
                <textarea name="body" id="editor">{{old('body')}}</textarea>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary"><i class="fa fa-upload"></i> Post</button>
        </div>
    </form>
</div>
@endsection
