<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function PHPUnit\Framework\isEmpty;

class BooksSearchController extends Controller
{
    public $genreResult = null;
    public $books;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Request $request)
    {
        //dd($request);
        if ($request->has('author_1')) { $requestResult = 1; }
        elseif ($request->has('author_2')) { $requestResult = 2; }
        elseif ($request->has('author_3')) { $requestResult = 3; }
        elseif ($request->has('author_4')) { $requestResult = 4; }
        elseif ($request->has('author_5')) { $requestResult = 5; }

         if (strlen($request->input('title')) == 0)
       {
           $books = DB::table('books')->get();
       }
        else {
            $books_1 = DB::table('books')
                ->join('authors', 'books.first_author_id', '=', 'authors.id')
                ->select('books.*')
                ->where('first_author_id', '=', $requestResult)
                ->get();

            $books_2 = DB::table('books')
                ->join('authors', 'books.second_author_id', '=', 'authors.id')
                ->select('books.*')
                ->where('second_author_id', '=', $requestResult)
                ->get();

            $books_3 = DB::table('books')
                ->join('authors', 'books.third_author_id', '=', 'authors.id')
                ->select('books.*')
                ->where('third_author_id', '=', $requestResult)
                ->get();

            $books = collect($books_1)->merge($books_2)->merge($books_3);
        }
        //dd($books);
        if ($this->genreCheckboxResult($request) == 1) {
            $this->genreResult = 1;

            if (($request->has('genre_1') == 1)) {
               $books = $books->filter(function ($item)  {
                      return $item->first_genre_id === 1;
               });
                //dd($books);
            }
            if (($request->has('genre_2') == 1)) {
                $books = $books->filter(function ($item) {
                    return $item->second_genre_id === 1;
                });
            }
            if (($request->has('genre_3') == 1)) {
                $books = $books->filter(function ($item)  {
                    return $item->third_genre_id === 1;
                });

            }
        }
            return view('books.search', ['books' => $books]);
    }

    public function genreCheckboxResult(Request $request){
        if (($request->has('genre_1') == 1) || ($request->has('genre_2') == 1) || ($request->has('genre_3') == 1)) {
            return 1;
        }
        else return 0;
    }

}
