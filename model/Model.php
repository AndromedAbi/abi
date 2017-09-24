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
    public function getListar($sql)
    {
        $consultar=$this->db->query($sql);      
        $i=0;  
        while ($row = $consultar->fetch(PDO::FETCH_BOTH))//por index o nombre //
        {
            $this->table[$i]=$row;
            $i++;
        }
        return $this->table;
    }
    public function EjecutarSP($sql)
    {        
             
    }   
}
 ?>
