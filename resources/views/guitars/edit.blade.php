@extends('layout')
@section('title', 'Edit Guitar')
@section('contents')
<div class="container">
    <form action="{{route('guitars.update', ['guitar' => $guitar->id])}}" method="POST">
    @csrf
    @method('PUT')
        <div class="form-group">
            <label for="name">Guitar Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{$guitar->name}}">
            @error('name')
            <div class="text-warning">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="brand">Guitar Brand</label>
            <input type="text" class="form-control" id="brand" name="brand" placeholder="Brand" value="{{$guitar->brand}}">
            @error('brand')
            <div class="text-warning">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="year">Year Made</label>
            <input type="text" class="form-control" id="brand" name="year" placeholder="Year" value="{{$guitar->year}}">
            @error('year')
            <div class="text-warning">
                {{$message}}
            </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection