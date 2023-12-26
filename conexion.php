<?php
function conectarBD(){
    global $conexion; // Usar la variable global dentro de la función
    $host = "localhost";
    $user = "root";
    $pass = "";
    $bd = "db_movimientos";
    $conexion = mysqli_connect($host,$user,$pass,$bd);
    if($conexion){
        return "conexión a la base de datos realizada con éxito, fue posible realizarla";
    }else{
        $error = mysqli_error($conexion);
        echo "Error en la conexión a la base de datos, no fue posible realizarla" . $error;
        return exit();
    }
}
function desconectarBD(){
    global $conexion; // Usar la variable global dentro de la función
    mysqli_close($conexion);
    return "Conexión a la BD finalizada con éxito ";
}
//recibo el formularito de alta y la hago
if(isset($_POST["tipo"])){
    conectarBD();
    $fecha=$_POST["fecha"];
    $tipo=$_POST["tipo"];
    $descripcion=$_POST["descripcion"];
    $monto=$_POST["monto"];
    $idFamilia=$_POST["idFamilia"];
    $formaDePago=$_POST["formaDePago"];
    $consulta = "INSERT INTO `movimientos` (`id_mov`, `fecha`, `tipo`, `descripcion`, `monto`, `forma_de_pago`, `id_familia`) VALUES (NULL, '$fecha', '$tipo',' $descripcion', '$monto', '$formaDePago', '$idFamilia');";
    $resultado = mysqli_query($conexion,$consulta);
    desconectarBD();
    if($resultado){
    echo "Alta exitosa.";
    }else{
    echo "Ocurrió un error. No se pudo dar de alta el registro.";
    }
   }