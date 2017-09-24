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
  ?>   
  </body>
</html>
