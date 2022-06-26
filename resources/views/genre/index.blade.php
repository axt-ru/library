@extends('layouts.app')

@section('content')

    @foreach ($genres as $genre)
        <a href="#">{{ $genre->title }}</a> <br>
    @endforeach

@endsection
