<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <?php
    require_once "controller/ProductoController.php";
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
  <tr><td>Nombre del articulo</td>
  <?php   
  $fun->Mostrar();
  
  ?>
   </table>
  </body>
</html>
