@extends('layouts.layout')
@section('main_content')
  <h1>Lista studenti della biblioteca</h1>

  <div id="student-list"></div>

  <script id="student-template" type="text/x-handlebars-template">
    <h2>Studente: @{{ name }} @{{ surname }}</h2>
    <ul>
      <li>Descrizione: @{{ descrizione }}</li>
      <li>Voto: @{{ vote }}</li>
    </ul>
  </script>

  <script src="{{ asset('js/app.js') }}"></script>
@endsection
