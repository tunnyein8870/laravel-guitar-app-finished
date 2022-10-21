@extends('layout')
@section('title', 'Create Guitar')
@section('contents')
<div class="container">
    <form action="{{route('guitars.store')}}" method="POST">
    @csrf

        <div class="form-group">
            <label for="name">Guitar Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{old('name')}}">
            @error('name')
            <div class="text-warning">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="brand">Guitar Brand</label>
            <input type="text" class="form-control" id="brand" name="brand" placeholder="Brand" value="{{old('brand')}}">
            @error('name')
            <div class="text-warning">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="year">Year Made</label>
            <input type="text" class="form-control" id="brand" name="year" placeholder="Year" value="{{old('year')}}">
            @error('name')
            <div class="text-warning">
                {{$message}}
            </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection