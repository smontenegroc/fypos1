<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="vista/css/estilos.css">
        <script src="vista/jquery/jquery-ui-1.12.1/jquery-ui.js"  type="text/javascript"></script>
        <script src="vista/jquery/jquery-ui-1.12.1/jquery-ui.min.js"  type="text/javascript"></script>
        <link href="vista/jquery/jquery-ui-1.12.1/jquery-ui.min.css"  rel="stylesheet" type="text/css"/>
        <script src="vista/js/script.js"></script>
    </head>
    <body>
        <div class="contenedor">
            <aside>
                <p>FYPOS</p>
                <nav>
                    <ul>
                        <li><a href="index.php">Inicio</a></li>
                        <li><a href="index.php?accion=listarProductos">Productos</a></li>
                        <li><a href="index.php?accion=listarProductos">Provedores</a></li>
                    </ul>
                </nav>
            </aside>
            <div class="content">
                <div class="panel-top">
                    <p>SergioMontenegro</p>
                </div>
                <main>
                     <h1>Listado de productos</h1>
                    <?php if($result->num_rows> 0){?>
                    <table class="tbProductos">                
                        <tr>
                            <th>Id</th><th>Producto</th><th>Descripción</th><th>Precio</th><th>Cantidad</th>                  
                        </tr>
                        <?php while($fila = $result->fetch_object()){?>
                        <tr>
                            <td><?php echo $fila->proId;?></td>
                            <td><?php echo $fila->proNombre;?></td>
                            <td><?php echo $fila->proDescripcion;?></td>
                            <td><?php echo $fila->proPrecio;?></td>
                            <td><?php echo $fila->proCantidad;?></td>
                            <td><input type="radio" name="radio"></td>
                            <!--<td><input type="button" value="Actualizar"></td>-->
                        </tr>
                        <?php }?>
                    </table>
                    <?php }?>
                     <div class="buttons">
                         <a href="index.php?accion=agregarProducto">Agregar Producto</a>
                        <input type="button" value="Actualizar">
                        <input type="button" value="Eliminar">
                     </div>
                     
                </main>
            </div>
        </div>    
    </body>
</html>
