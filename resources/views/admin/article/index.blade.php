@extends('layouts.dash',['title'=>'Articles'])
@section('dashboard')
<div class="container">
    <div class="modal-footer"><a href="{{route('articles.create')}}"><button class="btn btn-primary">Create Article</button></a></div>
    <table class="table table-responsive">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th colspan="3" class="text-center">Rections</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($articles as $k=>$article)
            <tr>
                <td>{{$k+1}}</td>
                <th><a href="{{route('articles.show',$article->id)}}">{{$article->title}}</a></th>
                <th>{{$article->views->count()}}<i class="fa fa-eye"></i></th>
                <th>{{$article->comments->count()}}<i class="fa fa-comments"></i></th>
                <th>{{$article->likes->count()}}<i class="fa fa-thumbs-up"></i></th>
                <th><a href="{{route('articles.edit',$article->id)}}"><i class="fa fa-pen"></i></a></th>
                <th>
                    <form action="{{route('articles.destroy',$article->id)}}" method="post">
                        @csrf 
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger">
                            <i class="fa fa-trash"></i>
                        </button>
                    </form>
                </th>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
