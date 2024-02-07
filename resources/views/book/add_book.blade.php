@extends('layouts.main')
@section('main-section')
    <div class="container">
        <form action="{{route('add_book')}}" method="POST">
            @csrf
            <div class="form-group mb-2">
              <input name="title" type="text" class="form-control" placeholder="Enter title" value = "{{old('title')}}">
                @if($errors->has('title'))
                    <div class="error text-danger">{{ $errors->first('title') }}</div>
                @endif
            </div>
            <div class="form-group mb-2">
                <input name="author" type="text" class="form-control" placeholder="Enter author" value = "{{old('author')}}">
                @if($errors->has('author'))
                    <div class="error text-danger">{{ $errors->first('author') }}</div>
                @endif
            </div>
            <div class="form-group mb-2">
                <input name="isbn" type="number" class="form-control" placeholder="Enter ISBN" value = "{{old('isbn')}}">
                @if($errors->has('isbn'))
                <div class="error text-danger">{{ $errors->first('isbn') }}</div>
            @endif
            </div>
            <div class="form-group mb-2">
                <input name="available" type="number" class="form-control" placeholder="Enter quantity" value = "{{old('available')}}">
            @if($errors->has('available'))
                <div class="error text-danger">{{ $errors->first('available') }}</div>
            @endif
            </div>
            <button type="submit" class="btn btn-primary mb-2">Submit</button>
          </form>
    </div>
@endsection