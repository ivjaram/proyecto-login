<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Modulo Producto</title>
</head>
<style>
    body { background: url(img/fondo.jpg);}
    input{font-size: 1em;}
    
    .contenedor{
        
        margin: auto;
        width: 900px;
        height: 900px;
        margin-top: 130px;
        border-radius: 2%;
        
    }   
    .dentro{
        font-size: 2em;
        padding: 10px 30px;
        border-radius: 50px;
        box-shadow: 1px 1px 5px rgb(0, 0, 0,0.5);
        color: black;
        background-color: white; 
    }
</style>
<body>
    <center>
        <hgroup class="contenedor">
        <div class="dentro">
        <h1>Modulo Producto</h1>
        <form action="Rproducto.php" method="GET">
        <table Border>
        <tr>
        <td><label>Codigo Producto</label></td>
        <td><input type="text" name="codigo_producto"></td>
        </tr>
        <td><label>Nombre Podructo</label></td>
        <td><input type="text" name="nombre_producto"></td>
        <tr>
        <td><label>Fecha Elaboración</label></td>
        <td><input type="date" name="fecha_elaboracion"></td>
        </tr>
        <td><label>Fecha de Vencimiento</label></td>
        <td><input type="date" name="fecha_vencimiento"></td>
        <tr>
        <td><label>Fecha de Ingreso</label></td>
    <td><?php date_default_timezone_set('America/Mexico_City'); echo  $fecha_ingreso = date('d-m-Y')?></td>
</tr>
    <td><label>Precio</label></td>
    <td><input type="number" name="precio"></td>
<tr>
    <td><label>Pais de Procedencia</label></td>
    <td><input type="text" name="Pais_procedencia"></td>
</tr>
    <td><label>Descripcion del Producto</label></td>
    <td><input type="text" name="descrripcion_Producto"></td>
<tr>
    <td><label>Cantidad</label></td>
    <td><input type="number" min="0" max="100" value="0" name="cantidad_txt"></td>
</tr>
    <td><label>precio Compra</label></td>
    <td><input type="number" name="precio_compra"></td>
<tr>
    <td><label>precio venta</label></td>
    <td><input type="number" name="precio_venta"></td>
</tr>
<table>
<input type="submit" value="Confirmar" name="btn_Confirmar">
<input type="reset">
</form>
<form action="recibe.php"><input type="submit" value="Volver atras"><br />
</hgroup>
</div>
</center>


</body>

</html>