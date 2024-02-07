@extends('layouts.main')
@section('main-section')
<div>
    @if(session('success'))
        {{ session('success') }}
    @endif
    <br>
    <a href="{{route('home')}}" class="btn btn-primary" align="center">
        Home
    </a>
</div>
    
@endsection