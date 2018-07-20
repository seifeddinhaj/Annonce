@extends('layouts.app')

@section('content')

    <div class="container wlc">
        <div class="row">
            <!-- categori -->

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
                        @foreach($req2 as $annonce)
                            <div class="col-md-3 text-center">
                                <a href="{{URL('/details/'.$annonce->annonce_id)}}">
                                    <div class="img">
                                        <img src="{{$annonce->urlimg}}" alt="img Ad" class="img-thumbnail">
                                    </div>
                                    <div class="price">
                                        <p>{{$annonce->price}} DT </p>
                                    </div>

                                    <div class="title">
                                        <p>{{$annonce->title}}</p>
                                    </div>

                                </a>
                            </div>
                        @endforeach

                    </div>
                </div>
        </div>
    </div>


    @endsection
