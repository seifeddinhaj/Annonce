@extends('layouts.adminapp')
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

            <input type="submit" class="btn-dang" value="Danger">
            </form>
         </div>
    </div>

@endsection
