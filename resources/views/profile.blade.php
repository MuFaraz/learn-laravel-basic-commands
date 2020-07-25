@extends('layout')
@section('title')
Profile
@endsection
@section('contents')
    <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae repellendus voluptas possimus, placeat vel architecto minima eius consequatur sequi at reiciendis. Autem delectus est illum earum expedita nisi vel sunt.</h1>
    <h2>{{$myid}}</h2>

    @foreach($info as $user)
    {{$user}} <br/>
    @endforeach
    @if($age>10)
    <p>You are old</p>
    @else
    <p>You are young</p>
    @endif
@endsection