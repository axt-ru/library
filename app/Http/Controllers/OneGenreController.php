<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class OneGenreController extends Controller
{
    public function index()
    {
        $books = DB::table('genres')
            ->join('books', 'books.first_genre_id', '=', 'genres.id')
            ->select('*')
            ->get();
        return view('one', ['books' => $books]);
    }

    public function show()
    {
        $books_one_genre = DB::table('genres')
            ->join('books', function ($join) {
                $join->on('books.first_genre_id', '=', 'genres.id')
                    ->where('genres.id', '=', 5);
            })
            ->get();
        return view('one', ['books_one_genre' => $books_one_genre]);
    }
}
