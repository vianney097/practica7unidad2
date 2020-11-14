<!-- {PHP archivo de encabezado con include} -->
<!-- {header.php esta dentro de la carpeta miplantilla} -->
<?php include('miplantilla/header.php');?> 

	<section class="principal">
		<div class="menuhorizontal">
			<div class="mensaje">
				<h1>Venta de entradas al Teatro usando condicional múltiple con switch</h1>
			</div>

			<div class="articulo">
				<article>
                <img src="lasimagenes/elteatro.jpg" alt="" width="400" height="300">
                <br>
                <br>
                <?php
                    error_reporting(0);
                    $comprador=$_POST['txtComprador'];
                    $fecha=$_POST['txtFecha'];
                    $nAdultos=$_POST['txtAdultos'];
                    $nNiños=$_POST['txtNiños'];
                    $hoy=getdate(time());
                    $nDia=$hoy['weekday'];
                    switch($nDia){
                        case 'Monday': $cAdultos=10; $cNiños=5;break;
                        case 'Tuesday': $cAdultos=8; $cNiños=4;break;
                        case 'Wednesday':
                        case 'Thursday':
                        case 'Friday': $cAdultos=16; $cNiños=8;break;
                        case 'Saturday':
                        case 'Sunday': $cAdultos=50; $cNiños=45;break;
                        default : $cAdultos=0; $cNiños=0;
                    }
                    $adultos=$cAdultos*$nAdultos;
                    $niños=$cNiños*$nNiños;
                ?>
<form name="frmTeatro" method="POST">
    <table border="0" width="600" cellspacing="0"
        cellpadding="0" align="center">
            <tr>
            <td>Comprador</td>
            <td><input type="text" name="txtComprador" size="60"/></td>
        </tr>
        <tr>
            <td>Fecha actual</td>
            <td><input type="text" name="txtFecha" readonly="true"
            value="<?php echo date('d/m/Y'); ?>" />
            </td>
        </tr>
        <tr>
            <td>N° entradas adultos</td>
            <td><input type="text" name="txtAdultos" />
            </td>
        </tr>
        <tr>
            <td>N° entradas niños</td>
            <td><input type="text" name="txtNiños" />
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Adquirir"
            name="btnAdquirir"/></td>
        </tr>
    </table>
        <?php if (isset($_POST['txtComprador'])){ ?>
    <table width="600" border="1" cellspacing="0" cellpadding="0">
        <tr><td>
        <table border="0" width="600" cellspacing="0"
        cellpadding="0" align="center">
        <tr>
            <td width="150">Comprador</td>
            <td width="350"><?php echo $comprador; ?></td>
        </tr>
        <tr>
            <td>Costo por adultos</td>
            <td>
            <?php echo '$ '.number_format($adultos,2,'.','');?>
            </td>
        </tr>
        <tr>
            <td>Costo por niños</td>
            <td><?php echo '$ '.number_format($niños,2,'.',''); ?></td>
        </tr>
            <tr>
            <td>Dia de promoción</td>
            <td><?php echo $nDia; ?></td>
        </tr>
        <tr>
            <td>Monto total a pagar</td>
            <td>
            <?php echo '$'.number_format($adultos+$niños,2,'.','');?>
            </td>
        </tr>
        </table>
        </td></tr>
    </table>
    <?php } ?>
</form>
    <br><h2>Explicacion del problema para calcular salario</h2> <br>
					<p>Descripcion de problema 1 BLA BLa</p>
					<br/>
					<p>Descripcion de problema 2 BLA BLa
					</p>
					<br/>
					<p>Descripcion de problema 3 BLA BLa</p>

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