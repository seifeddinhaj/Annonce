@extends('layouts.app')
@section('content')


    <div class="container">
        <div class="row">
            <!-- categori -->


            <div class="col-md-3 category">
<<<<<<< HEAD
                <a href="{{URL('/')}}">All categories</a>
                <h4> @foreach($req1 as $ss)
                {{$ss->type}}
                @endforeach </h4>
=======
                <a href="{{URL('welcome')}}">All categories</a>
                <h4>  </h4>
>>>>>>> 47424d9077af17bdb445057acac7c778f1810fe9
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