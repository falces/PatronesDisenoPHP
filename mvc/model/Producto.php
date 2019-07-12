<?php
class Producto extends EntidadBase{
    private $id;
    private $nombre;
    private $precio;
    private $marca;
    
    public function __construct($adapter) {
        $table="productos";
        parent::__construct($table,$adapter);
    }
    
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }
    
    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function setPrecio($precio) {
        $this->precio = $precio;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function setMarca($marca) {
        $this->marca = $marca;
    }

    public function save(){
        $query="INSERT INTO productos (id,nombre,precio,marca)
                VALUES(NULL,
                       '".$this->nombre."',
                       '".$this->precio."',
                       '".$this->marca."');";
        $save=$this->db()->query($query);
        //$this->db()->error;
        return $save;
    }

}
?>