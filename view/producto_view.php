<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <?php
    require_once "controller/ProductoController.php";
    $nomSP="CALL ListarItem()";
    $fun = new Funciones();
    
    ?>  
    <title></title>
  </head>
  <body>
    <style >
      td {
        border: 1px dotted #FF0000;
      }
    </style>
    <!--  <h1>hola</h1> -->
    <table>
  <tr><td>CARA E CONFLEEEIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIII</td>
  <?php   
  $fun->Mostrar("CALL ListarItem()");
  
  ?>
   </table>
  </body>
</html>
