@extends('layouts.plantilla')
@section('title', 'Consigna tu inmueble')
@section('more_head')
    <script src="{!! asset('js/condiciones_edit.js') !!}"></script>
@endsection


@section('content')
    <div class="card bg-default tarjeta animate__animated animate__fadeIn" id="propietario">
        <div class="card-body">
            {{ Form::open(['method' => 'post']) }}
            <div class="row seccion">
                <div class="col-12">
                    <div class="row seccion">
                        <div class="col-12">
                            <h4>Datos personales del solicitante</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6 border-right">
                            <div class="form-group row">
                                <label for="text" class="col-5 col-form-label">Apellidos</label>
                                <div class="col-7">
                                    <input id="text" name="lastname" type="text" class="form-control"
                                        value="{{ $propietario->lastname }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group row">
                                <label class="col-5 col-form-label" for="name">Nombres</label>
                                <div class="col-7">
                                    <input id="name" name="name" type="text" class="form-control"
                                        value="{{ $propietario->name }}" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-group row">
                                <label for="phone" class="col-5 col-form-label">Teléfono celular</label>
                                <div class="col-7">
                                    <input id="phone" name="phone" type="tel" value="{{ $propietario->phone }}"
                                        class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 border-right">
                            <div class="form-group row">
                                <label for="email" class="col-5 col-form-label">E-mail</label>
                                <div class="col-7">
                                    <input id="email" name="email" type="email" value="{{ $propietario->email }}"
                                        class="form-control" disabled required>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-12 my-3 text-left">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="tyc" name="tyc" checked required>
                                <label class="form-check-label tyc" for="tyc">
                                    Acepto <a
                                        href="http://www.epicainmobiliaria.com.co/politica-de-privacidad-y-proteccion-de-datos-personales/"
                                        data-toggle="modal" data-target="#exampleModal" target="_blank">términos y
                                        condiciones </a>
                                    del servicio de registro de inmuebles y/o concepto de precio y viabilidad jurídica,
                                    ademas acepto recibir comunicaciones de Épica Inmobiliaria<sup>&reg;</sup> de
                                    acuerdo con su <a
                                        href="http://epicainmobiliaria.com/politica-de-privacidad-y-proteccion-de-datos-personales/"
                                        target="_blank">política de privacidad </a>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2 col-md-10"></div>
                        <input type="text" id="countrycode" class="d-none">
                        <div class="col-6 col-md-2 text-end">
                            <button type="submit" class="btn botones">Siguiente</button>
                        </div>
                    </div>
                </div>
            </div>
            {{ Form::close() }}
        </div>
    </div>
    <script src="{!! asset('js/tel/intlTelInput.js') !!}"></script>
    <script>
        var input = document.querySelector("#phone");
        window.intlTelInput(input, {
            // allowDropdown: false,
            // autoHideDialCode: false,
            autoPlaceholder: "aggressive",
            // dropdownContainer: document.body,
            // excludeCountries: ["us"],
            // formatOnDisplay: false,
            // geoIpLookup: function(callback) {
            //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
            //     var countryCode = (resp && resp.country) ? resp.country : "";
            //     callback(countryCode);
            //   });
            // },
            // hiddenInput: "full_number",
            initialCountry: "co",
            // localizedCountries: { 'de': 'Deutschland' },
            nationalMode: false,
            // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
            placeholderNumberType: "MOBILE",
            preferredCountries: ['co', 'us'],
            // separateDialCode: true,
            utilsScript: "js/tel/utils.js",
        });
    </script>
@endsection
