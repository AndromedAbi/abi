<?php
class Model
{
    private $db;
    private $table;

    public function __construct()
    {
        require_once "model/conex.php";
        $this->db=Conexion::Conectar();
        $this->table=array();
    }
    public function getProductos($sql)
    {
        $consultar=$this->db->query($sql);
        while ($row = $consultar->fetch(PDO::FETCH_ASSOC))
        {
            $this->table[]=$row;
        }
        return $this->table;
    }
    public function EjecutarSP()
    {

        echo "holiiiiis";
    }

}
 ?>
