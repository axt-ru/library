@extends('layouts.app')

@section('content')

    @foreach ($books_one_genre as $item)
        <a href="#">{{ $item->title }}</a> <br>
    @endforeach



@endsection
