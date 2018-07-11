@extends('layouts.app')

@section('content')

<<<<<<< HEAD
        <h4> All categories </h4>
            @foreach($req as $s)
                <div>
            <a href="{{URL('/subcat/'.$s->id)}}"> {{$s->type}} </a>
            
                </div>
=======
    <div class="container">
        <div class="row">
            <!-- categori -->
>>>>>>> 010e44e0cf7ddcc3b258bb3cf9806318fb695230

            <div class="col-md-3 category">
                <h4> All categories </h4>
                @foreach($req as $s)
                    <div class="x-categori">
                        <a href="{{URL('/subcat/'.$s->id)}}"> {{$s->type}} </a>
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

