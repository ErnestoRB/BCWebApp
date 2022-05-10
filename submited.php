html>
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
  		
  		.centrar{
  			text-align: center;
  		}
  	</style>
  	</head>
  	<body>
  		<div class="primer_recuadro centrar">
  			Tus datos han sido enviados correctamente<br><br>
  			<form action="main_index.php"><input type="submit" value="Regresar"> </form>
  			<?php
  				echo $nombre."|".$apellidoP."|".$apellidoM."|".$calle."|".$no."|".$edad."|".$telefono."|".$email;
  			?>
  		</div>
  		
  	</body>
<html>
