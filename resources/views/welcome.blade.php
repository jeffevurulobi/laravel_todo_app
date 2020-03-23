<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>welcome to your todo app</title>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <!-- Styles -->
  <style>
      html, body {
          background-color: #fff;
          color: #636b6f;
          font-family: 'Nunito', sans-serif;
          font-weight: 200;
          height: 100vh;
          margin: 0;
          padding: 0;
      }
  </style>
</head>
    <body>
      <nav class="navbar navbar-expand-md navbar-dark bg-dark ">
        <a class="navbar-brand" href="/">Todo App</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/todos">Todos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/new-todo">Create Todo</a>
            </li>
          </ul>
      </nav>

      <main role="main" class="container">

        <div class="text-center">
          <h1 class="justify-content-center">Welcome to Laravel Todo App</h1>
          <a href="/new-todo" class="btn btn-primary btn-lg">New Todo</a>
          <a href="/todos" class="btn btn-primary btn-lg">View Todos</a>
      </div>

    </body>
</html>
