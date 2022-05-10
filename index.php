<html>
	<head>	
   	 <title>Inserta tus datos!</title>
    		<style type="text/css" media="screen">

  		body, html {
  			background: linear-gradient(45deg, royalblue, navy, indigo, purple);
  			height: 900px;
    			font-family: Tahoma, fantasy;
    			font-size: 10pt;
  			}
  			
  		div.primer_recuadro{
  			position: relative;
    			top: 20px; left: 45px;
    			
    			border-radius: 20px;
  			
  			width: 1230px;
  			background-color: #ffffff;
  			padding: 1em;
  		}
  			
  		div.tabla_principal {
    			position: relative;
    			top: 90px;
    			display: table;

    			width: 1200px;
    		
    			margin-bottom: 3px;
    			margin-left: auto;
    			margin-right: auto;
    			padding: 10px 30px 10px 30px;
    			border-radius: 20px;

    			background-color: #ffffff;
    			text-align: left;
  		}
  		
  		div.titulo_cuadro {
  			position: relative;
    			
    			border-radius: 20px;
    			
    			width: 1200px;
  			background: linear-gradient(45deg, royalblue, purple);
  			padding: 1em;	
  		}
  		
  		.imagen_logo{
  			position: relative;
  			left: 30px;
  			float: left;
    			width: 192px;
    			height: 90px;
  		}
  		
  		.centrar {
  			text-align: center;
  		}
  		
 		 </style>
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
					<legend> Complete sus datos correctamente </legend>
					Nombre(s): <input name="nombre" type="text">
					Apellido paterno: <input name="apellido1" type="text">
					Apellido materno: <input name="apellido2" type="text">
					<br><br> e-mail: <input type="email" id="email" name="email">
					Edad:
					<select id="edad" name="edad">
						<?php
							for($i=18; $i<100; $i++){
								echo "<option value='".$i."'>".$i."</option>";
							}
							
						?>
					</select>
					<br><br>
					Calle: <input name="calle" type="text">
					Interior: <input id="interior" name="interior" type="number">
					Colonia: <input name="colonia" type="text">
					<br><br>
					Telefono: <input id="telefono" name="telefono" type="number">
					
			<div class="centrar"> 
					<br><input type="submit" value="Enviar datos">
				</fieldset>
			</form>
			</div>
		</div>
 	</body>
</html>
