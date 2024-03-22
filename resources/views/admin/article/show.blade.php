@extends('layouts.dash',['title'=>'View Article'])
@section('dashboard')
<div class="container">
    <h2 class="f-bold text-center">{{$article->title}}</h2>
    <div><?php echo html_entity_decode($article->body);?></div>
</div>
@endsection