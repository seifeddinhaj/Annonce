@extends('layouts.app')

@section('content')

    <div class="wrapper">
        <div class="line line1">
            <span class="circle circle-top"></span>
            <div class="dotted">
                <span class="dot dot-top"></span>
                <span class="dot dot-middle-top"></span>
                <span class="dot dot-middle-bottom"></span>
                <span class="dot dot-bottom"></span>
            </div>
            <span class="circle circle-bottom"></span>
        </div>
        <div class="line line2">
            <span class="circle circle-top"></span>
            <div class="dotted">
                <span class="dot dot-top"></span>
                <span class="dot dot-middle-top"></span>
                <span class="dot dot-middle-bottom"></span>
                <span class="dot dot-bottom"></span>
            </div>
            <span class="circle circle-bottom"></span>
        </div>
        <div class="line line3">
            <span class="circle circle-top"></span>
            <div class="dotted">
                <span class="dot dot-top"></span>
                <span class="dot dot-middle-top"></span>
                <span class="dot dot-middle-bottom"></span>
                <span class="dot dot-bottom"></span>
            </div>
            <span class="circle circle-bottom"></span>
        </div>
        <div class="line line4">
            <span class="circle circle-top"></span>
            <div class="dotted">
                <span class="dot dot-top"></span>
                <span class="dot dot-middle-top"></span>
                <span class="dot dot-middle-bottom"></span>
                <span class="dot dot-bottom"></span>
            </div>
            <span class="circle circle-bottom"></span>
        </div>
        <div class="line line5">
            <span class="circle circle-top"></span>
            <div class="dotted">
                <span class="dot dot-top"></span>
                <span class="dot dot-middle-top"></span>
                <span class="dot dot-middle-bottom"></span>
                <span class="dot dot-bottom"></span>
            </div>
            <span class="circle circle-bottom"></span>
        </div>
        <div class="line line6">
            <span class="circle circle-top"></span>
            <div class="dotted">
                <span class="dot dot-top"></span>
                <span class="dot dot-middle-top"></span>
                <span class="dot dot-middle-bottom"></span>
                <span class="dot dot-bottom"></span>
            </div>
            <span class="circle circle-bottom"></span>
        </div>
        <div class="line line7">
            <span class="circle circle-top"></span>
            <div class="dotted">
                <span class="dot dot-top"></span>
                <span class="dot dot-middle-top"></span>
                <span class="dot dot-middle-bottom"></span>
                <span class="dot dot-bottom"></span>
            </div>
            <span class="circle circle-bottom"></span>
        </div>
        <div class="line line8">
            <span class="circle circle-top"></span>
            <div class="dotted">
                <span class="dot dot-top"></span>
                <span class="dot dot-middle-top"></span>
                <span class="dot dot-middle-bottom"></span>
                <span class="dot dot-bottom"></span>
            </div>
            <span class="circle circle-bottom"></span>
        </div>
        <div class="line line9">
            <span class="circle circle-top"></span>
            <div class="dotted">
                <span class="dot dot-top"></span>
                <span class="dot dot-middle-top"></span>
                <span class="dot dot-middle-bottom"></span>
                <span class="dot dot-bottom"></span>
            </div>
            <span class="circle circle-bottom"></span>
        </div>
        <div class="line line10">
            <span class="circle circle-top"></span>
            <div class="dotted">
                <span class="dot dot-top"></span>
                <span class="dot dot-middle-top"></span>
                <span class="dot dot-middle-bottom"></span>
                <span class="dot dot-bottom"></span>
            </div>
            <span class="circle circle-bottom"></span>
        </div>
        <div class="line line11">
            <span class="circle circle-top"></span>
            <div class="dotted">
                <span class="dot dot-top"></span>
                <span class="dot dot-middle-top"></span>
                <span class="dot dot-middle-bottom"></span>
                <span class="dot dot-bottom"></span>
            </div>
            <span class="circle circle-bottom"></span>
        </div>
    </div>


    <div class="container wlc">
        <div class="row">
            <!-- categori -->
            <!--@foreach($req2 as $c)
           {{$c->urlimg}}
            {{$c->price}}
            {{$c->id}}
            @endforeach-->
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

<script>
</script>