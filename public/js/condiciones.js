$(document).ready(function() {



    $('#descuento').hide();
    $('#admonhelper').hide();
    var year = (new Date).getFullYear();

    $('select').prepend('<option selected disabled></option>');

    if ($('#propietario').length) {

        $(".usuario i").css("color", "#01303c");
        $(".usuario .progress-bar").css("background-color", "#01303c");

    } else if ($('#negocio_tarjeta').length) {

        $(".usuario i, .negocio i").css("color", "#01303c");
        $(".usuario .progress-bar, .negocio .progress-bar").css("background-color", "#01303c");

        $('#detalles').hide();
        $('#SecRemodelado').hide();
        $('#sec_tuberia').hide();
        $('#aptos2').hide();

        $('#espropietario').change(function() {
            if ($('#espropietario').prop('checked')) {
                $('#pqsolicita').removeAttr('required');
                $('#pqgrupo').hide();
            } else {
                $('#pqsolicita').attr("required", "true");
                $('#pqgrupo').show();
            }
        });

        $('#conjunto').change(function() {
            if ($('#conjunto').prop('checked')) {
                $('#detalles').show();
                $('#direccion_comp').attr("required", "true");
                $('#iconjunto').show();
                $('#conjunto_bar').show();
            } else {
                $('#direccion_comp').removeAttr('required');
                $('#detalles').hide();
                $('#iconjunto').hide();
                $('#conjunto_bar').hide();
            }
        });

        $('#tipo_inm').change(function() {
            if ($('#tipo_inm').val() == 2) {
                $('#aptos2').show();
                $('#piso').attr("required", "true");
            }
            if ($('#tipo_inm').val() == 1) {
                $('#piso').removeAttr('required');
                $('#aptos2').hide();
            }
        });

        $('#negocio').change(function() {
            if ($('#negocio').val() == 2) {
                $('#cortina').show();
                $('#admonhelper').show();
                $('#valorlabel').html("¿Cu&aacute;l valor le vas a asignar al inmueble en arriendo?");
            }
            if ($('#negocio').val() == 1) {
                $('#cortina').show();
                $('#valorlabel').html("¿Cu&aacute;l valor le vas a asignar al inmueble en venta?");
                $('#admonhelper').hide();
            }
            if ($('#negocio').val() == 3) {
                $('#cortina').hide();
                $('#admonhelper').hide();
            }
        });

        $('#valor').keyup(function() {
            var valor = $('#valor').val();
            $('#valorpesos').html("$ " + Intl.NumberFormat("es-CO").format(valor));
        });

        $('#tiempo_inm').change(function() {
            if ($('#tiempo_inm').val() <= (year - 5) && $('#tiempo_inm').val() > 0) {
                $('#SecRemodelado').show();
                $('#remodelado').attr("required", "true");
            } else {
                $('#SecRemodelado').hide();
                $('#remodelado').removeAttr('required');
            }
        });

        $('#remodelado').change(function() {
            console.log($('#remodelado').val());
            if ($('#remodelado').val() == 1) {
                $('#sec_tuberia').show();
            } else {
                $('#sec_tuberia').hide();
                $('#tuberia').prop("checked", false);
            }
        });

    } else if ($('#detalles').length) {

        $('#sec_garajes').hide();
        $(".usuario i, .negocio i, .detalles i").css("color", "#01303c");
        $(".usuario .progress-bar, .negocio .progress-bar, .detalles .progress-bar").css("background-color", "#01303c");

    } else if ($('#conjunto_tarjeta').length) {

        $(".usuario i, .negocio i, .detalles i, .conjunto i").css("color", "#01303c");
        $(".usuario .progress-bar, .negocio .progress-bar, .detalles .progress-bar, .conjunto .progress-bar").css("background-color", "#01303c");

        $('#no_garajes').change(function() {
            if ($('#no_garajes').val() > 2) {
                $('#sec_garajes').show();
            } else {
                $('#sec_garajes').hide();
            }
        });

        $('#t_cuota').change(function() {
            if ($('#t_cuota').val() == 2) {
                $('#descuento').show();
                console.log("ya");
                $('#adm_cd').attr("required", "true");

            } else {
                $('#descuento').hide();
                $('#adm_cd').val("");
                $('#adm_cd').removeAttr('required');
            }
        });

        $('#adm_cp').keyup(function() {
            var valor = $('#adm_cp').val();
            $('#adm_cp_pesos').html("$ " + Intl.NumberFormat("es-CO").format(valor));
        });

        $('#adm_cd').keyup(function() {
            var valor = $('#adm_cd').val();
            $('#adm_cd_pesos').html("$ " + Intl.NumberFormat("es-CO").format(valor));
        });


    } else if ($('#fotos').length) {

        $(".usuario i, .negocio i, .detalles i, .conjunto i,.camara i").css("color", "#01303c");
        $(".usuario .progress-bar, .negocio .progress-bar, .detalles .progress-bar, .conjunto .progress-bar, .camara .progress-bar").css("background-color", "#01303c");
    } else if ($('#planes_tarjeta').length) {
        $(".usuario i, .negocio i, .detalles i, .conjunto i,.camara i, .planes i").css("color", "#01303c");
        $(".usuario .progress-bar, .negocio .progress-bar, .detalles .progress-bar, .conjunto .progress-bar, .camara .progress-bar").css("background-color", "#01303c");


    }
});