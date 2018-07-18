
@extends('layouts.app')

@section('content')

    <div class="container detail">
<div class="row">
<div class="col-md-6">



    <div class="col-md-12">
   <!-- Slide img -->


        <div class="w3-content" style="max-width:1200px">
            @foreach($req1 as $annonce)
            <img class="mySlides" src="{{asset($annonce->urlimg)}}" style="width:100%">
            @endforeach

            <div class="w3-row-padding w3-section">

                @foreach($req1 as $annonce)
                <div class="w3-col s4">
                    <img class="demo w3-opacity w3-hover-opacity-off" src="{{asset($annonce->urlimg)}}" style="width:100%" onclick="currentDiv(i++)">
                </div>
                @endforeach
            </div>
        </div>

    </div>





















    <div class="small-img">
        @foreach($req1 as $annonce)
        <img src="{{asset($annonce->urlimg)}}" alt="detail img">
        @endforeach

    </div>
</div>
    <div class="col-md-6">
        <div class="info">
            @foreach($detail as $annonce)
                <div class="price">
                <h3>{{$annonce->price}} DTN</h3>
        </div>
            <div class="title">
                <h4>{{$annonce->title}}</h4>
            </div>
            <div class="date">
                <p> Dated : {{$annonce->created_at}}
                </p>
                
            </div>
                @endforeach

        </div>
        <div class="more-info">
            @foreach($detail as $annonce)

            <div class="local">
           <span>  <img src="/icon/map.jpg" alt="icon local"></span>   {{$annonce->adresse}}
            </div>
                <div>

                </div>
            @endforeach
        </div>
        <div class="user">
@foreach($user as $use)
    <div class="avatar-user">
        <img src="{{asset($use->avatar)}}">
        <div class="more-detail">
        <a href="#">{{$use->name}}</a>
            <p>Member since : {{$use->created_at}}</p>
        </div>
    </div>

    @endforeach
            <div>
                <input type="tel" class="btn btn-primary" value="send">
            </div>
        </div>

    </div>
    <div class="col-md-12 desc">
        <h4>Offers for this listing</h4>
        <h6>Description</h6>
        @foreach($detail as $annonce)
            <p>{{$annonce->description}}</p>
            @endforeach
    </div>
    </div>
</div>







@endsection