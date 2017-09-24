<?php
  
require_once "view/Item.php";
class Funciones 
{   
    public function Mostrar($nomsp)
    {
        require_once "model/Model.php";
        $producto=new Model();
        $lstProducto=$producto->getProductos($nomsp);
        foreach ($lstProducto as $registro)
        {
           echo "<tr><td>" . $registro["descripcion"] ."</td></tr>";
        }
    }
 
}
?>
