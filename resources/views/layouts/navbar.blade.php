<nav class="navbar navbar-default navbar-fixed-top" data-spy="affix" data-offset-top="205">

    <div class="container-fluid">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <img src="{{ asset('img/Libriotecsinfondo.png') }}" alt="" width="40px">
        </div>
        <a class="navbar-brand" href="#">
            Libriotec
        </a>
        <div class="collapse navbar-collapse" id="myNavbar">

            <ul class="nav navbar-nav navbar-left">
                <li><a href="{{ url('/') }}">Inicio</a></li>
                <li><a href="{{ url('/home') }}">Libros</a></li>
                <li><a href="">Buscar</a></li>
                <li><a href="">Subir Libro</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                    
                        @endguest
                    </ul>
        </div>
    </div>
</nav>