<div class="container main-secction">
    <div class="row">

        <div class="row user-left-part">
            <div class="col-md-3 col-sm-3 col-xs-12 user-profil-part pull-left">
                <div class="row ">
                    <div class="col-md-12 col-md-12-sm-12 col-xs-12 user-image text-center">
                        @if(Auth::user()->image)
                        <img src="{{ route('user.avatar',['filename'=>$user->image]) }}" class="rounded-circle" style="width: 100%">
                        @else
                        <img src="{{ asset('img/profile.webp') }}" class="rounded-circle" style="width: 100%">
                        @endif
                    </div>

                    <div class="col-md-12 col-sm-12 col-xs-12 user-detail-section1 text-center">

                        <h3>{{'@'.$user->nickname}}</h3>
                        <p>{{'Se unió: '.\FormatTime::LongTimeFilter($user->created_at)}}</p>



                        <a href="{{ route('config') }}" class="btn btn-primary btn-block">Configurar mi usuario</a>
                        <button class="btn btn-primary btn-block">Publicar Libro</button>
                    </div>

                </div>
            </div>
            <div class="col-md-9 col-sm-9 col-xs-12 pull-right profile-right-section">
                <div class="row profile-right-section-row">
                    <div class="col-md-12 profile-header">
                        <div class="row">
                            <div class="col-md-8 col-sm-6 col-xs-6 profile-header-section1 pull-left">
                                <h2>{{$user->name .' '. $user->ApellidoPaterno .' '. $user->ApellidoMaterno}}</h2>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-8">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#profile" role="tab" data-toggle="tab"><i class="fa fa-info"></i> Mi Información</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#libros" role="tab" data-toggle="tab"><i class="fa fa-book"></i>Libros Publicados</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#historial" role="tab" data-toggle="tab"><i class=" fa fa-history"></i>Historial de Trueques</a>
                                    </li>

                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade show active" id="profile">
                                        <!-- Nombre -->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <strong>Nombre:</strong>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$user->name}}</p>
                                            </div>
                                        </div>
                                        <!-- Apellido Paterno -->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <strong>Apellido Paterno:</strong>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$user->ApellidoPaterno}}</p>
                                            </div>
                                        </div>

                                        <!-- Apellido Materno -->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <strong>Apellido Materno:</strong>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$user->ApellidoMaterno}}</p>
                                            </div>
                                        </div>

                                        <!-- Email -->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <strong>Email:</strong>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$user->email}}</p>
                                            </div>
                                        </div>

                                        <!-- Teléfono -->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <strong>Teléfono:</strong>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$user->Telefono}}</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div role="tabpanel" class="tab-pane fade" id="libros">
                                        @foreach($publicaciones as $publi)

                                        @if($publi->user_id == $user->id)
                                        <h3 class="mb-0">{{$publi->titulo}}</h3>
                                        <div class="mb-1 text-muted">{{$publi->autor}}</div>
                                        <a href="{{ route('publicacion.detail', ['id' => $publi->id])}}" class="">Ver</a>
                                        <a href="{{ route('publicacion.edit', ['id' => $publi->id]) }}" class="">Editar</a>
                                        <a href="#" class="">Eliminar</a>
                                        <hr>
                                        @endif

                                        @endforeach


                                        @include('includes.pagination')
                                    </div>

                                    <div role="tabpanel" class="tab-pane fade" id="historial">
                                        <strong>No cuentas con historial</strong>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>