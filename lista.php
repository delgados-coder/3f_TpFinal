<?php
   echo  "<h4 class='text-white text-center m-4'>ELIMINAR MOVIMIENTOS</h4>
    <table class='text-center text-white'>
    <tr class='bg-dark'>
        <th> ID MOVIMIENTO </th>
        <th> FECHA </th>
        <th> TIPO </th>
        <th> DESCRIPCIÓN </th>
        <th> MONTO </th>
        <th> FORMA DE PAGO </th>
        <th> ID FAMILIA </th>
        <th> ACCIÓN </th>
    </tr>";   
                include('conexion.php');
                conectarBD();
                $consulta = "SELECT * FROM `movimientos`;";
                $resultado = mysqli_query($conexion, $consulta);
                $cantidadFilas = mysqli_num_rows($resultado);
                $indiceFila = 1; // Variable para llevar el seguimiento del índice de fila
                while ($fila = mysqli_fetch_assoc($resultado)) {
                    $fechaOriginal = $fila['fecha'];
                    $fechaFormateada = date("d/m/y", strtotime($fechaOriginal));
                    $ultimoDigitoAño = substr($fechaFormateada, -2);
                    // Alternar clases de Bootstrap para el estilo de las filas
                    $filaClase = $indiceFila % 2 == 0 ? "bg-success" : ""; // Aplicar clase "bg-dark" en filas pares
                    echo "<tr class='$filaClase'>
                    <td class='p-3'>" . $fila['id_mov'] . "</td>
                    <td class='bordesTable p-1'>" .  $fechaFormateada . "</td>
                    <td class='bordesTable p-1'>" . $fila['tipo'] . "</td>
                    <td class='bordesTable p-1'>" . $fila['descripcion'] . "</td>
                    <td class='bordesTable p-1'>" . $fila['monto'] . "</td>
                    <td class='bordesTable p-1'>" . $fila['forma_de_pago'] . "</td>
                    <td class='bordesTable p-1'>" . $fila['id_familia'] . "</td>
                    <td class='bordesTable p-1'><a href='eliminar.php?id_mov=" . $fila['id_mov'] . "' class='btn btn-light'>ELIMINAR</a></td>
                  </tr>";
            
                    $indiceFila++; // Incrementar el índice de fila
                }
           echo "</table>";
            