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
    //=====================================================================================
    //=== Funtion para Insert,Update,Delete llamando SP 24/09/2017=========================
    //=====================================================================================
    public function EjecutarSP($sql)
    {        
        $data=$this->db->prepare($sql);     
        $data->execute(); 
          
    }
}
 ?>
