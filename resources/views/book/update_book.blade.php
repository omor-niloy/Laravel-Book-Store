@extends('layouts.main')
@section('main-section')
    <div class="container">
        <form action="{{route('save_update', $book->id)}}" method="POST">
            @csrf
            <div class="form-group mb-2">
              <input name="title" type="text" class="form-control" placeholder="Enter title" value = "{{old('title', $book->title)}}">
            </div>
            <div class="form-group mb-2">
                <input name="author" type="text" class="form-control" placeholder="Enter author" value = "{{old('author', $book->author)}}">
            </div>
            <div class="form-group mb-2">
                <input name="isbn" type="number" class="form-control" placeholder="Enter ISBN" value = "{{old('isbn', $book->isbn)}}">
            </div>
            <div class="form-group mb-2">
                <input name="available" type="number" class="form-control" placeholder="Enter quantity" value = "{{old('available', $book->available)}}">
            </div>
            <button type="submit" class="btn btn-primary mb-2">Submit</button>
          </form>
    </div>
@endsection