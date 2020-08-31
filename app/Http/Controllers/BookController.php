<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
  public function index() {
    // $books = [
    //   [
    //     'title' => 'Siddhartha',
    //     'author' => 'Hermann Hesse',
    //     'language' => 'German'
    //   ],
    //   [
    //     'title' => 'Signorina',
    //     'author' => 'Chiara Sfregola',
    //     'language' => 'Italian'
    //   ],
    //   [
    //     'title' => 'Orlando',
    //     'author' => 'Virginia Woolf',
    //     'language' => 'English'
    //   ]
    // ];

    $books = Book::all();

    return view('books',compact('books'));
  }
}
