<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
  public function index() {
    $books = [
      [
        'title' => 'Siddhartha',
        'author' => 'Hermann Hesse',
        'language' => 'German'
      ],
      [
        'title' => 'Signorina',
        'author' => 'Chiara Sfregola',
        'language' => 'Italian'
      ],
      [
        'title' => 'Orlando',
        'author' => 'Virginia Woolf',
        'language' => 'English'
      ]
    ];
    return view('books',compact('books'));
  }
}
