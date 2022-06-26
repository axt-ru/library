@extends('layouts.app')

@section('content')
    проверка
    @dump(env('DB_DATABASE'). 3)
    @foreach($posts as $item)
    {{ $item->title }} <br>
    @endforeach

@endsection
