<?php
if(!isset($_GET["id"])){
 echo "No se pasó DNI";
}else{
 include("conexion.php");
 $enlace=conectar();
 $sql="SELECT * FROM `empleados` WHERE dniEmp=".$_GET["id"].";";
 $resultado=mysqli_query($enlace,$sql);
 if(mysqli_num_rows($resultado)==1){
 $fila=mysqli_fetch_array($resultado);
 $dni=$fila["dniEmp"];
 $nombre=$fila["nombreEmp"];
 $sexo=$fila["sexoEmp"];
 $f_n=$fila["fechaNacEmp"];
 $f_i=$fila["fechaIngEmp"];
 $salario=$fila["salarioEmp"];
 $comision=$fila["comisionEmp"];
 $cargo=$fila["cargoEmp"];
 $departamento=$fila["codDepto"];
 }else{
 echo "No se encuentra el DNI del empleado.";
 exit();
 }
 desconectar($enlace); ?>
<form action="conexion.php" method="post">
 <label>DNI: </label> <input type="text" name="dnim" id="dnim" value="<?php echo $dni; ?>"><br>
 <label>Nombre: </label> <input type="text" name="nombrem" id="nombrem" value="<?php echo
$nombre; ?>"><br>
 <label>Sexo: </label>
 <select id="sexom" name="sexom">
 <option value="F" <?php if($sexo=="F"){ echo "selected";} ?> >Femenino</option>
 <option value="M" <?php if($sexo=="M"){ echo "selected";} ?> >Masculino</option>
 </select><br>
 <label>Fecha de Nacimiento:</label><input type="date" name="fechanacm" id="fechanacm"
value="<?php echo $f_n; ?>"><br>
 <label>Fecha de Ingreso: </label> <input type="date" name="fechaingm" id="fechaingm"
value="<?php echo $f_i; ?>"><br>
 <label>Salario:</label><input type="number" step="0.01" name="salariom" id="salariom"
value="<?php echo $salario; ?>"><br>
 <label>Comisión: </label> <input type="number" step="0.01" name="comisionm" id="comisionm"
value="<?php echo $comision; ?>"><br>
12
 <label>Cargo: </label> <input type="text" name="cargom" id="cargom" value="<?php echo $cargo;
?>"><br>
 <label>Departamento: </label>
 <select id="deptom" name="deptom">
 <option value="1000" <?php if($departamento==1000){ echo "selected";} ?> >GERENCIA -
CIUDAD REAL</option>
 <option value="1500" <?php if($departamento==1500){ echo "selected";} ?> >PRODUCCION -
CIUDAD REAL</option>
 <option value="2000" <?php if($departamento==2000){ echo "selected";} ?> >VENTAS - CIUDAD
REAL</option>
 <option value="2100" <?php if($departamento==2100){ echo "selected";} ?> >VENTAS -
BARCELONA</option>
 <option value="2200" <?php if($departamento==2200){ echo "selected";} ?> >VENTAS -
VALENCIA</option>
 <option value="2300" <?php if($departamento==2300){ echo "selected";} ?> >VENTAS -
MADRID</option>
 </select><br>
 <button type="submit">Modificar</button>
</form>
<?php } ?>
