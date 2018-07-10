
@extends('layouts.app')
@section('content')
seif 

@foreach($req as $s)
{{$s->type}} <br>



@endforeach

@endsection

