$(document).ready(function() {
    var valor = $('#valor').val();
    $('#valinval').html("En valores: $ " + Intl.NumberFormat("es-CO").format(valor));
    //Básico
    var basmes = new Intl.NumberFormat("es-CO").format(valor * 0.005);

    $('#basano').html("$" + basmes + "<br/><br/>Previo elaboración de promesa compraventa <br/><br/><a href='#' data-bs-toggle='modal' class='btn btn-warning btn-sm' data-bs-target='#staticBackdrop' onclick='basico()' >Ver detalles</a>");

    //ESTÁNDAR
    var estmes = new Intl.NumberFormat("es-CO").format(valor * 0.01);
    $('#estsem').html("$" + estmes + " <br/><br/>En la firma promesa compraventa<br/><br/><a href='#' class='btn btn-warning btn-sm' data-bs-toggle='modal' data-bs-target='#staticBackdrop' onclick='estandar()' >Ver detalles</a>");
    //PLUS
    var plus = new Intl.NumberFormat("es-CO").format((valor * 0.02));
    $('#plus').html("$" + plus + "<br/><br/>En la firma promesa compraventa<br/><br/><a href='#' class='btn btn-warning btn-sm' data-bs-toggle='modal' data-bs-target='#staticBackdrop' onclick='plus()' >Ver detalles</a>");

    //PREMIUM
    var premes = new Intl.NumberFormat("es-CO").format(valor * 0.03);
    $('#premes').html("$" + premes + " <br/><br/>50% firma en promesa compraventa y<br/> 50% en firma escritura<br/><br/><a href='#' class='btn btn-warning btn-sm' data-bs-toggle='modal' data-bs-target='#staticBackdrop' onclick='premium()' >Ver detalles</a>");
});

function basico() {
    var valor = $('#valor').val();
    var mensual = valor * 0.005;
    var iva = mensual * 0.19;
    var total = mensual + iva;
    var plan = "Plan Básico";
    var efectivo = "Previo elaboración de promesa compraventa";

    llenar_datos(plan, efectivo, valor, mensual, iva, total);
}

function estandar() {
    var valor = $('#valor').val();
    var mensual = valor * 0.01;
    var iva = mensual * 0.19;
    var total = mensual + iva;
    var plan = "Plan Estandar";
    var efectivo = "En la firma promesa compraventa";

    llenar_datos(plan, efectivo, valor, mensual, iva, total);
}

function plus() {
    var valor = $('#valor').val();
    var mensual = valor * 0.02;
    var iva = mensual * 0.19;
    var total = mensual + iva;
    var plan = "Plan Plus";
    var efectivo = "En la firma promesa compraventa";


    llenar_datos(plan, efectivo, valor, mensual, iva, total);

}

function premium() {
    var valor = $('#valor').val();
    var mensual = (valor * 0.03) / 2;
    var iva = mensual * 0.19;
    var total = mensual + iva;
    var plan = "Plan Premium";
    var efectivo = "firma en promesa compraventa";

    llenar_datos(plan, efectivo, valor, mensual, iva, total);
}

function llenar_datos(plan, efectivo, valor, mensual, iva, total) {

    $('#staticBackdropLabel').html(plan);
    $('#plan').html(plan);
    $('#efectivo').html(efectivo);
    $('#valormodal').html(" $" + Intl.NumberFormat("es-CO").format(valor));
    $('#val-mes').html("$" + Intl.NumberFormat("es-CO").format(mensual));
    $('#serv').html("$" + Intl.NumberFormat("es-CO").format(mensual));
    $('#iva').html("$" + Intl.NumberFormat("es-CO").format(iva));
    $('#total').html("$" + Intl.NumberFormat("es-CO").format(total));

    if (plan != "Plan Premium") {
        $('#soloplus').hide();
        $('#noplus').show();
    } else {
        $('#soloplus').show();
        $('#noplus').hide();

        $('#serv1').html("$" + Intl.NumberFormat("es-CO").format(mensual));
        $('#iva1').html("$" + Intl.NumberFormat("es-CO").format(iva));
        $('#total1').html("$" + Intl.NumberFormat("es-CO").format(total));
        $('#efectivo1').html(efectivo);

        $('#serv2').html("$" + Intl.NumberFormat("es-CO").format(mensual));
        $('#iva2').html("$" + Intl.NumberFormat("es-CO").format(iva));
        $('#total2').html("$" + Intl.NumberFormat("es-CO").format(total));
        $('#efectivo2').html("En firma escritura");

        $('#totalprem').html("$" + Intl.NumberFormat("es-CO").format(total + total));

    }
}