@extends('layouts.layout')
@section('main_content')
  <h1>Biblioteca</h1>
  <div>
    @foreach ($books as $book)
      <h2>Titolo: {{$book->title}}</h2>
      <ul>
        <li>Autore: {{ $book->author }}</li>
        <li>Lingua: {{ $book->language }}</li>
        <li>Anno pubblicazione: {{ $book->year }}</li>
      </ul>
    @endforeach
  </div>
@endsection
