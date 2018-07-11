@extends('layouts.app')
@section('content')


    <div class="container">
        <div class="row">
            <!-- categori -->


            <div class="col-md-3 category">





              <span class="flesh-left"> &crarr;</span >  <a href="{{URL('/')}}">All categories</a>

                <h4 class="title-cat"> @foreach($req1 as $ss)
                        {{$ss->type}}
                    @endforeach </h4>

                @foreach($req as $s)
                    <div class="x-categori">
                        <a href=""> {{$s->type}} </a>
                    </div>

                @endforeach
            </div>


            <!-- annonce -->
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-3">
                        <div class="img">

                        </div>
                        <div class="prise">

                        </div>
                        <div class="title">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





@endsection