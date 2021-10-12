@extends('layouts.plantilla')
@section('title', 'Consigna tu inmueble')
@section('more_head')
    <script src="{!! asset('js/selects.js') !!}"></script>
    <script src="{!! asset('js/funciones.js') !!}"></script>
@endsection

@section('content')
    <div class="card bg-default tarjeta shadow-lg animate__animated animate__fadeIn" id="negocio_tarjeta">
        <div class="card-body">
            {{ Form::open(['method' => 'post', 'files' => true]) }}
            <div class="grupo">
                <div class="row">
                    <div class="col-12">
                        <h4>Negocio</h4>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-12 col-md-6 border-right">
                        <div class="form-group row">
                            <label for="id" class="col-5 col-form-label">Tipo DI</label>
                            <div class="col-7">
                                {!! Form::select('id', $tipos_documento, null, ['class' => 'form-select', 'required' => 'required']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group row">
                            <label for="idnumber" class="col-5 col-form-label">Número DI</label>
                            <div class="col-7">
                                <input id="idnumber" name="idnumber" type="number" class="form-control"
                                    required="required" min="800">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="form-group row">
                            <label for="tipo" class="col-5">Escoge el negocio a realizar con este
                                inmueble</label>
                            <div class="col-7">
                                {!! Form::select('tipo', $negocio, null, ['class' => 'form-select', 'id' => 'negocio', 'required' => 'required']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group row" id="valorgrupo">
                            <label for="valor" id="valorlabel" class="col-5 col-form-label">¿Cuál valor le vas a asignar
                                al inmueble?</label>
                            <div class="col-7">
                                <input id="valor" name="valor" type="number" class="form-control" min="99000"
                                    required="required">
                                <span id="admonhelper" class="form-text text-muted">Incluida cuota de administración si
                                    aplicara</span>
                                <span id="valorpesos" class="form-text text-muted"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 border-right">
                        <div class="form-group row">
                            <label for="espropietario" class="col-5">Soy el propietario del
                                inmueble</label>
                            <div class="col-2">
                                <a>No</a>
                            </div>
                            <div class="col-3 bool text-center">
                                <input type="checkbox" name="espropietario" value="1" id="espropietario" />
                                <label class="slider-v1" for="espropietario"></label>
                            </div>
                            <div class="col-2">
                                <a>Si</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group row" id="pqgrupo">
                            <label for="pqsolicita" class="col-5 col-form-label">¿Por qué deseas publicar el
                                inmueble?</label>
                            <div class="col-7">
                                <input id="pqsolicita" name="pqsolicita" type="text" class="form-control"
                                    required="required">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 border-right">
                        <div class="form-group row">
                            <label for="conjunto" class="col-5">El inmueble se encuentra en
                                conjunto cerrado o edificio </label>
                            <div class="col-2">
                                <a>No</a>
                            </div>
                            <div class="col-3 bool text-center">
                                <input type="checkbox" name="conjunto" value="1" id="conjunto" />
                                <label class="slider-v1" for="conjunto"></label>
                            </div>
                            <div class="col-2">
                                <a>Si</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 border-right">
                        <div class="form-group row">
                            <label for="arrendado" class="col-5">¿Se encuentra arrendado actualmente?</label>
                            <div class="col-2">
                                <a>No</a>
                            </div>
                            <div class="col-3 bool text-center">
                                <input type="checkbox" name="arrendado" value="1" id="arrendado" />
                                <label class="slider-v1" for="arrendado"></label>
                            </div>
                            <div class="col-2">
                                <a>Si</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" id="reglas">
                    <div class="col-12 col-md-6 border-right">
                        <div class="form-group row">
                            <label for="reglamento" class="col-5">¿Tiene reglamento de propiedad
                                horizontal?</label>
                            <div class="col-2">
                                <a>No</a>
                            </div>
                            <div class="col-3 bool text-center">
                                <input type="checkbox" name="reglamento" value="1" id="reglamento" checked />
                                <label class="slider-v1" for="reglamento"></label>
                            </div>
                            <div class="col-2">
                                <a>Si</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group row">
                            <label for="serv_independ" class="col-5 col-form-label">¿Tiene servicios públicos
                                independientes?</label>
                            <div class="col-2">
                                <a>No</a>
                            </div>
                            <div class="col-3 bool text-center">
                                <input type="checkbox" name="serv_independ" value="1" id="serv_independ" checked />
                                <label class="slider-v1" for="serv_independ"></label>
                            </div>
                            <div class="col-2">
                                <a>Si</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grupo">
                <div class="row seccion">
                    <div class="col-12">
                        <h4>Datos del inmueble</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 border-right">
                        <div class="form-group row">
                            <label for="tipo_inm" class="col-5 col-form-label">Tipo de inmueble</label>
                            <div class="col-7">
                                {!! Form::select('tipo_inm', $inmueble, null, ['class' => 'form-select', 'id' => 'tipo_inm', 'required' => 'required']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group row">
                            <label for="estrato_inm" class="col-5 col-form-label">Estrato</label>
                            <div class="col-7">
                                {!! Form::select('estrato_inm', $estratos, null, ['class' => 'form-select', 'id' => 'tipo_inm', 'required' => 'required']) !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 border-right">
                        <div class="form-group row">
                            <label for="departamento" class="col-5 col-form-label">Departamento</label>
                            <div class="col-7">
                                <input id="departamento" readonly name="departamento" type="text" class="form-control"
                                    value="Bogotá D.C." required="required">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group row">
                            <label for="ciudad" class="col-5 col-form-label">Ciudad</label>
                            <div class="col-7">
                                <input id="ciudad" readonly name="ciudad" type="text" value="Bogotá D.C."
                                    required="required" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 border-right">
                        <div class="form-group row">
                            <div class="col-5">
                                <label for="direccion" class="col-form-label">Dirección inmueble</label>
                            </div>
                            <div class="col-7">
                                <input id="direccion" name="direccion" type="text" class="form-control"
                                    required="required" placeholder="Calle 25A #52B-06">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group row" id="detalles">
                            <div class="col-5">
                                <label for="direccion_comp" class="col-form-label">Detalles</label>
                            </div>
                            <div class="col-7">
                                <input id="direccion_comp" name="direccion_comp" type="text" class="form-control"
                                    placeholder="Torre 7 Apto. 302">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 border-right">
                        <div class="form-group row">
                            <label for="tiempo_inm" class="col-5 col-form-label">Año de
                                contrucción</label>
                            <div class="col-7">
                                <input id="tiempo_inm" name="tiempo_inm" type="number" min="0" class="form-control"
                                    max="<?php echo date('Y'); ?>" required="required">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group row">
                            <label for="estado_inb" class="col-5 col-form-label">Estado del inmueble</label>
                            <div class="col-7">
                                {!! Form::select('estado_inb', $estado, null, ['class' => 'form-select', 'required' => 'required']) !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 border-right">
                        <div class="form-group row">
                            <label for="habitado" class="col-5 col-form-label">Inmueble habitado</label>
                            <div class="col-2">
                                <a>No</a>
                            </div>
                            <div class="col-3 bool text-center">
                                <input type="checkbox" value="1" name="habitado" id="habitado" />
                                <label class="slider-v1" for="habitado"></label>
                            </div>
                            <div class="col-2">
                                <a>Si</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12  col-md-6">
                        <div class="form-group row">
                            <label for="certificado" class="col-5">Certificado de tradición del inmueble
                                <a href="#" data-toggle="modal" data-target="#modal_cert" target="_blank"> <i
                                        class="fa fa-question-circle-o"></i></a>
                            </label>
                            <div class="col-7">
                                <div class="custom-file">
                                    <input type="file" class="form-control" name="certificado" id="certificado"
                                        accept="image/*,.pdf" lang="es" required>
                                    <label class="custom-file-label" for="certificado" id="labelcert"
                                        data-browse="Cargar"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 border-right">
                        <div class="form-group  row" id="SecRemodelado">
                            <label for="remodelado" class="col-5 col-form-label">Remodelado hace menos de 5
                                años</label>
                            <div class="col-7">
                                {!! Form::select('remodelado', $remodelado, null, ['class' => 'form-select', 'id' => 'remodelado']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group row" id="sec_tuberia">
                            <label for="tuberia" class="col-5 col-form-label">Incluyó cambio de toda la
                                tubería</label>
                            <div class="col-2">
                                <a>No</a>
                            </div>
                            <div class="col-3 bool text-center">
                                <input type="checkbox" value="1" name="tuberia" id="tuberia" />
                                <label class="slider-v1" for="tuberia"></label>
                            </div>
                            <div class="col-2">
                                <a>Si</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" id="aptos2">
                    <div class="col-12 col-md-6 border-right">
                        <div class="form-group row">
                            <label for="piso" class="col-5 col-form-label">Piso en el que está el
                                inmueble</label>
                            <div class="col-7">
                                <input id="piso" name="piso" type="number" min="1" max="30" class="form-control">
                                <div class="invalid-feedback d-none" id="errorpiso">
                                    Si el piso es superior a 30, dejalo en 30 😉
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group row">
                            <label for="ascensor" class="col-5 col-form-label">Ascensor</label>
                            <div class="col-2">
                                <a>No</a>
                            </div>
                            <div class="col-3 bool text-center">
                                <input type="checkbox" name="ascensor" value="1" id="ascensor" />
                                <label class="slider-v1" for="ascensor"></label>
                            </div>
                            <div class="col-2">
                                <a>Si</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-6 col-md-2 text-start">
                    <a href="{{ route('propietario.edit', $propietario) }}" class="btn botones">Atrás</a>
                </div>
                <div class="d-none d-md-block col-md-8"></div>
                <div class="col-6 col-md-2 text-end">
                    <button type="submit" class="btn botones">Siguiente</button>
                </div>
            </div>
            {{ Form::close() }}
        </div>
    </div>
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="sentimos text-center py-3">
                        <img src="{!! asset('img/wesorry.png') !!}" class="img-fluid" alt="Lo sentimos">
                    </div>
                    Lo sentimos, no nos es posible comercializar y administrar el inmueble si no cuenta con <span
                        id="motivo"><span>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn botones" onclick="noposibles()"
                        data-bs-dismiss="modal">Volver</button>
                    <a href="https://epicainmobiliaria.com" type="button" class="btn btn-secondary">Finalizar</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts_footer')
    <script>
        var myModal = new bootstrap.Modal(document.getElementById('staticBackdrop'), {

        })
    </script>
@endsection
