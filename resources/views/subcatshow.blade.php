@extends('layouts.app')
@section('content')


    <div class="container">
        <div class="row">
            <!-- categori -->


            <div class="col-md-3 category">


              <span class="flesh-left"> &crarr;</span >  <a href="{{URL('/')}}">All categories</a>

                <h4 class="title-cat"> @foreach($req1 as $ss)
                        {{$ss->type}}
                    </h4>

                @foreach($req as $s)
                    <div class="x-categori">
                        <a href="{{URL('/subcatshow/'.$ss->id).'/'.$s->id}}"> {{$s->type}} </a>
                    </div>

                @endforeach
                @endforeach
            </div>


            <!-- annonce -->
            <div class="col-md-9">


                <div class="row">
                    @foreach($qq as $annonce)
                    <div class="col-md-3 text-center">
                        <a href="{{URL('/details/'.$annonce->id)}}">
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