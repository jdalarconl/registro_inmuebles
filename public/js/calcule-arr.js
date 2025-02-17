$(document).ready(function() {
    var valor = $('#valor').val();
    $('#valinval').html("En valores: $ " + Intl.NumberFormat("es-CO").format(valor));

    //Básico
    var basico = valor * 0.05;
    $('#basano').html("$" + Intl.NumberFormat("es-CO").format(basico) + " <br/><a class='btn btn-outline-warning' href='#' data-bs-toggle='modal' data-bs-target='#staticBackdrop' onclick='basico()' ><i class='fas fa-info-circle'></i> Ver detalles</a><br/><br/> Por mes una <br/>vez el inmueble se arriende <br/>incluida póliza");

    //ESTÁNDAR
    var estandar = valor * 0.08;
    $('#estsem').html("$" + Intl.NumberFormat("es-CO").format(estandar) + "<br/><br/>8% + IVA al mes<br/>una vez el inmueble se arriende<br/>incluida póliza<br/> <br/> <a href='#' class='btn btn-warning btn-sm' data-bs-toggle='modal' data-bs-target='#staticBackdrop' onclick='estandar()' >Ver detalles</a>");

    //PLUS
    var plus = valor * 0.1;
    $('#plus').html("$" + Intl.NumberFormat("es-CO").format(plus) + " <br/><br/> 10% + IVA al mes<br/>una vez el inmueble se arriende<br/>incluida póliza<br/> <br/><a href='#' class='btn btn-warning btn-sm' data-bs-toggle='modal' data-bs-target='#staticBackdrop' onclick='plus()' >Ver detalles</a>");

    //PREMIUM
    var premes = new Intl.NumberFormat("es-CO").format(valor * 0.12);
    $('#premes').html("$" + premes + " <br/><br/> 12% + IVA al mes<br/>vez el inmueble se arriende<br/>incluida póliza<br/><br/><a href='#' data-bs-toggle='modal' class='btn btn-warning btn-sm' data-bs-target='#staticBackdrop' onclick='premium()' >Ver detalles</a>");

});

function estandar() {
    var valor = $('#valor').val();
    var mensual = valor * 0.08;
    var meses = 1;
    var subtotal = mensual * meses;
    var IVA = subtotal * 0.19;
    var cpm = valor * 0.004;
    var total = subtotal + IVA + cpm;
    var plan = "Plan Básico";
    var efectivo = "cada mes";
    var servicios = valor * 0.0584;
    var poliza = valor * 0.0216;

    llenar_datos(plan, meses, efectivo, valor, mensual, subtotal, IVA, cpm, total, servicios, poliza);
    tabla(meses, valor, total);
}

function plus() {
    var valor = $('#valor').val();
    var mensual = valor * 0.1;
    var meses = 1;
    var subtotal = mensual * meses;
    var IVA = subtotal * 0.19;
    var cpm = valor * 0.004;
    var total = subtotal + IVA + cpm;
    var plan = "Plan Estándar";
    var efectivo = "cada mes";
    var servicios = valor * 0.0784;
    var poliza = valor * 0.0216;

    llenar_datos(plan, meses, efectivo, valor, mensual, subtotal, IVA, cpm, total, servicios, poliza);
    tabla(meses, valor, total);
}

function premium() {
    var valor = $('#valor').val();
    var mensual = valor * 0.12;
    var meses = 1;
    var subtotal = mensual * meses;
    var IVA = subtotal * 0.19;
    var cpm = valor * 0.004;
    var total = subtotal + IVA + cpm;
    var plan = "Plan Premium";
    var efectivo = "cada mes";
    var servicios = valor * 0.0984;
    var poliza = valor * 0.0216;

    llenar_datos(plan, meses, efectivo, valor, mensual, subtotal, IVA, cpm, total, servicios, poliza);
    tabla(meses, valor, total);
}

function llenar_datos(plan, meses, efectivo, valor, mensual, subtotal, IVA, cpm, total, servicios, poliza) {

    $('#staticBackdropLabel').html(plan);
    $('#plan').html(plan);
    $('#poliza').html(" $" + Intl.NumberFormat("es-CO").format(poliza));
    $('#efectivo').html(efectivo);
    $('#valormodal').html(" $" + Intl.NumberFormat("es-CO").format(valor));
    $('#val-mes').html("$" + Intl.NumberFormat("es-CO").format(mensual));
    $('#serv').html("$" + Intl.NumberFormat("es-CO").format(servicios));
    $('#subtotal').html("$" + Intl.NumberFormat("es-CO").format(subtotal));
    $('#iva').html("$" + Intl.NumberFormat("es-CO").format(IVA));
    $('#cpm').html("$" + Intl.NumberFormat("es-CO").format(cpm));
    $('#total').html("$" + Intl.NumberFormat("es-CO").format(total));

}


function tabla(meses, valor, total) {
    var tabla = document.getElementById('basico_tabla');
    for (var i = 1; i <= 12; i++) {
        var hilera = document.createElement("tr");
        for (var j = 0; j <= 2; j++) {
            var celda = document.createElement("td");
            switch (j) {
                case 0:
                    var textoCelda = document.createTextNode(i);
                    celda.appendChild(textoCelda);
                    break
                case 1:
                    var textoCelda = document.createTextNode("$ " + Intl.NumberFormat("es-CO").format(total));
                    celda.appendChild(textoCelda);
                    break
                case 2:
                    var textoCelda = document.createTextNode("$ " + Intl.NumberFormat("es-CO").format((valor - total)) + " *");
                    celda.appendChild(textoCelda);
                    break
            }
            hilera.appendChild(celda);
        }
        tabla.append(hilera);
    }

}

function limpiar_tabla() {
    var tabla = document.getElementById('basico_tabla');
    $("#basico_tabla tr").remove();
}