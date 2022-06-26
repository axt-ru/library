@extends('layouts.app')

@section('content')
    <h2>Поиск книг <br></h2>

    <form action="{{ route('search')  }}" method="post">
        @csrf
        <input type="text" name="title"> <br>
        <h3>Выберите автора</h3>
        <input type="checkbox" name="author_1"> Васильев Борис Львович <br>
        <input type="checkbox" name="author_2"> Роулинг Джоан Кэтлин <br>
        <input type="checkbox" name="author_3"> Дюма Александр <br>
        <input type="checkbox" name="author_4"> Глушко Мария Васильевна <br>
        <input type="checkbox" name="author_5"> Дойл Артур Конан <br>
        <h3>Выберите жанр</h3>
        <input type="checkbox" name="genre_1"> Книги о войне <br>
        <input type="checkbox" name="genre_2"> Исторические приключения <br>
        <input type="checkbox" name="genre_3"> Современная проза <br> <br>

        <input type="submit" value="Поиск">
    </form>

    @if(empty($searchResult))
        @foreach ($books as $item)
            <span>{{ $item->title }}</span> <br>
        @endforeach
    @else
        <br> <p>результаты поиска</p>
    @endif

@endsection
