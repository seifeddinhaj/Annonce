
@extends('layouts.app')

@section('content')

@foreach($req1 as $annonce)
<div class="img">
{{$annonce->urlimg}}
                        <img src="{{$annonce->urlimg}}" alt="img Ad" class="img-thumbnail">
                        </div><br>

@endforeach
@endsection