@extends('layouts.main')
@section('main-section')

<div class="container">
    <div class="d-flex justify-content-between align-items-center">
        <a href="{{route('add_book')}}" class="btn btn-primary mt-2">Create Book</a>
        
        <form action="" class="d-flex">
            @csrf
            <input name="search" class="form-control me-2" type="search" placeholder="Search" aria-label="Search" value="{{$search}}">
            <button class="btn btn-outline-light" type="submit">Search</button>
        </form>
    </div>
    
    
    
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Title</th>
            <th scope="col">Author</th>
            <th scope="col">ISBN</th>
            <th scope="col">Available</th>
            <th colspan="3" align="center">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
            <tr>
                <th scope="row">{{$book->title}}</th>
                <td>{{$book->author}}</td>
                <td>{{$book->isbn}}</td>
                <td>{{$book->available}}</td>
                <td><a href="{{route('delete_book', $book->id)}}">Delete</a></td>
                <td><a href="{{route('update_book', $book->id)}}">Update</a></td>
                <td><a href="{{route('view_book', $book->id)}}">View</a></td>
              </tr>
            @endforeach
        </tbody>
      </table>
      {{$books->links()}}
</div>
@endsection