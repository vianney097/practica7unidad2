<!-- {PHP archivo de encabezado con include} -->
<!-- {header.php esta dentro de la carpeta miplantilla} -->
<?php include('miplantilla/header.php');?> 

	<section class="principal">
		<div class="menuhorizontal">
			<div class="mensaje">
				<h1>CASA DE CAMBIO</h1>
			</div>

			<div class="articulo">
				<article>
                    <img src="lasimagenes/casacambio.jpg" alt="" width="600" height="300">
                    <br>
                    <br>
                <form name="frmMontos" method="POST" action="cambio.php">
                <table border="0" cellpadding="0"
                    cellspacing="0" align="center">
                    <tr>
                        <td width="200">Monto en soles</td>
                        <td width="200">
                        <input type="text" name="txtSoles" /></td>
                    </tr>
                    <tr>
                        <td>Monto en dólares</td>
                        <td><input type="text" name="txtDolares" /></td>
                    </tr>
                    <tr>
                        <td>Monto en marcos</td>
                        <td><input type="text" name="txtMarcos" /></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Procesar" /></td>
                        <td><input type="reset" value="Limpiar" /></td>
                    </tr>
                    <?php
                        error_reporting(0);
                        $soles=$_POST['txtSoles'];
                        $dolares=$_POST['txtDolares'];
                        $marcos=$_POST['txtMarcos'];
                        $euros=(($soles/3.51)+$dolares+($marcos/2.12))*1.09;
                    ?>
                    <tr>
                    <td>
                        Total soles<br>
                        Total dólares<br>
                        Total marcos<br>
                        Monto total en Euros
                    </td>
                    <td>
                        <?php echo "S/. ".number_format($soles, 2)."<br>";
                        echo "$ ".number_format($dolares, 2)."<br>";
                        echo number_format($marcos, 2)." DEM<br>";
                        echo number_format($euros, 2)." euros";
                    ?>
                    </td>
                    </tr>
                </table>
</form>
                <br><h2>Explicacion del problema</h2> <br>
    
               En el Primer script de php<br>
               Los datos de los valores capturados en el formulario se almacenan en las variables para las distintas para variables y posteriormente blabla
               <br>
               el siguiente script de php <br>
               Es para formatear los datos de salida blabla  

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