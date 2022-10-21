@extends('layout')
@section('title', 'About Us')
@section('contents')
<div class="container">
    <ul>
        @foreach($guitars as $guitar)
        <h5 class=""><a href="{{route('guitars.show', ['guitar' => $guitar])}}">{{$guitar->name}}</a></h5>
        <li class="">Brand: {{$guitar->brand}}</li>
        <li class="">Year Made: {{$guitar->year}}</li>
        @endforeach
    </ul>
</div>
@endsection