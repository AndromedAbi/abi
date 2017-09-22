<?php
class ProductoModel
{
    private $db;
    private $table;

    public function __construct()
    {
        require_once "model/conex.php";
        $this->db=Conexion::Conectar();
        $this->table=array();
    }
    public function getProductos()
    {
        $consultar=$this->db->query("CALL listar()");
        while ($row = $consultar->fetch(PDO::FETCH_ASSOC))
        {
            $this->table[]=$row;
        }
        return $this->table;
    }

}
 ?>
