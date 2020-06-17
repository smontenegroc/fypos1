<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <option value="-1" selected="selected">---Proveedor---</option>
        <?php
            while($fila = $result->fetch_object()){
        ?>
    <option value=<?php echo $fila->provId;?>><?php echo $fila->provNombre;?></option>
            <?php } ?>
    </body>
</html>
