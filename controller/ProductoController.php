<?php
  
//require_once "view/producto_view.php";
class Funciones 
{   
    public function Mostrar()
    {
        require_once "model/ProductoModel.php";
        $producto=new ProductoModel();
        $lstProducto=$producto->getProductos("CALL ListarItem()");
        foreach ($lstProducto as $registro)
        {
           $r= "<tr><td>" . $registro["descripcion"] ."</td></tr>";
        }
    }
 
}
?>
