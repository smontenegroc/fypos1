<?php

class GestorProducto {
    public function addProducto(Producto $producto){
        $conexion = new Conexion();
        $conexion->open();
        $proNombre = $producto->getProducto();
        $descripcion = $producto->getDescripcion();
        $precio = $producto->getPrecio();
        $cantidad = $producto->getCantidad();
        $proveedor = $producto->getProveedor();
        
        $sql = "insert into producto (proNombre,proDescripcion,proPrecio,proCantidad,provId ) 
                values ('$proNombre','$descripcion',$precio,$cantidad,$proveedor)";
        $conexion->query($sql);
        $conexion->close(); 
        
    }
    
//    public function consultarProductoPorId($id) {
//        $conexion = new Conexion();
//        $conexion->open();
//        
//    }
    
    public function consultarProveedores(){
        $conexion = new Conexion();
        $conexion->open();
        $sql = "SELECT provId,provNombre FROM proveedor";
        $conexion->query($sql);
        $result = $conexion->getResult();
        $conexion->close();
        return $result;
    }
    
    public function mostrarProductos(){
        $conexion = new Conexion();
        $conexion->open();
        $sql = "select proId,proNombre,proDescripcion,proPrecio,proCantidad from producto";
        $conexion->query($sql);
        $result = $conexion->getResult();
        $conexion->close();
        return $result;
    }
}
