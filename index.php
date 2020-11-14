<!-- {PHP archivo de encabezado con include} -->
<!-- {header.php esta dentro de la carpeta miplantilla} -->
<?php include('miplantilla/header.php');?> 

	<section class="principal">
		<div class="menuhorizontal">
			<div class="mensaje">
				<h1>Bienvenidos a mi sitio web</h1>
			</div>

			<div class="articulo">
				<article>
					<img src="lasimagenes/empleados.jpg" alt="" width="300" height="200">
					<p>Problema 1: En este problema, determinaremos el pago de un empleado
					basandonos en las horas que ha trabajado y cual es su tarifa por hora,
					con esos datos sacaremos cual seria su pago.</p>
					<br/>
					<img src="lasimagenes/php.png" alt="" width="300" height="200">
					<p>Problema 2: Anlizaremos que tipo de dato es cierta variable
					con tal solo escribirla, el problema es estatico.
					</p>
					<br/>
					<img src="lasimagenes/alumno.jpg" alt="" width="300" height="200">
					<p>Problema 3: En este problema, sacaremos el promedio del alumno
					en todo el semestre basandos en 4 calificaciones de sus unidades,
					despues se le informara si aprobo o reprobo el semestre.</p>
					
				</article>
			</div>
		<!-- {El archivo siderbar.php dentro de miplantilla} -->
		<?php include('miplantilla/sidebar.php');?> 

		</div>
	</section>
	<!-- {El archivo footer.php dentro de miplantilla} -->
	<?php include('miplantilla/footer.php');?> 
</body>
</html>