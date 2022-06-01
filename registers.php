<?php 
    $user = $_GET["user"];
    var_dump($user);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios registrados</title>
</head>
<body>
    <?php 
        if($user != NULL) {
            echo $user;
            $archivo = $user . ".txt";
            exec("python3 readFile.py '$value'", $fileCont, $retFile);
            $fields = preg_split("|", $fileCont);
            if( $retFile == 0){?>
                <form class="flex flex-wrap">
				<label>Nombre</label>
				<input type="text" disabled="true" value="<?= $fields[0] ?>">
				<label>Apellido Paterno</label>
				<input type="text" disabled="true" value="<?= $fields[1] ?>">
				<label>Apellido Materno</label>
				<input type="text" disabled="true" value="<?= $fields[2] ?>">
				<label>Calle</label>
				<input type="text" disabled="true" value="<?= $fields[3] ?>">
				<label>#</label>
				<input type="number" disabled="true" value="<?= $fields[4] ?>">
				<label>Edad</label>
				<input type="number" disabled="true" value="<?= $fields[5] ?>">
				<label>Telefono</label>
				<input type="tel" disabled="true" value="<?= $fields[6] ?>">
				<label>Email</label>
				<input type="email" disabled="true" value="<?= $fields[7] ?>">
				</form>
            <?php
            }

        } else {
            exec("ls -1 users_data/", $archivos, $ret);
            if($ret == 0) {
                foreach ($archivos as $lineNumber => $value) {
                    $usuario = str_replace('.txt', '',$value);
                    ?> 
                    <div>
                    <span><?= str_replace('_', '', $usuario) ?></span>    
                    <a href="?user=<?=$usuario?>" >Ver datos</a>
                    <div>

                    <?php
                }
                /* foreach ($array as $line => $value) {
                    exec("python3 readFile.py $value", $fileCont, $retFile);
                    if( $retFile == 0){?>

                    
                    <?php
                    }
                } */
            }
        }
    ?>
</body>
</html>