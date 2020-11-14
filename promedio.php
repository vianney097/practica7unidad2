<!DOCTYPE html>
<html>
 <head>
 <meta charset="UTF-8">
 <title></title>
 <link href="estilo.css" rel="stylesheet">
 </head>
 <body>
 <?php include('miplantilla/header.php');?> 
 <section class="principal">
		<div class="menuhorizontal">
			<div class="mensaje">
				<h1>Promedio de Alumno</h1>
			</div>
			<img src="lasimagenes/alumnos.jpg" alt="" width="600" height="300">
			<?php include('miplantilla/sidebar.php');?>
 <section>
 <?php
 error_reporting(0);
 $alumno=$_POST['txtAlumno'];
 $nota1=$_POST['txtNota1'];
 $nota2=$_POST['txtNota2'];
 $nota3=$_POST['txtNota3'];
 $nota4=$_POST['txtNota4'];

 $mAlumno='';
 $permitidos = '/^[A-Z üÜáéíóúÁÉÍÓÚñÑ]{1,100}$/i';
 if (!preg_match($permitidos,$alumno)
 || !is_string($alumno))
 $mAlumno='';
 $mNota1='';
 $mNota2='';
 $mNota3='';
 $mNota4='';
 ?>
 <form name="frmPromedio" method="post" action="promedio.php">
 <table width="650" border="1" cellspacing="3" cellpadding="3">
 <tr>
 <td width="80">ALUMNO</td>
 <td width="457" id="error">
 <input type="text" name="txtAlumno" size="60"
 value="<?php echo $alumno; ?>"/>
 <?php echo $mAlumno; ?>
 </td>
 </tr>
 <tr>
 <td>NOTAS</td>
 <td></td>
 </tr>
 <tr>
 <td colspan="2">
 <table width="650" border="1"
 cellspacing="2" cellpadding="2">
 <tr>
 <td width="179">Nota 1</td>
 <td width="179">
 <input type="text" name="txtNota1" size="5"
 value="<?php echo $nota1; ?>" />
 </td>
 <td width="179" id="error"><?php echo $mNota1; ?></td>
 <td width="179">Nota 2</td>
 <td width="179">
 <input type="text" name="txtNota2" size="5"
 value="<?php echo $nota2; ?>" />
 </td>
 <td width="179" id="error"><?php echo $mNota2; ?></td>
 </tr>
 <tr>
 <td>Nota 3</td>
 <td><input type="text" name="txtNota3" size="5"
 value="<?php echo $nota3; ?>" />
 </td>
 <td id="error"><?php echo $mNota3; ?></td>
 <td>Nota 4</td>
 <td><input type="text" name="txtNota4" size="5"
 value="<?php echo $nota4; ?>" />
 </td>
 <td id="error"><?php echo $mNota4; ?></td>
 </tr>
 </table>
 </td>
 </tr>
 <tr>
 <td></td>
 <td><input type="submit" value="Promediar" /></td>
 </tr>
 <?php
 $notas=array($nota1,$nota2,$nota3,$nota4);

 $mayor=max($notas);
 $menor=min($notas);

 $promedio=round(($nota1+$nota2+$nota3+$nota4-$menor)/3,0);

 if ($promedio>=60)
 $condicion='Aprobado';
 else
 $condicion='Desaprobado';
 ?>
 <tr>
 <td>Alumno</td>
 <td><?php echo $alumno; ?></td>
 </tr>
 <tr>
 <td>Promedio</td>
 <td><?php echo $promedio; ?></td>
 </tr>
 <tr>
 <td>Nota más alta</td>
 <td><?php echo $mayor; ?></td>
 </tr>
 <tr>
 <td>Nota más baja</td>
 <td><?php echo $menor; ?></td>
 </tr>
 <tr>
 <td>Condicion</td>
 <td><?php echo $condicion; ?></td>
 </tr>
 </table>
 </form>
 <br><h2>Explicación del problema</h2> <br>
	Este codigo lo hice como está en el libro pero yo modifique
	para que el rango de las calificaciones sea que si es mayor a 60
	pues aprobó, pero si es menor, reprobó.	Pero lo hice
	basandose solamente en 4 calificaciones de 4 unidades diferentes.					
</div>
 </section>
 <?php include('miplantilla/footer.php');?> 
 </body>
</html>