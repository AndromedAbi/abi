<?php
  
require_once "view/Item.php";
require_once "model/Model.php";

class Funciones 
{   
    public function Mostrar($nomsp)
    {
        //=======================================================================
        //====== FUNCION PARA MOSTRAR INFORMACION DE MI BD  23/09/2017===========
        //== Estoy tratando de poder cargar la data sin tener que especificar ===
        //===el numero de columnas o nombre =====================================
        //=======================================================================        
        $mod=new Model();
        $lstProducto=$mod->getListar($nomsp);     
        echo '<table width="50%" border="1" style="text-align:center;">';
        $columnas = count($lstProducto[0])/2;      
        $filas = count($lstProducto);

        for($i=1;$i<count($lstProducto[0]);$i=$i+2)
        {
            next($lstProducto[0]);
            echo "<th><b>".key($lstProducto[0])."</b></th>";
            next($lstProducto[0]);
        }
        for ($i=0; $i <$filas ; $i++)       
        { 
            echo "<tr>";
            for($j=0;$j<$columnas;$j++)
            {
               echo "<td>".$lstProducto[$i][$j]."</td>";
            }
            echo "</tr>";
        }
        echo '</table>';             
    }   
}
?>
