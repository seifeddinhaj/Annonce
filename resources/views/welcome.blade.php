@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <!-- categori -->

            <div class="col-md-3 category">
                <h4> All categories </h4>
                @foreach($req as $s)
                    <div class="x-categori">
                        <a href="categori/{{$s->id}}"> {{$s->type}} </a>
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

