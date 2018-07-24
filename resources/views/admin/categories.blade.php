@extends('layouts.adminapp')
@section('sub')
    Categories
    @endsection
@section('content')
    <div class="container">
        <div class="col-md-4"></div>
        <div class="col-md-4 col-xs-12" style="text-align:  center;">
            <form action="deleteCat" method="post">
                @csrf
            <div class="form-group">
                <label for="categories">Select one categories for delete</label>
                <select class="form-control" id="categories" name="categories">
                    <option value="null">....</option>
                  @foreach($cat as $categories)
                      <option value="{{$categories->id}}">{{$categories->type}}</option>
                      @endforeach
                </select>
            </div>

            <input type="submit" class="btn-dang" value="Delete">
            </form>
            <br>
            <form action="CreatCat" method="post">
                @csrf
                <div class="form-group">
                    <label for="add">Add new categories</label>
                    <input type="text" id="add" name="add" placeholder="Exp : vehicles" class="form-control">

                </div>
                <input type="submit" class="btn-suc" value="Add">
            </form>
         </div>
    </div>

@endsection
