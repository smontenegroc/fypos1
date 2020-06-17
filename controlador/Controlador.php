<?php

class Controlador {
    public function verPagina($ruta) {
        require_once $ruta;
    }
    
    public function agregarProducto($prod,$desc,$pre,$cant,$prov){
        $producto = new Producto($prod, $desc, $pre, $cant, $prov);
        $gestorProducto = new GestorProducto();
        $id = $gestorProducto->addProducto($producto);
//        $result = $gestorProducto->$consultarProductoPorId($id);
        require_once 'vista/html/agregarProducto.php';
    }
    
    public function verProveedor(){
        $gestorProducto = new GestorProducto();
        $result = $gestorProducto->consultarProveedores();
        require_once 'vista/html/consultarProveedores.php';
    }
    
    public function mostrarProductos(){
        $gestorProducto = new GestorProducto();
        $result = $gestorProducto->mostrarProductos();
        require_once 'vista/html/productos.php';
    }
}
