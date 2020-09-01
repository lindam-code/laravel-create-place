@extends('layouts.layout');
@section('main_content')

  <h1>Lista studenti della biblioteca</h1>

  @foreach ($students as $student)

    <h2>Studente: {{$student->name}} {{$student->surname}}</h2>
    <ul>
      <li>Descrizione: {{$student->descrizione}}</li>
      <li>Voto: {{$student->vote}}</li>
    </ul>
  @endforeach

@endsection
