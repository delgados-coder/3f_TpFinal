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

//función para actualizar
function actualizar(){
    global $conexion; // Usar la variable global dentro de la función
    if(isset($_POST["tipo"])){
        conectarBD();
        $id_mov = $_POST["id_mov"];
        $fecha1=$_POST["fecha"];
        $tipo1=$_POST["tipo"];
        $descripcion1=trim($_POST["descripcion"]);
        $monto1=$_POST["monto"];
        $idFamilia1=$_POST["idFamilia"];
        $formaDePago1=$_POST["formaDePago"];
        $consulta1 = "UPDATE `movimientos` SET `fecha`= '$fecha1', `tipo`= '$tipo1', `descripcion`= '$descripcion1', `monto`= '$monto1', `forma_de_pago`= '$formaDePago1', `id_familia`= '$idFamilia1' WHERE id_mov = $id_mov";
        $resultado1 = mysqli_query($conexion,$consulta1);
        desconectarBD();
        if($resultado1){
        echo "modicación exitosa.";
        //header('location:operaciónExitosa.php');
        }else{
        echo "Ocurrió un error. No se pudo modificar el registro.";
        }
       }
}
actualizar();
