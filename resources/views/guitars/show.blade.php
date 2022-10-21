@extends('layout')
@section('title', 'Show Guitar')
@section('contents')
<div class="container">
    <div class="card">
        <h5 class="card-header">Guitar Details</h5>
        <div class="card-body">
            <h5 class="card-title">{{$guitar->name}}</h5>
            <p class="card-text">Brand: {{$guitar->brand}}</p>
            <p class="card-text">Year Made: {{$guitar->year}}</p>
            <form action="{{route('guitars.destroy', ['guitar'=> $guitar->id])}}" method="POST">
            <a href="{{route('guitars.index')}}" class="btn btn-primary">Back</a>
            <a href="{{route('guitars.edit', ['guitar' => $guitar->id])}}" class="btn btn-primary">Edit</a>
            @method('DELETE')
            @csrf
            <input type="submit" class="btn btn-primary" value="Delete">
            </form>
        </div>
    </div>
</div>
@endsection