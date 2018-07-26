@extends('layouts.adminapp')
@section('sub')
    All categories
@endsection
@section('content')
    <div class="container">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Price</th>
                    <th scope="col">Description</th>
                    <th scope="col">Type</th>
                    <th scope="col">Address</th>
                    <th scope="col">User</th>
                    <th scope="col">Categories</th>
                    <th scope="col">Sub Categories</th>
                    <th scope="col">Date of created</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($q as $d)
                <tr>
                    <th scope="row">1</th>
                    <td>{{$d->title}}</td>
                    <td>{{$d->price}}</td>
                    <td>{{$d->description}}</td>
                     <td>{{$d->type}}</td>
                      <td>{{$d->adresse}}</td>
                       <td>{{$d->name}}</td>
                        <td>{{$d->cat}}</td>
                         <td>{{$d->sub}}</td>
                          <td>{{$d->created_at}}</td>
                </tr>
                @endforeach
                
                </tbody>
            </table>
        </div>
    </div>
    @endsection
