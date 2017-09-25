<!DOCTYPE html> 
<html> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>Item</title> 
<h1>Item</h1>
</head> 
<body>
<div>
<form id="item" name="item" method="post" action="" enctype="multipart/form-data">

<span>Codigo: </span><br/>
<input name="codigo" type="text" class="Texto" id="codigo" maxlength="4" size="5" /><br/><br/>

<span>Color:</span><br/>   
<input name="color" type="text" class="" id="" maxlength="10"  title="" size="5" /><br/><br/>

<span>descripcion:</span><br/>
<input name="descrip" type="text" class="" id="" maxlength="30"  title="" size="30" /><br/><br/>

<span>tipo:</span><br/>
<select name="tipo" id="tipo">
    <option value="I" selected="selected">Insumo</option>
    <option value="P">Producto</option>
</select><br/><br/>

<span>Unidad de Medida:</span><br/>
<select name="tipo" id="tipo">
        <option value="N/A" selected="selected">N/A</option>
        <option value="kg">kg</option>
        <option value="gramo">gramo</option>
        <option value="unidad">unidad</option>
        <option value="metro">metro</option>
        <option value="centimetro">centimetro</option>
    </select><br/><br/>

<input name="enviar" type="submit" class="boton" id="enviar" value="enviar" />


<script type="text/javascript"> alert("Operacion Exitosa")</script>
<script type="text/javascript">window.location.href="index2.php";</script>  
</div> 
</body> 
</html>  