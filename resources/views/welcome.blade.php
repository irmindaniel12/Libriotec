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
                               
                                <?php
                                $conexion=mysqli_connect("libriotec.ctkwnx2kqyjz.us-east-2.rds.amazonaws.com","admin","mipassword","libriotec","3306");
                                $query=mysqli_query($conexion,"select count(*) from users");
                                $res=mysqli_fetch_assoc($query);                                                            
                                echo '<h2 class="counter" aria-label="">'.$res['count(*)'].'</h2>';
                                ?>
                                
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
                                        <img src="https://axis.org/wp-content/uploads/2014/10/chris-headshot.png" >
                                        <div class="member-info">
                                            <h3>Joaquin Lizama</h3>
                                            <p>Analista</p>
                                            <p>Frontend</p>
                                        </div>
                                    </div>
                                </div>

                            </li><!-- /single member row ends -->

                            <!-- single member row starts -->
                            <li class="clearfix">
                                <div class="member-details">
                                    <div>
                                        <img src="https://scontent.fmid2-1.fna.fbcdn.net/v/t1.0-9/s960x960/36878516_390189384720449_196695723901714432_o.jpg?_nc_cat=104&_nc_sid=85a577&_nc_ohc=uWLkv49A6eQAX9qIrJG&_nc_ht=scontent.fmid2-1.fna&_nc_tp=7&oh=bb408bb6e621151e65cb4a070ebacef9&oe=5EEF0F96" >
                                        <div class="member-info">
                                            <h3>Jesús Poot</h3>
                                            <p>Dev. Backend</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="member-details">
                                    <div>
                                        <img src="https://scontent.fmid2-1.fna.fbcdn.net/v/t1.0-9/p960x960/79151472_3290971884309836_556585945760006144_o.jpg?_nc_cat=111&_nc_sid=7aed08&_nc_ohc=Jf-VLFSZDd8AX_Dm-3v&_nc_ht=scontent.fmid2-1.fna&_nc_tp=6&oh=18d2e2a691bc30db5396b79d39f84df4&oe=5EEED1F0">
                                        <div class="member-info">
                                            <h3>Rubén Flores</h3>
                                            <p>Analista</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="member-details">
                                    <div>
                                        <img src="https://scontent.fmid2-1.fna.fbcdn.net/v/t1.0-1/p960x960/67298344_2357699830986752_7233156888504827904_o.jpg?_nc_cat=109&_nc_sid=dbb9e7&_nc_ohc=X0yrHfC8PXkAX_HKnrn&_nc_ht=scontent.fmid2-1.fna&_nc_tp=6&oh=81e4f9cee173706ea14de51ad0884e07&oe=5EF0E6FA" >
                                        <div class="member-info">
                                            <h3>Eduardo Garma</h3>
                                            <p>Analista</p>
                                        </div>
                                    </div>
                                </div>
                            </li><!-- /single member row ends -->

                            <!-- single member row starts -->
                            <li class="clearfix">
                                <div class="member-details">
                                    <div>
                                        <img src="https://avatars0.githubusercontent.com/u/43019714?s=460&u=397e554c4ef4b8648d5544601fbd8ef96266237f&v=4">
                                        <div class="member-info">
                                            <h3>Silvia Moreno</h3>
                                            <p>Analista</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="member-details">
                                    <div>
                                        <img src="https://scontent.fmid2-1.fna.fbcdn.net/v/t1.0-9/p960x960/51020132_2300668686644431_1645197105452548096_o.jpg?_nc_cat=110&_nc_sid=7aed08&_nc_ohc=P-J-WA3LfhIAX8RMWYS&_nc_ht=scontent.fmid2-1.fna&_nc_tp=6&oh=63396d3c9b781fd2101d79ff86a8de65&oe=5EEFCA3D" alt="UI Designer">
                                        <div class="member-info">
                                            <h3>Erick Moo</h3>
                                            <p>Analista</p>
                                            <p>Frontend</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="member-details">
                                    <div>
                                        <img src="https://scontent.fmid2-1.fna.fbcdn.net/v/t31.0-8/p960x960/18056094_1453448704716021_5565169945469008104_o.jpg?_nc_cat=108&_nc_sid=7aed08&_nc_ohc=22wdw99yW2EAX9zLDWj&_nc_ht=scontent.fmid2-1.fna&_nc_tp=6&oh=738de69346f66a73f82e8209b9355012&oe=5EF027A8">
                                        <div class="member-info">
                                            <h3>Irmin Marín</h3>
                                            <p>Dev.FullStack</p>
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

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('js/scriptcontador.js') }}"></script>

</html>