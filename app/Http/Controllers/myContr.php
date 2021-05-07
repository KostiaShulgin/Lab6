<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Copy;
use Illuminate\Http\Request;

class myContr extends Controller
{
    public function allBooks(){
        return view('Main')->with('books', Book::get());
    }

    public function bookPage($id){
        $auth = Book::find($id)->authors()->get();
        $copy = Book::find($id)->copies()->get();
        return view('Book')->with('book', Book::find($id))->with('authors', $auth)->with('copies', $copy);
    }

    public function allAuthors(){
        return view('Authors')->with('authors', Author::get());
    }

    public function authorPage($id){
        $books = Author::find($id)->books()->get();
        return view('Author')->with('author', Author::find($id))->with('books', $books);
    }

    public function bookByTitle(Request $request){
        $title = $request->input('searchInput');
        return view('Main')->with('books', Book::where('title','like',"%$title%")->orderby('id')->get());
    }

    public function bookByGenre($genre){
        return view('Main')->with('books', Book::where('genre', $genre)->get());
    }

    public function copyPage($id, $inv_number){
        return view('Copy')->with('book', Book::find($id))
            ->with('copies', Copy::where('inv_number', $inv_number)->get());
    }
}
