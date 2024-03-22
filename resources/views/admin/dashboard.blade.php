@extends('layouts.dash',['title'=>'Dashboard'])
@section('dashboard')
<div class="row d-flex justify-content-between p-2">
    <div class="card p-2 col-md-4">
        <div style="height: 100px;" class="btn bg-primary">Visitors</div>
    </div>
    <div class="card p-2 col-md-4">
        <div style="height: 100px;" class="btn bg-warning">Orders</div>
    </div>
    <div class="card p-2 col-md-4">
        <div style="height: 100px;" class="btn bg-info">Messages</div>
    </div>
    <div class="card col-12">
        <h2>Customers</h2>
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
</div>
@endsection