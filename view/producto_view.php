<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <style >
      td {
        border: 1px dotted #FF0000;
      }
    </style>
      <h1>hola</h1>
    <table>
  <tr><td>Nombre del articulo</td>
   <?php
      foreach ($lstProducto as $registro)
      {
          echo "<tr><td>" . $registro["nombre"] ."</td></tr>";
      }
    ?>
   </table>
  </body>
</html>
