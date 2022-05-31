<html>
	<?php
		$nombre=$_POST["nombre"];
		$apellidoP=$_POST["apellido1"];
		$apellidoM=$_POST["apellido2"];
		$calle=$_POST["calle"];
		$no=$_POST["interior"];
		$edad=$_POST["edad"];
		$telefono=$_POST["telefono"];
		$email=$_POST["email"];
	?>
	<head>	
   	 <title>Datos enviados</title>
		<link rel="stylesheet" href="submited.css">
  	</head>
  	<body>
  		<div class="primer_recuadro flex flex-center flex-wrap">
  			<?php
			  	$comando = "python3 process.py '$nombre|$apellidoP|$apellidoM|$calle|$no|$edad|$telefono|$email' ";
				exec($comando, $out, $ret);
				if ($ret == 0) {
  			?>
				<div class="centrar w-full"> 
				<span >
					Tus datos han sido enviados correctamente
				<span>
			  </div>
			  <a href="index.php">Regresar</a>
			  <form class="flex flex-wrap">
				<label>Nombre</label>
				<input type="text" disabled="true" value="<?= $nombre ?>">
				<label>Apellido Paterno</label>
				<input type="text" disabled="true" value="<?= $apellidoP ?>">
				<label>Apellido Materno</label>
				<input type="text" disabled="true" value="<?= $apellidoM ?>">
				<label>Calle</label>
				<input type="text" disabled="true" value="<?= $calle ?>">
				<label>#</label>
				<input type="number" disabled="true" value="<?= $no ?>">
				<label>Edad</label>
				<input type="number" disabled="true" value="<?= $edad ?>">
				<label>Telefono</label>
				<input type="tel" disabled="true" value="<?= $telefono ?>">
				<label>Email</label>
				<input type="email" disabled="true" value="<?= $email ?>">
				</form>

  		</div>
  		<?php } else { ?>
			<span class="error">Error al guardar tu información</span>
		<?php  } ?>
  	</body>
<html>
