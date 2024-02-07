@extends('layouts.main')
@section('main-section')
{{-- <div class="container mt-4 mb-4">
    <div class="card shadow">
        <div class="card-body"> --}}
            <h2 class="card-title text-center mb-4">Book Details</h2>

            <div class="table-responsive" align="center">
                <table class="table" align="center">
                    <tr>
                        <th>ISBN: </th>
                        <td>{{$book->isbn}}</td>
                    </tr>
                    <tr>
                        <th>Book Title: </th>
                        <td>{{$book->title}}</td>
                    </tr>
                    <tr>
                        <th>Author: </th>
                        <td>{{$book->author}}</td>
                    </tr>
                    <tr>
                        <th>Quantity: </th>
                        <td>{{$book->available}}</td>
                    </tr>
                    <tr>
                        <th>Created: </th>
                        <td>{{$book->created_at}}</td>
                    </tr>
                    <tr>
                        <th>Updated: </th>
                        <td>{{$book->updated_at}}</td>
                    </tr>
                </table>
            </div>

            <a href="{{ route('home') }}" class="btn btn-primary">Back to Home</a>
        {{-- </div>
    </div>
</div> --}}
@endsection