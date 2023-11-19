<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!--Fonte do Google -->        
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
        <!-- CSS bootsTrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <!-- CSS -->
        <link rel="stylesheet" href="/css/styles.css">
        <!-- JS -->
        <script src="/js/scripts.js"></script>        
    </head>

    <body>

        <header>

            <nav class="navbar navbar-expand-lg navbar-light">
                
                <div class="collapse navbar-collapse" id="navbar">
                    
                    <a href="/" class="navbar-brand">
                        <img src="/img/carro.png" alt="CAFEJ Cars">
                    </a>

                    <ul class="navbar-nav">

                        <li class="nav-item">
                            <a href="/" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="/cars/create" class="nav-link">Cadastrar</a>
                        </li>
                        <li class="nav-item">
                            <a href="/" class="nav-link">Entrar</a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="/" class="nav-link">PHP Laravel</a>
                        </li>

                    </ul>    

                </div>

            </nav>

        </header>      

        <main>

            <div class="container-fluid">
                <div class="row">
                    @if(session('msg'))
                        <p class="msg"> {{session('msg')}}</p>
                    @endif
                    @yield('Content')
                </div>
            </div>

        </main>    

        <footer>
            <p>CAFEJ Carros &copy; 2023</p>
        </footer>
        <!--icones -->   
        <script src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    </body>
    
</html>