@extends('layouts.dash',['title'=>'Dashboard'])
@section('dashboard')
<div class="row d-flex justify-content-between p-2">
    <div class="card p-2 col-md-6">
        <div  class="btn bg-primary">Customers</div>
        <table class="table table-responsive">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $k=>$user)
                <tr>
                    <td>{{$k+1}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card p-2 col-md-6">
        <div  class="btn bg-info">Messages</div>
        @foreach($messages as $message)
        <p><b>{{$message->name}}</b>({{$message->email}})<br>
        <span class="offset-1"><i>"{{$message->message}}"</i></span></p>
        @endforeach
    </div>
    <!-- <div class="card p-2 col-md-4">
        <div style="height: 100px;" class="btn bg-warning">Orders</div>
    </div> -->
    
</div>
@endsection