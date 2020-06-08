
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



                        <a href="{{ route('config') }}" class="btn btn-secondary btn-block">Editar Perfil</a>
                        <a href="{{ url('/subir-libro') }}" class="btn btn-secondary btn-block">Publicar Libro</a>
                        
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
                                        <a class="nav-link" href="#libros" role="tab" data-toggle="tab"><i class="fa fa-book"></i> Libros Publicados</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#historial" role="tab" data-toggle="tab"><i class=" fa fa-history"></i> Historial de Intercambios</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#pedidos" role="tab" data-toggle="tab"><i class="fa fa-caret-square-o-down"></i> Libros pedidos</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#Solicitados" role="tab" data-toggle="tab"><i class="fa fa-caret-square-o-up"></i> Libros solicitados </a>
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
                                            <div class="col-md-6 Email">
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
                                        @foreach($notificacion as $noti)
                                            @if($noti->user_creacion_id == $user->id && $noti->status>1)


                                                <div class="card mb-4 shadow-sm">
                                                        <div class="card-header">
                                                          <h4 class="El libro: ">EL libro {{$noti->nombre_libro}}</h4>
                                                        </div>
                                                        <div class="card-body">
                                                             @if($noti->status == 2)
                                                                 <h4 class="card-title pricing-card-title">Aceptaste el cambio con el ususario {{$noti->nombre_usu_pedido}}</h4>
                                                             @else
                                                                 <h4 class="card-title pricing-card-title">Rechazarte  el cambio con el ususario {{$noti->nombre_usu_pedido}}</h4>
                                                             @endif
                                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                         </div>
                                                    </div>
                                                 </div>



                                            @else

                                                 @if($noti->user_pedido_id == $user->id)

                                                 <div class="card mb-4 shadow-sm">
                                           <div class="card-header">
                                             <h4 class="El libro: ">EL libro {{$noti->nombre_libro}}</h4>
                                           </div>
                                           <div class="card-body">
                                             <h4 class="card-title pricing-card-title">Has solicitado un libro al usuario {{$noti->nombre_user_creacion}} </h4>
                                                @if($noti->status==1)
                                                @else
                                                    @if($noti->status == 2)
                                                        <h4 class="card-title pricing-card-title">EL intercambio del libro fue "aceptado"</h4>
                                                    @else
                                                        <h4 class="card-title pricing-card-title">EL intercambio del libro fue "rechazado"</h4>
                                                    @endif
                                                @endif
                                             <div class="btn-group" role="group" aria-label="Basic example">
                                            </div>
                                           </div>
                                         </div>




                                                @endif
                                            @endif
                                        @endforeach
                                        @include('includes.pagination')
                                    </div>

                                    <div role="tabpanel" class="tab-pane fade" id="Solicitados">

                                        @foreach($notificacion as $noti)
                                        @if($noti->user_pedido_id == $user->id)
                                        <div class="card mb-4 shadow-sm">
                                           <div class="card-header">
                                             <h4 class="El libro: ">EL libro {{$noti->nombre_libro}}</h4>
                                           </div>
                                           <div class="card-body">
                                             <h4 class="card-title pricing-card-title">Has solicitado un libro al usuario {{$noti->nombre_user_creacion}} </h4>
                                                @if($noti->status==1)
                                                    <h4 class="card-title pricing-card-title">EL intercambio esta pendiente</h4>
                                                @else
                                                    @if($noti->status == 2)
                                                        <h4 class="card-title pricing-card-title">EL intercambio del libro fue "aceptado"</h4>
                                                    @else
                                                        <h4 class="card-title pricing-card-title">EL intercambio del libro fue "rechazado"</h4>
                                                    @endif
                                                @endif
                                             <div class="btn-group" role="group" aria-label="Basic example">
                                            </div>
                                           </div>
                                         </div>
                                        @endif
                                        @endforeach
                                        @include('includes.pagination')
                                    </div>

                                    <div role="tabpanel" class="tab-pane fade" id="pedidos">

                                        @foreach($notificacion as $noti)
                                        @if($noti->user_creacion_id == $user->id && $noti->status==1)
                                        <div class="card mb-4 shadow-sm">
                                           <div class="card-header">
                                             <h4 class="El libro: ">EL libro {{$noti->nombre_libro}}</h4>
                                           </div>
                                           <div class="card-body">
                                             <h4 class="card-title pricing-card-title">El usuario {{$noti->nombre_usu_pedido}} te solicito un libro</h4>
                                             <div class="btn-group" role="group" aria-label="Basic example">
                                             <form method="POST" action="{{route('valiarcambio')}}" nctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" type="number" name="status" value="2">
                                                <input type="hidden" type="number" name="id" value="{{$noti->id}}">
                                                <button  type="submit" class="btn btn-primary">Aceptar</button>
                                             </form>

                                              <form method="POST" action="{{route('valiarcambio')}}" nctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" type="number" name="status" value="3">
                                                <input type="hidden" type="number" name="id" value="{{$noti->id}}">
                                                <button type="submit" class="btn btn-secondary">Rechazar</button>
                                             </form>
                                            </div>
                                           </div>
                                         </div>
                                        @endif
                                        @endforeach
                                        @include('includes.pagination')
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
