@extends('layouts.app')

@section('categori')

        <h4> All categories </h4>
            @foreach($req as $s)
                <div>
            <a href="categori/{{$s->id}}"> {{$s->type}} </a>
                </div>

            @endforeach
    @endsection


@section('content')
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



@endsection
