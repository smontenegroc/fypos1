<?php
    //require_once 'vista/html/plantilla.php';
    require_once 'controlador/Controlador.php';
    require_once 'modelo/Conexion.php';
    require_once 'modelo/GestorProducto.php';
    require_once 'modelo/Producto.php';
    $controlador = new Controlador();
?>
<!DOCTYPE html>

<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            if(isset($_GET["accion"])){
//                var_dump($_GET);
//                        exit();
                switch ($_GET["accion"]){
                    
                    case "agregarProducto":
                            $controlador->verPagina('vista/html/agregarProducto.php');
                        break;
                    case "listarProductos":
                            $controlador->mostrarProductos();
                        break;
                    
                    case "addProducto":
                        $controlador->agregarProducto($_POST["producto"],
                                $_POST["descripcion"],
                                $_POST["precio"],
                                $_POST["cantidad"],
                                $_POST["proveedor"]
                                );
                        break;
                    case "consultarProveedores":
                            $controlador->verProveedor();
                        break;
                    case "mostarProductos":
                            $controlador->mostrarProductos();
                        break;
                    
                }
            }
            else{
                $controlador->verPagina('vista/html/inicio.php');
            }
        ?>
    </body>
</html>
