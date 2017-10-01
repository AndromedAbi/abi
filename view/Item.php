<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <?php
    require_once "controller/Controller.php";
    $fun = new Funciones();
    
    ?>  
    <title></title>
  </head>
  <body> 
  <?php   
  $fun->Mostrar("CALL listar_item('0')");
  $fun->ComandoSP("CALL insertar_item('55','negro','almendra','P','U')"); 
//  $datos = array("codit" => "44","color" => "verde","descripcion" => "holamundo","tipo" => "P","udm" => "U");
 // $fun->ComandoSP($datos);

  ?>   
  </body>
</html>
