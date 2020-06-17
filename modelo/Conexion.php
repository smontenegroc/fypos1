<?php

class Conexion {
    private $mySQLI;
    private $sql;
    private $result;
    private $filasAfectadas;
    private $productoId;
    
    public function open(){
        $this->mySQLI = new mysqli("localhost","root","","dbfypos");
        if(mysqli_connect_error()){
            return 0;
        }
        else{
            return 1;
        }
    }
    
    public function close(){
        $this->mySQLI->close();
    }
    
    public function query($sql) {
        $this->sql = $sql;
        $this->result = $this->mySQLI->query($this->sql);
        $this->filasAfectadas = $this->mySQLI->affected_rows;
        $this->productoId = $this->mySQLI->insert_id;
    }
    public function getResult() {
        return $this->result;
    }
    
    public function getFilasAfectadas(){
        return $this->filasAfectadas;
    }
    
    public function getProductoId(){
        return $this->productoId;
    }
}
