@extends('layouts.adminapp')
@section('sub')
    All users
@endsection
@section('content')
    <div class="container">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Avatr</th>
                    <th scope="col">Date joined </th>
                </tr>
                </thead>
                <tbody>
                @foreach($user as $user)
                <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td><img src="{{asset($user->avatar)}}" style="width: 50px;height: 50px;border-radius: 50%;"> </td>
                    <td>{{$user->created_at}}</td>
                </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
