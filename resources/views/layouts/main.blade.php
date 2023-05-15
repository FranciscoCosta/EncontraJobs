<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- import bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/main.css">
    <title>@yield('title')</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-light">
        <div class="collapse navbar-collapse" id="navbar">
            <a href="" class="navbar-brand">
                <img src="/assets/logo.png" alt="Encontra jobs">
            </a>
            <ul class="navbar-nav">
                <li><a href="" class="nav-link">Ver vagas</a></li>
                <li><a href="" class="nav-link">Cadastrar vagas</a></li>
                <li><a href="" class="nav-link">Entrar</a></li>
                <li><a href="" class="nav-link">Cadastrar</a></li>
            </ul>
        </div>
    </nav>
</header>
    @yield('content')
    <footer>
        <p>EncontraJobs &copy; 2023</p>
</body>
</html>