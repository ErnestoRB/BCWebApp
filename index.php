<html>
	<head>	
   	 <title>Inserta tus datos!</title>
		<link href="https://fonts.googleapis.com/css2?family=Dosis&display=swap" rel="stylesheet">
    	<link rel="stylesheet" href="style.css">	
		<script src="validation.js" defer></script>
  	</head>
	<body>
		
		<div class="primer_recuadro imagen_logo">
			<img src="https://upload.wikimedia.org/wikipedia/commons/c/ce/Logo_UAA.png"
				alt="UAA Logo" class="imagen_logo"/>	
		</div>
		
		<div class="tabla_principal">
			<div class="centrar titulo_cuadro">
				<font size=3 color="#ffffff">Por favor, llene los datos requeridos a continuación:<br></font>
			</div>
			
			<br>
			<form method="post" action="submited.php">
				<fieldset>
					<legend>Complete sus datos correctamente </legend>
					Nombre(s): <input  name="nombre" id="nombre" type="text" required>
					Apellido paterno: <input  name="apellido1" id="apellido1" type="text" required>
					Apellido materno: <input  name="apellido2" id="apellido2" type="text">
					<br><br> E-mail: <input  type="email" id="email" name="email" pattern="^\w+([\.-]?\w+)@\w+([\.-]?\w+)(\.\w{2,3})+$" required>
					Edad:
					<select id="edad" name="edad">
						<?php
							for($i=18; $i<100; $i++){
								echo "<option value='".$i."'>".$i."</option>";
							}
							
						?>
					</select>
					<br><br>
					Calle: <input  name="calle" id="calle" type="text" required>
					Interior: <input  id="interior" id="interior" name="interior" type="number" min="1" required>
					Colonia: <input  name="colonia" id="colonia" type="text" required>
					<br><br>
					Telefono: <input  type="tel" name="telefono" id="telefono" maxLength="10" pattern="^[0-9]{10}$" required>
				<div class="centrar"> 
					<br><input type="submit" value="Enviar datos">
				</fieldset>
			</form>
			<b>
			 * Campos necesarios
			</b>
			</div>
		</div>
 	</body>
</html>
