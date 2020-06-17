<?php

class Producto {
    private $producto;
    private $descripcion;
    private $precio;
    private $cantidad;
    private $estado;
    private $proveedor;
    
    public function __construct($prod,$desc,$pre,$cant,$prov) {
        $this->producto = $prod;
        $this->descripcion = $desc;
        $this->precio = $pre;
        $this->cantidad = $cant;
        $this->proveedor = $prov;
    }
    
    public function getProducto(){
        return $this->producto;
    }
    
    public function getDescripcion(){
        return $this->descripcion;
    }
    
    public function getPrecio(){
        return $this->precio;
    }
    
    public function getCantidad(){
        return $this->cantidad;
    }
    
    public function getEstado(){
        return $this->estado;
    }
    
    public function getProveedor(){
        return $this->proveedor;
    }
    
}
