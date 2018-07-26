@extends('layouts.adminapp')
@section('sub')
   Sub Categories
@endsection
@section('content')
   <div class="container">
      <div class="col-md-4"></div>
      <div class="col-md-4 col-xs-12" style="text-align:  center;">
         <form action="deleteSubCat" method="post">
            @csrf
            <div class="form-group">
               
               <label for="subcategories">Select one Sub categories for delete</label>
               <select class="form-control" id="subcategories" name="subcategories">
                  <option value="null"></option>
                @foreach($cat as $c)
                  <optgroup label="{{$c->type}}">
                     @foreach($sub as $s)
                     @if($c->id == $s->categories_id)
                     <option >{{$s->type}}</option>
                     @endif
                  @endforeach
                  </optgroup>
                  @endforeach
                 
               </select>
            </div>
            <input type="submit" class="btn-dang" value="Delete">
         </form>

            <br>
         <form action="CreateSubCat" method="post">
            @csrf
            <div class="form-group">
               <label>Add new sub categories</label>
               <select class="form-control" name="categories">
                  @foreach($cat as $cat)
                  <option value="{{$cat->id}}">{{$cat->type}}</option>
                     @endforeach

               </select>
               <br>
            <input type="text" class="form-control" placeholder="Exp : cars " name="add">
            </div>
               <input type="submit" class="btn-suc" value="Add">

         </form>
      </div>
   </div>

@endsection