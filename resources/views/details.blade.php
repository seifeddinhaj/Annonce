
@extends('layouts.app')

@section('content')

    <div class="container detail">
<div class="row">
<div class="col-md-6">



    <div class="col-md-12">
   <!-- Slide img -->

        <div class="w3-content w3-display-container">
            @foreach($req1 as $annonce)
            <img class="mySlides" src="{{asset($annonce->urlimg)}}" >

            @endforeach
            <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
            <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
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