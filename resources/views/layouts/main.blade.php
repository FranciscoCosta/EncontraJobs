<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite(['resources/sass/home.scss', 'resources/sass/navbar.scss', 'resources/sass/createJob.scss'])
    {{-- import bootstrap --}}
    <link rel="stylesheet" href="/css/main.css">
    <title>@yield('title')</title>
</head>

<body>
    <header>
        <nav class="Navbar">
            <div class="Navbar__container" id="navbar">
                <a href="" class="Navbar__logo">
                    <img src="/assets/logo.png" alt="Encontra jobs">
                </a>
                <ul class="Navbar__list">
                    <li><a href="/" class="Navbar__link">Ver vagas</a></li>
                    <li><a href="/jobs/create" class="Navbar__link">Cadastrar vagas</a></li>
                    <li><a href="" class="Navbar__link">Cadastrar</a></li>
                    <li><a href="" class="Navbar__link">Entrar</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        @if (session('msg'))
            <div class="msg-container" style="background-color: {{ session('error') ? 'red' : 'rgba(60,179,113,0.8)' }}">
                <p class="error">{{ session('error') }}</p>
                <p class="msg">{{ session('msg') }}</p>
            </div>
            </div>
        @endif
        @yield('content')
    </main>
    <footer class="Footer">
        <p>EncontraJobs &copy; 2023</p>
    </footer>
</body>

</html>
