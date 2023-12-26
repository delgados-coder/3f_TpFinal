<?php
include("conexion.php");
if (isset($_GET["id_mov"])) {
    conectarBD();
    $dato = $_GET["id_mov"];
    $consulta = "DELETE FROM `movimientos` WHERE `movimientos`.`id_mov` = $dato";
    $resultado = mysqli_query($conexion, $consulta);
    if ($resultado) {
        echo "<div id='mensaje-emergente' class='mensaje'>
       <div class='mensaje-contenido'>
                <i class='fas fa-thumbs-up'></i>
              <p>Operación exitosaaaa</p>
       </div>
        </div>";
    } else {
        // Manejar el caso cuando  no se pudo eliminar el registro.
        echo "Error, algo negativo ocurrió en la operación de eliminar registros.";
    }
} else {
    echo "";
    exit();
}
desconectarBD();








