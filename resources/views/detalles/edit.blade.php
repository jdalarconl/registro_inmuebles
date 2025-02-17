@extends('layouts.plantilla')
@section('title', 'Consigna tu inmueble')
@section('more_head')
    <script src="{!! asset('js/condiciones_edit.js') !!}"></script>
@endsection

@section('content')
    <div class="card bg-default tarjeta shadow-lg animate__animated animate__fadeInDown" id="detalles">
        <div class="card-body">
            <div class="row seccion">
                <div class="col-12">
                    <h4>Más detalles del inmueble</h4>
                </div>
            </div>
            {{ Form::open(['method' => 'post']) }}
            <div class="row grupo seccion">
                <div class="col-12">
                    <p>Área (m<sup>2</sup>)</p>
                </div>
                <div class="col-12 col-md-4 border-right">
                    <div class="form-group row">
                        <label for="a_construida" class="col-5 col-form-label">Construida</label>
                        <div class="col-7">
                            <input id="a_construida" name="a_construida" type="number" step="0.1" min="11"
                                class="form-control" required="required" value="{{ $propiedad->a_construida }}">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 border-right">
                    <div class="form-group row">
                        <label for="a_privada" class="col-5 col-form-label">Privada</label>
                        <div class="col-7">
                            <input id="a_privada" name="a_privada" type="number" min="11" step="0.1" required="required"
                                class="form-control" value="{{ $propiedad->a_privada }}">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    @if ($tipo_inm == 1)
                        <div class="form-group row" id="s3_terreno">
                            <label for="a_terreno" class="col-5 col-form-label">De terreno</label>
                            <div class="col-7">
                                <input id="a_terreno" name="a_terreno" type="number" min="11" step="0.1"
                                    class="form-control" value="{{ $propiedad->a_terreno }}" required>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
            <div class="row grupo seccion">
                <div class="col-12">
                    <p>Cantidad de:</p>
                </div>
                <div class="col-12 col-md-3 border-right">
                    <div class="form-group row">
                        <label for="niveles" class="col-6 col-form-label">Nivel(es)</label>
                        <div class="col-6">
                            {!! Form::select('niveles', $niveles, $propiedad->nivel, ['class' => 'form-select', 'id' => 'niveles', 'required' => 'required']) !!}
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 border-right">
                    <div class="form-group row">
                        <label for="n_hab" class="col-6 col-form-label">Habitación(es) <br />
                            <span>(Sin incluir servicio)<span>
                        </label>
                        <div class="col-6">
                            {!! Form::select('n_hab', $num_hab, $propiedad->n_hab, ['class' => 'form-select', 'id' => 'n_hab', 'required' => 'required']) !!}
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 border-right">
                    <div class="form-group row">
                        <label for="no_banos" class="col-6 col-form-label">Baño(s)<br />
                            <span>(Sin incluir servicio o social)<span>
                        </label>
                        <div class="col-6">
                            {!! Form::select('no_banos', $num_banos, $propiedad->n_banos, ['class' => 'form-select', 'id' => 'no_banos', 'required' => 'required']) !!}
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="form-group row">
                        <label for="no_garajes" class="col-6 col-form-label">Garaje(s)</label>
                        <div class="col-6">
                            {!! Form::select('no_garajes', $garajes, $propiedad->no_garajes, ['class' => 'form-select', 'id' => 'no_garajes', 'required' => 'required']) !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row grupo seccion">
                <div class="col-12">
                    <p>Material del piso en:</p>
                </div>
                <div class="col-12 col-md-3 border-right">
                    <div class="form-group row">
                        <label for="material_hab" class="col-6 col-form-label">Habitación(es)</label>
                        <div class="col-6">
                            {!! Form::select('material_hab', $mat_habitaciones, $propiedad->mat_habitacion, ['class' => 'form-select', 'required' => 'required']) !!}
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 border-right">
                    <div class="form-group row">
                        <label for="mp_cocina" class="col-6 col-form-label">Cocina</label>
                        <div class="col-6">
                            {!! Form::select('mp_cocina', $mat_cocina, $propiedad->mat_piso_cocina, ['class' => 'form-select', 'required' => 'required']) !!}
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 border-right">
                    <div class="form-group row">
                        <label for="mat_piso_bano" class="col-6 col-form-label">Baño(s)</label>
                        <div class="col-6">
                            {!! Form::select('mat_piso_bano', $mat_bano, $propiedad->mat_piso_bano, ['class' => 'form-select', 'required' => 'required']) !!}
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 ">
                    <div class="form-group row">
                        <label for="mat_piso_zona_social" class="col-6 col-form-label">Zona
                            social</label>
                        <div class="col-6">
                            {!! Form::select('mat_piso_zona_social', $mat_zsocial, $propiedad->mat_piso_zsocial, ['class' => 'form-select', 'required' => 'required']) !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row grupo seccion">
                <div class="col-12">
                    <p>Carcteristicas internas inmueble:</p>
                </div>
                <div class="row">
                    <div class="col-12 col-md-4 border-right">
                        <div class="form-group row">
                            <label for="mb_cocina" class="col-6 col-form-label">Mobiliario cocina</label>
                            <div class="col-6">
                                {!! Form::select('mb_cocina', $mb_cocina, $propiedad->mb_cocina, ['class' => 'form-select', 'required' => 'required']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 border-right">
                        <div class="form-group row">
                            <label for="estufa" class="col-6 col-form-label">Estufa</label>
                            <div class="col-6">
                                {!! Form::select('estufa', $estufa, $propiedad->tipo_estufa, ['class' => 'form-select', 'required' => 'required']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group row">
                            <label for="horno" class="col-6 col-form-label">Horno</label>
                            <div class="col-6">
                                {!! Form::select('horno', $horno, $propiedad->tipo_horno, ['class' => 'form-select', 'required' => 'required']) !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-4 border-right">
                        <div class="form-group row">
                            <label for="tp_cocina" class="col-6 col-form-label">Tipo de cocina</label>
                            <div class="col-6">
                                {!! Form::select('tp_cocina', $tipo_cocina, $propiedad->tipo_cocina, ['class' => 'form-select', 'required' => 'required']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 border-right">
                        <div class="form-group row">
                            <label for="calentador" class="col-6 col-form-label">Calentador</label>
                            <div class="col-6">
                                {!! Form::select('calentador', $calentador, $propiedad->tipo_calentador, ['class' => 'form-select', 'required' => 'required']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group row">
                            <label for="vista" class="col-6 col-form-label">Vista</label>
                            <div class="col-6">
                                {!! Form::select('vista', $vista, $propiedad->tipo_vista, ['class' => 'form-select', 'required' => 'required']) !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-4 border-right">
                        <div class="form-group row">
                            <label for="zona_social" class="col-6 col-form-label">Zona social</label>
                            <div class="col-6">
                                {!! Form::select('zona_social', $zonas, $propiedad->zona_social, ['class' => 'form-select', 'required' => 'required']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 border-right">
                        <div class="form-group row">
                            <label for="material_fachada" class="col-6 col-form-label">Material
                                fachada</label>
                            <div class="col-6">
                                {!! Form::select('material_fachada', $mat_fachada, $propiedad->material_fachada, ['class' => 'form-select', 'required' => 'required']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="d-none d-md-block col-md-4"></div>
                </div>
                <div class="row seccion">
                    <div class="col-12 col-md-4 border-right">
                        <div class="form-group row">
                            <label for="terraza" class="col-5 col-form-label">Terraza</label>
                            <div class="col-2">
                                <a>No</a>
                            </div>
                            <div class="col-3 bool text-center">
                                @if ($propiedad->terraza == 'Si')
                                    <input type="checkbox" value="1" name="terraza" id="terraza" checked />
                                @else
                                    <input type="checkbox" value="1" name="terraza" id="terraza" />
                                @endif
                                <label class="slider-v1" for="terraza"></label>
                            </div>
                            <div class="col-2">
                                <a>Si</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 border-right">
                        <div class="form-group row">
                            <label for="chimenea" class="col-5 col-form-label">Chimenea</label>
                            <div class="col-2">
                                <a>No</a>
                            </div>
                            <div class="col-3 bool text-center">
                                @if ($propiedad->chimenea == 'Si')
                                    <input type="checkbox" id="chimenea" name="chimenea" value="1" checked />
                                @else
                                    <input type="checkbox" id="chimenea" name="chimenea" value="1" />
                                @endif

                                <label class="slider-v1" for="chimenea"></label>
                            </div>
                            <div class="col-2">
                                <a>Si</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group row">
                            <label for="balcon" class="col-5 col-form-label">Balcón</label>
                            <div class="col-2">
                                <a>No</a>
                            </div>
                            <div class="col-3 bool text-center">
                                @if ($propiedad->balcon == 'Si')
                                    <input type="checkbox" value="1" name="balcon" id="balcon" checked />
                                @else
                                    <input type="checkbox" value="1" name="balcon" id="balcon" />
                                @endif
                                <label class="slider-v1" for="balcon"></label>
                            </div>
                            <div class="col-2">
                                <a>Si</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-4 border-right">
                        <div class="form-group row">
                            <label for="b_servicio" class="col-5 col-form-label">Baño servicio</label>
                            <div class="col-2">
                                <a>No</a>
                            </div>
                            <div class="col-3 bool text-center">
                                @if ($propiedad->b_servicio == 'Si')
                                    <input type="checkbox" value="1" name="b_servicio" id="b_servicio" checked />
                                @else
                                    <input type="checkbox" value="1" name="b_servicio" id="b_servicio" />
                                @endif

                                <label class="slider-v1" for="b_servicio"></label>
                            </div>
                            <div class="col-2">
                                <a>Si</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 border-right">
                        <div class="form-group row">
                            <label for="b_social" class="col-5 col-form-label">Baño social</label>
                            <div class="col-2">
                                <a>No</a>
                            </div>
                            <div class="col-3 bool text-center">
                                @if ($propiedad->b_social == 'Si')
                                    <input type="checkbox" value="1" name="b_social" id="b_social" checked />
                                @else
                                    <input type="checkbox" value="1" name="b_social" id="b_social" />
                                @endif
                                <label class="slider-v1" for="b_social"></label>
                            </div>
                            <div class="col-2">
                                <a>Si</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group row">
                            <label for="estudio" class="col-5 col-form-label">Estudio</label>
                            <div class="col-2">
                                <a>No</a>
                            </div>
                            <div class="col-3 bool text-center">
                                @if ($propiedad->estudio == 'Si')
                                    <input type="checkbox" value="1" name="estudio" id="estudio" checked />
                                @else
                                    <input type="checkbox" value="1" name="estudio" id="estudio" />
                                @endif

                                <label class="slider-v1" for="estudio"></label>
                            </div>
                            <div class="col-2">
                                <a>Si</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-4 border-right">
                        <div class="form-group row">
                            <label for="deposito" class="col-5 col-form-label">Depósito</label>
                            <div class="col-2">
                                <a>No</a>
                            </div>
                            <div class="col-3 bool text-center">
                                @if ($propiedad->deposito == 'Si')
                                    <input type="checkbox" value="1" id="deposito" name="deposito" checked />
                                @else
                                    <input type="checkbox" value="1" id="deposito" name="deposito" />
                                @endif
                                <label class="slider-v1" for="deposito"></label>
                            </div>
                            <div class="col-2">
                                <a>Si</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 border-right">
                        <div class="form-group row">
                            <label for="hab_servicio" class="col-5 col-form-label">Habitación de
                                servicio</label>
                            <div class="col-2">
                                <a>No</a>
                            </div>
                            <div class="col-3 bool text-center">
                                @if ($propiedad->hab_servicio == 'Si')
                                    <input type="checkbox" value="1" id="hab_servicio" name="hab_servicio" checked />
                                @else
                                    <input type="checkbox" value="1" id="hab_servicio" name="hab_servicio" />
                                @endif
                                <label class="slider-v1" for="hab_servicio"></label>
                            </div>
                            <div class="col-2">
                                <a>Si</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group row ">
                            <label for="star" class="col-5 col-form-label">Star de
                                entretenimiento</label>
                            <div class="col-2">
                                <a>No</a>
                            </div>
                            <div class="col-3 bool text-center">
                                @if ($propiedad->star == 'Si')
                                    <input type="checkbox" value="1" id="star" name="star" checked />
                                @else
                                    <input type="checkbox" value="1" id="star" name="star" />
                                @endif
                                <label class="slider-v1" for="star"></label>
                            </div>
                            <div class="col-2">
                                <a>Si</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-4 border-right">
                        <div class="form-group row">
                            <label for="zona_lavanderia" class="col-5 col-form-label">Zona de
                                lavandería</label>
                            <div class="col-2">
                                <a>No</a>
                            </div>
                            <div class="col-3 bool text-center">
                                @if ($propiedad->zona_lavanderia == 'Si')
                                    <input type="checkbox" value="1" id="zona_lavanderia" name="zona_lavanderia" checked />
                                @else
                                    <input type="checkbox" value="1" id="zona_lavanderia" name="zona_lavanderia" />
                                @endif

                                <label class="slider-v1" for="zona_lavanderia"></label>
                            </div>
                            <div class="col-2">
                                <a>Si</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 border-right">
                        <div class="form-group row" id="cortina">
                            <label for="entrega_cortinas" class="col-5 col-form-label">
                                Entrega con cortinas</label>
                            <div class="col-2">
                                <a>No</a>
                            </div>
                            <div class="col-3 bool text-center">
                                @if ($propiedad->entrega_cortinas == 'Si')
                                    <input type="checkbox" value="1" name="entrega_cortinas" id="entrega_cortinas"
                                        checked />
                                @else
                                    <input type="checkbox" value="1" name="entrega_cortinas" id="entrega_cortinas" />
                                @endif
                                <label class="slider-v1" for="entrega_cortinas"></label>
                            </div>
                            <div class="col-2">
                                <a>Si</a>
                            </div>
                        </div>


                    </div>
                    <div class="col-12 col-md-4 ">
                        @if ($tipo_inm == 1)
                            <div class="form-group row">
                                <label for="patio" class="col-5 col-form-label">Patio interior</label>
                                <div class="col-2">
                                    <a>No</a>
                                </div>
                                <div class="col-3 bool text-center">
                                    @if ($propiedad->patio == 'Si')
                                        <input type="checkbox" value="1" id="patio" name="patio" checked />
                                    @else
                                        <input type="checkbox" value="1" id="patio" name="patio" />
                                    @endif
                                    <label class="slider-v1" for="patio"></label>
                                </div>
                                <div class="col-2">
                                    <a>Si</a>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 ">
                    <div class="form-group row">
                        <label for="piscina_p" class="col-5 col-form-label">Piscina privada</label>
                        <div class="col-2">
                            <a>No</a>
                        </div>
                        <div class="col-3 bool text-center">
                            @if ($propiedad->piscina_privada == 'Si')
                                <input type="checkbox" value="1" id="piscina_p" name="piscina_p" checked />
                            @else
                                <input type="checkbox" value="1" id="piscina_p" name="piscina_p" />
                            @endif
                            <label class="slider-v1" for="piscina_p"></label>
                        </div>
                        <div class="col-2">
                            <a>Si</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 ">
                    <div class="form-group row">
                        <label for="sauna_p" class="col-5 col-form-label">Sauna privado</label>
                        <div class="col-2">
                            <a>No</a>
                        </div>
                        <div class="col-3 bool text-center">
                            @if ($propiedad->sauna_privada == 'Si')
                                <input type="checkbox" value="1" id="sauna_p" name="sauna_p" checked />
                            @else
                                <input type="checkbox" value="1" id="sauna_p" name="sauna_p" />
                            @endif
                            <label class="slider-v1" for="sauna_p"></label>
                        </div>
                        <div class="col-2">
                            <a>Si</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 ">
                    <div class="form-group row">
                        <label for="turco_p" class="col-5 col-form-label">Turco privado</label>
                        <div class="col-2">
                            <a>No</a>
                        </div>
                        <div class="col-3 bool text-center">
                            @if ($propiedad->turco_privado == 'Si')
                                <input type="checkbox" value="1" id="turco_p" name="turco_p" checked />
                            @else
                                <input type="checkbox" value="1" id="turco_p" name="turco_p" />
                            @endif
                            <label class="slider-v1" for="turco_p"></label>
                        </div>
                        <div class="col-2">
                            <a>Si</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 ">
                    <div class="form-group row">
                        <label for="jacuzzi_p" class="col-5 col-form-label">Jacuzzi privado</label>
                        <div class="col-2">
                            <a>No</a>
                        </div>
                        <div class="col-3 bool text-center">
                            @if ($propiedad->jacuzzi_privado == 'Si')
                                <input type="checkbox" value="1" id="jacuzzi_p" name="jacuzzi_p" checked />
                            @else
                                <input type="checkbox" value="1" id="jacuzzi_p" name="jacuzzi_p" />
                            @endif
                            <label class="slider-v1" for="jacuzzi_p"></label>
                        </div>
                        <div class="col-2">
                            <a>Si</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 ">
                    <div class="form-group row">
                        <label for="tina_p" class="col-5 col-form-label">Tina privada</label>
                        <div class="col-2">
                            <a>No</a>
                        </div>
                        <div class="col-3 bool text-center">
                            @if ($propiedad->tina_privada == 'Si')
                                <input type="checkbox" value="1" id="tina_p" name="tina_p" checked />
                            @else
                                <input type="checkbox" value="1" id="tina_p" name="tina_p" />
                            @endif
                            <label class="slider-v1" for="tina_p"></label>
                        </div>
                        <div class="col-2">
                            <a>Si</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 ">
                    <div class="form-group row">
                        <label for="aire_p" class="col-5 col-form-label">Aire acondicionado privado</label>
                        <div class="col-2">
                            <a>No</a>
                        </div>
                        <div class="col-3 bool text-center">
                            @if ($propiedad->aire_privado == 'Si')
                                <input type="checkbox" value="1" id="aire_p" name="aire_p" checked />
                            @else
                                <input type="checkbox" value="1" id="aire_p" name="aire_p" />
                            @endif

                            <label class="slider-v1" for="aire_p"></label>
                        </div>
                        <div class="col-2">
                            <a>Si</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 ">
                    <div class="form-group row">
                        <label for="calefaccion_p" class="col-5 col-form-label">Calefacción privada</label>
                        <div class="col-2">
                            <a>No</a>
                        </div>
                        <div class="col-3 bool text-center">
                            @if ($propiedad->calefaccion_p == 'Si')
                                <input type="checkbox" value="1" id="calefaccion_p" name="calefaccion_p" checked />
                            @else
                                <input type="checkbox" value="1" id="calefaccion_p" name="calefaccion_p" />
                            @endif

                            <label class="slider-v1" for="calefaccion_p"></label>
                        </div>
                        <div class="col-2">
                            <a>Si</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row grupo seccion" id="sec_garajes">
                <div class="col-12">
                    <p>Garaje(s):</p>
                </div>
                <div class="col-12 col-md-4 border-right">
                    <div class="form-group row">
                        <label for="garaje_i" class="col-5 col-form-label">Garaje(s)
                            independientes</label>
                        <div class="col-2">
                            <a>No</a>
                        </div>
                        <div class="col-3 bool text-center">
                            @if ($propiedad->garaje_i == 'Si')
                                <input type="checkbox" value="1" id="garaje_i" name="garaje_i" checked />
                            @else
                                <input type="checkbox" value="1" id="garaje_i" name="garaje_i" />
                            @endif
                            <label class="slider-v1" for="garaje_i"></label>
                        </div>
                        <div class="col-2">
                            <a>Si</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 border-right">
                    <div class="form-group row">
                        <label for="garaje_c" class="col-5 col-form-label">Garaje(s)
                            Cubiertos</label>
                        <div class="col-2">
                            <a>No</a>
                        </div>
                        <div class="col-3 bool text-center">
                            @if ($propiedad->garaje_c == 'Si')
                                <input type="checkbox" value="1" name="garaje_c" id="garaje_c" checked />
                            @else
                                <input type="checkbox" value="1" name="garaje_c" id="garaje_c" />
                            @endif

                            <label class="slider-v1" for="garaje_c"></label>
                        </div>
                        <div class="col-2">
                            <a>Si</a>
                        </div>
                    </div>
                </div>
                <div class="d-none d-md-block col-md-4">

                </div>
            </div>
            <div class="row">
                <div class="col-6 col-md-2 text-left">
                    <a href="{{ route('negocio.edit', $propiedad) }}" class="btn botones">Atrás</a>
                </div>
                <div class="d-none d-md-block col-md-8">

                </div>
                <div class="col-6 col-md-2 text-end">
                    <button type="submit" id="enviar3" class="btn botones ">Siguiente</button>
                </div>
            </div>
            {{ Form::close() }}
        </div>
    </div>
@endsection
