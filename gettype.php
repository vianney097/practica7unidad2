<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link href="estilo.css" rel="stylesheet">
<title>Tipos de Datos PHP</title>
</head>
    <body>
    <?php include('miplantilla/header.php');?>
    
    <section class="principal">
		<div class="menuhorizontal">
			<div class="mensaje">
				<h1>Tipo de datos PHP</h1>
			</div>

    <?php include('miplantilla/sidebar.php');?>
    <img src="lasimagenes/php.png" alt="" width="600" height="300">
    <?php
//Declaración y asignación de variable
$nombre='Vianney Arellano';
$sueldo=3050.78;
$edad=35;
$fechaNac='1979-10-10';
$objTel=new stdClass();
$países = array('Perú','Venezuela','Paraguay','Colombia');
//Impresión de tipos de datos
echo '<br>';
echo '$nombre es de tipo: '.gettype($nombre).'<br>';
echo '$sueldo es de tipo: '.gettype($sueldo).'<br>';
echo '$edad es de tipo: '.gettype($edad).'<br>';
echo '$fechaNac es de tipo: '.gettype($fechaNac).'<br>';
echo '$objTel es de tipo: '.gettype($objTel).'<br>';
echo '$países es de tipo: '.gettype($países).'<br>';
?>
    <br><h2>Explicación del problema</h2> <br>
    Primero que nada, este codigo nos permite saber que tipo de dato estamos utilizando
    dependiendo del dato que nosotros coloquemos, es decir, si escribimos algun texto,
    nos dira que es de tipo string, si es algun numero, nos dira que es de tipo numerico y
    nos dira que tipo de numerico es. El codigo trabaja con varias variables para poder identificar
    si el dato es de alguna forma.
        </div>
    </section>
    <?php include('miplantilla/footer.php');?>
 </body>
</html>