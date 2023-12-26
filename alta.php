<?php
echo "<h4 class='text-white text-center m-4'>ALTA DE MOVIMIENTOS</h4>
<form action='conexion.php' method='POST' class='formularioAlta mt-2 mb-2'>
<div class='separarElementosAlta mt-2'>
 <label for='fecha' class='text-white'>Fecha: </label> <input type='date' name='fecha' id='fecha'><br>
</div>
<div class='separarElementosAlta mt-2'>
       <label for='tipo' class='text-white'>Tipo: </label> 
<select name='tipo' id='tipo'>
<option value='ingreso'>Ingreso</option>   
<option value='egreso'>Egreso</option>    
</select><br>
</div>
<div class='separarElementosAlta mt-2'>
       <label for='descripcion' class='text-white'>Descripción: </label> 
<select name='descripcion' id='descripcion'>
<option value='Pago de impuestos'>Pago de impuestos</option>   
<option value='Gastos en educación'>Gastos en educación</option> 
<option value='Pago de cuota de viaje'>Pago de cuota de viaje</option>  
<option value='Cobro de sueldo'>Cobro de sueldo</option> 
<option value='Pago cuota colegio'>Pago cuota colegio</option> 
<option value='Gastos en vestimenta'>Gastos en vestimenta</option> 
<option value='Gastos en hogar'>Gastos en hogar</option> 
<option value='Compra de Mercadería'>Compra de Mercadería</option> 
<option value='Cobro de Jubilación'>Cobro de Jubilación</option> 
<option value='Cobro de Beca'>Cobro de Beca</option> 
<option value='Gastos en Automóvil'>Gastos en Automóvil</option> 
<option value='Gastos en entretenimientos'>Gastos en entretenimientos</option> 
<option value='Cobro de trabajo profesional'>Cobro de trabajo profesional</option> 
<option value='Compra de materiales de construcción'>Compra de materiales de construcción</option> 
</select><br>
</div>
<div class='separarElementosAlta mt-2'>
 <label for='monto' class='text-white'>Monto: </label><input type='number' name='monto' id='monto'>
<br>
</div>
<div class='separarElementosAlta mt-2'>
 <label for='idFamilia' class='text-white'>Familia: </label><select name='idFamilia' id='idFamilia'>
 <option value='1'>Damian Suarez</option>   
 <option value='2'>Julia Zambrano</option>    
 <option value='3'>Alberto Suarez</option>  
 <option value='4'>Julia Suarez</option>  
 <option value='5'>Delia Fernández</option>  
 </select><br>     
</div>
<div class='separarElementosAlta mt-2'>
       <label for='formaDePago' class='text-white'>Forma de pago: </label> 
<select name='formaDePago' id='formaDePago'>
<option value='efectivo'>Efectivo</option>   
<option value='cheque'>Cheque</option>    
<option value='tarjeta de crédito'>Tarjeta de crédito</option>  
<option value='transferencia bancaria'>Transferencia bancaria</option>  
</select><br>
</div>
<br>
<div class='text-center'>
<input type='submit' value='Dar el alta'>
<input type='reset' value='Resetear'>
</div>
</form>
<br><br><br><br><br><br>
";
?>