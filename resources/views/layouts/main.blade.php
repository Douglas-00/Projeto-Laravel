<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
    <!-- Bootstrap Aplicação -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Css Aplicação -->
    <link rel="stylesheet" href="/css/style.css">
    <!-- js Aplicação -->
    <script src="/js/script.js"></script>



</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
            <div class="container-fluid">
                <a class="navbar-brand" href="/">TEC-DG
                    <img src="/img/logo.png" alt="DG Events" width="50px">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">     
                    </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link"  href="#" id="navbarlink">Eventos</a>
                        </li> 
                        <li class="nav-item">
                            <a class="nav-link" href="/events/create" id="navbarlink">Criar Eventos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" id="navbarlink">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" id="navbarlink">Cadastrar</a>
                        </li>  
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container-fluid">
            <div class="row">
                @if(session('msg'))
                    <p class="msg">{{session('msg')}}</p>
                @endif
                @yield('content')
            </div>
        </div>
    </main>
    


    <footer>
        <p>Desenvolvido por Douglas Alves com o <ion-icon name="heart" size="large"></ion-icon>
        em
        &copy;2022</p>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    
</body>

</html>