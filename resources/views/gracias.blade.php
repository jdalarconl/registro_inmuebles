@extends('layouts.plantilla')
@section('title', 'Gracias')

@section('content')
    <div class="card bg-default tarjeta animate__animated animate__fadeIn" id="agradecimiento">
        <div class="card-body">
            <div id="agradecpvj" class="col-12">
                <div class="row">
                    <div class="col-12">
                        @if ($cpvj)
                            <p>Gracias por el registro de tu inmueble, al hacer clic en el botón “ir a pago” podrás culminar
                                el
                                proceso con el pago </p>
                            <p>Si tu pago fue realizado satisfactoriamente, en 24 horas de días hábiles recibirás el
                                resultado
                                en tu correo electrónico.</p>
                        @else
                            <p>Gracias por el registro de tu inmueble, al hacer clic en el botón “finalizar” habrás
                                culminado este proceso. </p>
                            <p>En el menor tiempo posible una persona de nuestro equipo te contactará para llevar a cabo la
                                firma electrónica del contrato de consignación y posterior inicio de la gestión comercial de
                                tu inmueble.
                            </p>
                        @endif

                    </div>
                </div>
                <div class="row">
                    <div class="col-6 col-md-10"></div>
                    <div class="col-6 col-md-2 text-end">
                        @if ($cpvj)
                            <a class="btn botones" id="final" href="https://biz.payulatam.com/L0cd0b2075FC5DF">Ir a
                                pago</a>
                        @else
                            <a class="btn botones" id="final" href="https://epicainmobiliaria.com/">Finalizar</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
