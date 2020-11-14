<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
 <link href="estilo.css" rel="stylesheet">
 <title>Pago de empleados</title>
</head>
<body>
<?php include('miplantilla/header.php');?>
<div class="menuhorizontal">
			<div class="mensaje">
				<h1>Pago de Empleados</h1>
			</div>
            <img src="lasimagenes/empleados.png" alt="" width="600" height="300">
			<?php include('miplantilla/sidebar.php');?>
 <section>
 <form name="frmPago" method="POST">
 <table border="0" cellpading="0"
 cellspacing="0" align="center">
 <tr>
 <td width="200">Empleado</td>
 <td><input type="text" name="txtEmpleado"size="70"/></td>
 </tr>
 <tr>
 <td>Horas trabajadas</td>
 <td><input type="text" name="txtHoras" /></td>
 </tr>
 <tr>
 <td>Tarifa por hora</td>
 <td><input type="text" name="txtTarifa" /></td>
 </tr>
 <tr>
 <td></td>
 <td><input type="submit" value="Procesar" />
 <input type="reset" value="Limpiar" />
 </td>
 </tr>
 <?php
 error_reporting(0);
 $empleado=$_POST['txtEmpleado'];
 $horas=$_POST['txtHoras'];
 $tarifa=$_POST['txtTarifa'];

 $sueldoBruto=$horas*$tarifa;
 $descuentoEssalud=$sueldoBruto*0.12;
 $descuentoAFP=$sueldoBruto*0.10;

 $sueldoNeto=$sueldoBruto-$descuentoEssalud-$descuentoAFP;
 ?>
 <tr>
 <td>Empleado</td>
 <td><?php echo $empleado; ?></td>
 </tr>
 <tr>
 <td>Horas trabajadas</td>
 <td><?php echo $horas; ?></td>
 </tr>
 <tr>
 <td>Tarifa por hora</td>
 <td><?php echo "$ ".number_format($tarifa,2); ?></td>
 </tr>
 <tr>
 <td>Sueldo Bruto</td>
 <td><?php echo "$ ".number_format($sueldoBruto,2); ?></td>
 </tr>
 <tr>
 <td>Descuento ESSALUD</td>
 <td><?php echo "$ "
 .number_format($descuentoEssalud,2); ?>
 </td>
 </tr>
 <tr>
 <td>Descuento AFP</td>
 <td><?php echo "$ ".number_format($descuentoAFP,2);?></td>
 </tr>
 <tr>
 <td>Sueldo Neto</td>
 <td><?php echo "$ ".number_format($sueldoNeto,2);?></td>
 </tr>
 </table>
 </form>
 <br><h2>Explicación del problema</h2> <br>
	Con este codigo se podra saber cual es el sueldo de un empleado
	con tal solo saber las horas trabajadas de la persona y cual
	es su tarifa por hora, despues se le descuenta los impuestos
	y le dice su resultado.
 </div>
 </section>
 <?php include('miplantilla/footer.php');?> 
 </body>
</html>