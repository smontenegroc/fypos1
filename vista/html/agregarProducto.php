<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="vista/css/estilos.css">
        <script src="vista/jquery/jquery-3.5.1.js"  type="text/javascript"></script>
        <script src="vista/js/script.js"></script>
    </head>
    <body onload="cargarProveedores()">
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
                    <ul>
                        <li>Ingresar</li>
                        <li>Registrarse</li>
                    </ul>
                </div>
                <main> 
                    <h1>Agregar producto</h1>
                    <form action="index.php?accion=addProducto" method="post">
                        <table>
                            <tr>
                                <td>Producto</td>
                                <td><input type="text" name="producto"></td>
                            </tr>
                            <tr>
                                <td>Descripción</td>
                                <td><textarea name="descripcion"></textarea></td>
                            </tr>
                            <tr>
                                <td>Precio</td>
                                <td><input type="text" name="precio"></td>
                            </tr>
                            <tr>
                                <td>Cantidad</td>
                                <td><input type="text" name="cantidad"></td>
                            </tr>
                            <tr>
                                <td>Proveedor</td>
                                <td>
                                    <select name="proveedor" id="proveedor">
                                        <option value="-1" selected="selected">---Proveedor---</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                             <td colspan="2"><button type="submit">Enviar</button></td>
                            </tr>
                        </table>
                    </form>
                </main>
                </main>
            </div>
        </div>    
    </body>
</html>
