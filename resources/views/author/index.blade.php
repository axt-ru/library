@extends('layouts.app')

@section('content')
    Авторы книг <br>

    @foreach ($authors as $new)
        <a href="#">{{ $new->name }}</a> <br>
    @endforeach


@endsection
