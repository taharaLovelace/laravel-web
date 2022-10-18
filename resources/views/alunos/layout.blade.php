<!DOCTYPE html>
 
<html>
    <head>
        
        <title>Alunos</title>
        <link rel="stylesheet" href="materias/main.css" type="text/css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">

    </head>



    <body>
    <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
        <div class="container my-4">
          <a href="{{route('inicial')}}" class="navbar-brand"><h1 class="laravel">Projeto CRUD</h1></a>
  
          
        </div>
      </nav>

    <div class="container">
        <br>
        @yield('content')
    </div>
    </body>
</html>