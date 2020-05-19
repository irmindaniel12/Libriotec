<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Libriotec</title>
    <!-- Styles -->
    @include('includes.estiloswelcome')
</head>

<body data-spy="scroll" data-target="#myScrollspy">
    
    @extends('layouts.navbar')    

    <header style="background-image:url('https://c2.peakpx.com/wallpaper/714/983/647/tablet-books-desk-education-wallpaper-preview.jpg');">
        <div class="header-content">
            <div class="header-content-inner">
                <!-- <img src="Libriotec sin fondo.png" alt="" width="20%"> -->
                <h1>Bienvenido</h1>
                <p>Selecciona un libro y ponte en contacto con el usuario para realizar un trueque.</p>
                <p class="dispo">
                    <a href="#" class="text-white font-weight-bold">Ver libros disponibles</a>
                </p>
            </div>
        </div>
    </header>

    <section class="service-section" id="services">
        <div class="container">
            <h3>service</h3>

            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-items">
                        <div class="icon">
                            <span class="glyphicon glyphicon-book" aria-hidden="true"></span>
                        </div>
                        <h4><a href="#">Speed of Development</a></h4>
                        <p>Rather than coding from scratch, Bootstrap enables you to utilize ready made blocks of code
                            to help you get started.</p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-items">
                        <div class="icon">
                            <span class="glyphicon glyphicon-cloud-upload" aria-hidden="true"></span>
                        </div>
                        <h4><a href="#"> Responsiveness</a></h4>
                        <p>Creating mobile ready websites is a breeze with Bootstrap thanks to the fluid grid layout
                            that dynamically adjusts to the proper screen resolution.</p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-items">
                        <div class="icon">
                            <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                        </div>
                        <h4><a href="#">Consistency</a></h4>
                        <p>Bootstrap ensures consistency regardless of who’s working on the project. </p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-items">
                        <div class="icon">
                            <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
                        </div>
                        <h4><a href="#">Customizable</a></h4>
                        <p>Bootstrap can be tailor made according to the specifications of your project.</p>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <section class="service-section" id="services">
        <div class="container">
            <h3>Comunidad</h3>

            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-items">
                        <div class="icon">
                            <span class="glyphicon" aria-hidden="true">
                                <h2 class="counter" aria-label="10">10</h2>
                            </span>
                        </div>
                        <h4><a href="#">Usuario Registrados</a></h4>

                        <p>Descripción</p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-items">
                        <div class="icon">
                            <span class="glyphicon " aria-hidden="true">
                                <h2 class="counter" aria-label="11">11</h2>
                            </span>
                        </div>
                        <h4><a href="#"> Libros Disponibles</a></h4>
                        <p>Descripción</p>

                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-items">
                        <div class="icon">
                            <span class="glyphicon " aria-hidden="true">
                                <h2 class="counter" aria-label="2">2</h2>
                            </span>
                        </div>
                        <h4><a href="#">Trueques realizados</a></h4>
                        <p>Descripción</p>

                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-items">
                        <div class="icon">
                            <span class="glyphicon " aria-hidden="true">
                                <h2 class="counter" aria-label="3">3</h2>
                            </span>
                        </div>
                        <h4><a href="#">Clientes satisfechos</a></h4>
                        <p>Descripción</p>
                    </div>
                </div>
            </div>
    </section>

    <section class="service-section" id="services">
        <div class="container">
            <h3>Equipo de desarrollo</h3>
            <!-- <section> -->
            <div class="">
                <div class="row flex-center sm-no-flex">
                    <div class="pull-right sm-no-float col-md-8">
                        <ul class="team-members">

                            <!-- single member row starts -->
                            <li class="clearfix">
                                <div class="member-details">
                                    <div>
                                        <img src="{{ asset('img/Pedro.jpg') }}" alt="Diseñador">
                                        <div class="member-info">
                                            <h3>Pedro Tilán</h3>
                                            <p>Diseñador</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="member-details">
                                    <div>
                                        <img src="https://axis.org/wp-content/uploads/2014/10/chris-headshot.png" alt="UI Designer">
                                        <div class="member-info">
                                            <h3>John Doe</h3>
                                            <p>UI Designer</p>
                                        </div>
                                    </div>
                                </div>

                            </li><!-- /single member row ends -->

                            <!-- single member row starts -->
                            <li class="clearfix">
                                <div class="member-details">
                                    <div>
                                        <img src="https://axis.org/wp-content/uploads/2015/05/evan-headshot.png" alt="UI Designer">
                                        <div class="member-info">
                                            <h3>John Doe</h3>
                                            <p>UI Designer</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="member-details">
                                    <div>
                                        <img src="http://gocheckers.com/images/roster/andrew_poturalski_headshot_1718.png" alt="UI Designer">
                                        <div class="member-info">
                                            <h3>John Doe</h3>
                                            <p>UI Designer</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="member-details">
                                    <div>
                                        <img src="https://axis.org/wp-content/uploads/2015/12/2015-Dougie-Headshot.png" alt="UI Designer">
                                        <div class="member-info">
                                            <h3>John Doe</h3>
                                            <p>UI Designer</p>
                                        </div>
                                    </div>
                                </div>
                            </li><!-- /single member row ends -->

                            <!-- single member row starts -->
                            <li class="clearfix">
                                <div class="member-details">
                                    <div>
                                        <img src="https://axis.org/wp-content/uploads/2014/10/chris-headshot.png" alt="UI Designer">
                                        <div class="member-info">
                                            <h3>John Doe</h3>
                                            <p>UI Designer</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="member-details">
                                    <div>
                                        <img src="https://axis.org/wp-content/uploads/2014/12/jeremiah-e1418073411753.png" alt="UI Designer">
                                        <div class="member-info">
                                            <h3>John Doe</h3>
                                            <p>UI Designer</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="member-details">
                                    <div>
                                        <img src="http://gocheckers.com/images/roster/josh_wesley_headshot_1718.png" alt="UI Designer">
                                        <div class="member-info">
                                            <h3>John Doe</h3>
                                            <p>UI Designer</p>
                                        </div>
                                    </div>
                                </div>
                            </li><!-- /single member row ends -->

                        </ul><!-- /end team-photos -->
                    </div><!-- /end col-md-8 -->

                    <div class="pull-left col-md-4 sm-text-center">
                        <div class="team-overview">
                            <img src="{{ asset('img/Librioteca_textosinfondo.png') }}" alt="" width="50%">
                            <h2>Who Are We?</h2>
                            <a href="#">Meet the Entire Team</a>
                            <p>
                                <div>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci quae nesciunt officia! Autem, nam eum voluptatem, esse voluptatibus deleniti tempora laboriosam sequi pariatur, explicabo itaque. Fuga, deserunt? Repudiandae, neque qui.</div>
                            </p>
                        </div>
                    </div><!-- /end col-md-4 -->
                </div><!-- /end row -->
            </div><!-- /end container -->
            <!-- </section> -->

        </div>
    </section>

    @extends('includes.footer')

    <!-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div> -->
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('js/scriptcontador.js') }}"></script>

</html>