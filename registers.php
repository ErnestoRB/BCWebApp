<?php 
    $user = $_GET["user"];
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
            $archivo = $user . ".txt";
            exec("python3 readFile.py users_data/$archivo", $fileArr, $retFile);
            
            if( $retFile == 0){
                $fileCont = "";
                foreach ($fileArr as $key => $line) {
                    $fileCont .= $line;
                }
                $fields = explode("|", $fileCont);
                ?>
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
                <a href='registers.php'>Regresar</a>
				</form>
            <?php
            }

        } else {
            exec("ls -1 users_data/", $archivos, $ret);
            if($ret == 0) {
                if(count($archivos) > 0) {
                    echo "<ul>";
                    foreach ($archivos as $lineNumber => $value) {
                        $usuario = str_replace('.txt', '',$value);
                        ?> 
                        <li>
                            <span><?= str_replace('_', '', $usuario) ?></span>    
                            <a href="?user=<?=$usuario?>" >Ver datos</a>
                        </li>

                        <?php
                    }
                    echo "</ul><a href='.'>Regresar</a>";
                } else {
                    ?>
                    <span>No se ha registrado nada aún</span>
                    <?php
                }
                /* foreach ($array as $line => $value) {
                    exec("python3 readFile.py $value", $fileCont, $retFile);
                    if( $retFile == 0){?>

                    
                    <?php
                    }
                } */
            } else {
                ?>
                <span>Error</span>
                <?php
            }
        }
    ?>
</body>
</html>