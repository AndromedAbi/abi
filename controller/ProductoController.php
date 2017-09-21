<?php
require_once "model/producto_model.php";
$producto=new ProductoModel();
$lstProducto=$producto->getProductos();

require_once "view/producto_view.php";


?>
