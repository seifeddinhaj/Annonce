
@extends('layouts.app')

@section('content')

    <div class="container detail">
<div class="row">

    <div class="col-md-6">
        @foreach($req1 as $annonce)
        <img src="{{asset($annonce->urlimg)}}" alt="detail img">
        @endforeach

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
                <p> Dated : {{$annonce->created_at}}</p>
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

        </div>

    </div>
    <div class="col-md-12 desc">
        <h4>Offers for this listing</h4>
        @foreach($detail as $annonce)
            <p>{{$annonce->description}}</p>
            @endforeach
    </div>
    </div>
</div>







@endsection