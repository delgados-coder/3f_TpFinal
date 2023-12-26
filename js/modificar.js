

function funcionJS (id_mov, fechaFormateada, tipo, descripcion, monto, forma_de_pago, id_familia) {
    console.log("ID Movimiento:", id_mov);
    console.log("Fecha Formateada:", fechaFormateada);
    console.log("Tipo:", tipo);
    console.log("Descripción:", descripcion);
    console.log("Monto:", monto);
    console.log("Forma de Pago:", forma_de_pago);
    console.log("ID Familia:", id_familia);
    document.getElementById('campoIdmov').value = id_mov;
    var partesFecha = fechaFormateada.split('/');
    var dia = partesFecha[0];
    var mes = partesFecha[1];
    var year = partesFecha[2];

    console.log(20+year);
    var fecha2 = 20+year + '-' + mes + '-' + dia;
    document.getElementById('fecha').value = fecha2;
    document.getElementById('tipo').value = tipo;
    document.getElementById('descripcion').value = descripcion;
    document.getElementById('monto').value = monto;
    document.getElementById('formaDePago').value = forma_de_pago;
    document.getElementById('idFamilia').value = id_familia;
}
console.log("hola estoy cargado y soy modificar.js");
console.log("CODIGO JS-CARGADO");
  