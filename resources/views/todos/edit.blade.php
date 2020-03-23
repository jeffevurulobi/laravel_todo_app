<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>create todo</title>

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

      .navbar-item{
        display:flex;
        flex-direction:row;
        justify-content: flex-start;
      }
      .navbar-item li{
        display: flex;
        flex-direction: row;
        /* margin: 0.6rem */
      }
      .navbar-item button{
        background: black;
        padding:1rem;
        border-radius: 1rem;
        border-color: black;
      }
      .navbar-item li a{
        text-decoration: none;
        color: white;
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
    </nav>

    <div class="container">

        <div class="row justify-content-center">
          <div class="col-md-4 mt-3">
            <div class="card card-default">
              <div class="card card-header">Edit Todos</div>
              <div class="card card-body">
                @if($errors->any())
                  <div class="alert alert-danger">
                    <ul class="list-group">
                      @foreach($errors->all() as $error)
                        <li class="list-group-item">
                          {{$error}}
                        </li>
                      @endforeach
                    </div>
                    </ul>
                @endif
                <form class="" action="/todos/{{$todosid->id}}/update-todos" method="POST">
                  @csrf
                  <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="name" value="{{$todosid->name}}">
                  </div>

                  <div class="form-group">
                    <textarea name="description" rows="8" cols="80" class="form-control"> {{$todosid->description}}</textarea>
                  </div>
                  <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary">Update Todos</button>
                  </div>
                </form>
              </div
            </div>
          </div>
    </div>
</div>
  </body>
</html>
