<?php
  echo "<h4 class='text-white text-center m-4'>MODIFICAR MOVIMIENTOS</h4>";
?>
 <form action='actualizar.php' method='POST' class='modificarMovimientos mt-2 mb-4' id="formularioActualizar">
  <div class='separarElementosAlta mt-2'>
   <label for='fecha' class='text-white'>Fecha: </label> <input type='date' name='fecha' id='fecha'>
   <label for='tipo' class='text-white'>Tipo: </label> 
   <select name='tipo' id='tipo'>
   <option value='ingreso'>Ingreso</option>   
   <option value='egreso'>Egreso</option>    
   </select>
   <label for='descripcion' class='text-white'>Descripción: </label> 
   <select name='descripcion' id='descripcion'>
   <option value='Pago de impuestos'>Pago de impuestos</option>   
   <option value='Gastos en educación'>Gastos en educación</option> 
   <option value=' Pago de cuota de viaje'>Pago de cuota de viaje</option>  
   <option value='Cobro de sueldo'>Cobro de sueldo</option> 
   <option value='Pago cuota colegio'>Pago cuota colegio</option> 
   <option value='Gastos en vestimenta'>Gastos en vestimenta</option> 
   <option value='Gastos en hogar'>Gastos en hogar</option> 
   <option value='Compra de Mercadería'>Compra de Mercadería</option> 
   <option value='Cobro de Jubilación'>Cobro de Jubilación</option> 
   <option value='Cobro de Beca'>Cobro de Beca</option> 
   <option value='Gastos en Automóvil'>Gastos en Automóvil</option> 
   <option value='Gastos en entretenimiento'>Gastos en entretenimientos</option> 
   <option value='Cobro de trabajo profesional'>Cobro de trabajo profesional</option> 
   <option value='Compra de materiales de construcción'>Compra de materiales de construcción</option> 
   </select>
   </div>
  <div class='separarElementosAlta mt-2'>
   <label for='monto' class='text-white'>Monto: </label><input type='number' name='monto' id='monto'>
   <label for='idFamilia' class='text-white'>Familia: </label><select name='idFamilia' id='idFamilia'>
   <option value='1'>Damian Suarez</option>   
   <option value='2'>Julia Zambrano</option>    
   <option value='3'>Alberto Suarez</option>  
   <option value='4'>Julia Suarez</option>  
   <option value='5'>Delia Fernández</option>  
   </select>
   <label for='formaDePago' class='text-white'>Forma pago: </label> 
  <select name='formaDePago' id='formaDePago'>
  <option value='efectivo'>Efectivo</option>   
  <option value='cheque'>Cheque</option>    
  <option value='tarjeta de crédito'>Tarjeta de crédito</option>  
  <option value='transferencia bancaria'>Transferencia bancaria</option>  
  </select>
   </div>
   <div class="separarElementosAlta">
    <label for="campoIdmov">id_mov</label> <input type="number" id="campoIdmov" name="id_mov">
   </div>
   <div class='text-center mt-1'>  
  <input type='submit' value='Modificar el registro'>
  <input type='reset' value='Resetear'>
  </div>
  </form>
  <?php
   echo "<table class='text-center text-white'>
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
                    <td class='bordesTable p-1'>" . $fila['id_familia'] . "</td>";      
                    echo '<td class="bordesTable p-1"><a href="#" data-id-mov="' . $fila['id_mov'] . '" data-fecha="' . $fechaFormateada . '" data-tipo="' . $fila['tipo'] . '" data-descripcion="' . $fila['descripcion'] . '" data-monto="' . $fila['monto'] . '" data-forma-pago="' . $fila['forma_de_pago'] . '" data-id-familia="' . $fila['id_familia'] . '" class="btn btn-light btn-seleccionar" onclick="funcionJS(\'' . $fila['id_mov'] . '\',\'' . $fechaFormateada . '\',\'' . $fila['tipo'] . '\',\'' . $fila['descripcion'] . '\',\'' . $fila['monto'] . '\',\'' . $fila['forma_de_pago'] . '\',\'' . $fila['id_familia'] . '\');">SELECCIONAR</a></td>';
                    echo"</tr>";
                    $indiceFila++; // Incrementar el índice de fila
                }
           echo "</table>";
           ?>
<script>
console.log("CODIGO JS-CARGADO");
    function funcionJS (id_mov, fechaFormateada, tipo, descripcion, monto, forma_de_pago, id_familia) {
        console.log("ID Movimiento:", id_mov);
        console.log("Fecha Formateada:", fechaFormateada);
        console.log("Tipo:", tipo);
        console.log("Descripción:", descripcion);
        console.log("Monto:", monto);
        console.log("Forma de Pago:", forma_de_pago);
        console.log("ID Familia:", id_familia);
    }
</script>