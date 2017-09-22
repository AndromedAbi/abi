<?php
  
require_once "view/producto_view.php";
class Funciones 
{   
    public function Mostrar($nomsp)
    {
        require_once "model/ProductoModel.php";
        $producto=new ProductoModel();
        $lstProducto=$producto->getProductos($nomsp);
        foreach ($lstProducto as $registro)
        {
           echo "<tr><td>" . $registro["descripcion"] ."</td></tr>";
        }
    }
 
}
?>
