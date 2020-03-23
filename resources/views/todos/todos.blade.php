<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>Todo List</title>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"crossorigin="anonymous">


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
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
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
                <a class="nav-link" href="/new-todo">Create Todos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/todos">Todos</a>
              </li>

            </ul>
          </div>
        </nav>
        @if(session()->has('success'))
          <div class="alert alert-success">
            {{session()->get('success') }}
          </div>
        @endif


    <div class="container">


          <h2 class="text-center list-group">Todos Page</h2>

        <div class="row justify-content-center">
          <div class="col-md-6">
            <div class="card card-body">
              Todos
              @foreach($todos as $todo)
              <ul class="list-group">
                <li class="list-group-item">{{$todo->name}}

                  <a href="/todos/{{$todo->id}}/complete" class="btn btn-warning btn-sm float-right">complete</a>
                  @if(!$todo->completed)
                    <a href="/todos/{{$todo->id}}" class="btn btn-primary btn-sm float-right mr-2" >view</a>
                  @endif
                </li>

              </ul>
              @endforeach
            </div>
          </div>
        </div>

    </div>
  </body>
</html>
