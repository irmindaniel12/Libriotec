<!-- Libro -->
                <div class="col-md-6">
                    <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">

                        <div class="col p-4 d-flex flex-column position-static">
                            <strong class="d-inline-block mb-2 text-primary">Disponible</strong>
                            <h3 class="mb-0">{{$publi->titulo}}</h3>
                            <div class="mb-1 text-muted">{{$publi->autor}}</div>
                            <p class="card-text mb-auto" style=" width: 331px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">{{$publi->description}}</p>
                            <a href="{{ route('publicacion.detail', ['id' => $publi->id])}}" class="">Más Información</a>

                            <div class="row">

                                <div style="padding-left: 15px;">
                                    <span class="fa fa-user">{{$publi->user->name}} </span>
                                </div>

                                <div style="padding-left: 10px;">
                                    <span class="fa fa-clock-o"> {{\FormatTime::LongTimeFilter($publi->created_at)}}</span>
                                </div>

                                <div style="padding-left: 10px;">

                                <form method="POST" action="{{route('solicitors')}}" nctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" type="number" name="id_ususario" value="{{$publi->user_id}}">
                                    <input type="hidden" type="text" name="nombre_usu_pedido" value="{{auth()->user()->name}}">
                                    <input type="hidden" type="text" name="nombre_libro" value="{{$publi->titulo}}">
                                        <button style="padding-top:0px; padding-left:0; " type="submit" class="btn btn-link">solicitar</button>
                                 </form>


                                </div>

                            </div>
                        </div>

                        <div class="col-auto d-none d-lg-block">
                            <li class='book'>
                            <img src="{{ route('image.file',['filename' => $publi->image_path]) }}" />
                            </li>
                        </div>
                    </div>
                </div>
<!-- Fin de Libro -->



