<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="fuction.js"></script>
    <script src="https://kit.fontawesome.com/a23cd32f3d.js" crossorigin="anonymous"></script>
    <title>Modulo Bodega</title>
</head>
<style>
    body { background: url(img/fondo.jpg);}
    input{font-size: 1em;}
    
    .contenedor{
        
        margin: auto;
        width: 1150px;
        height: 900px;
        margin-top: 150px;
        border-radius: 2%;
        align-content: center;
        text-align: center;
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
<h1>Modulo Bodega</h1>
    <form action="Rbodega.php" method="GET">
    <table Border>
<tr>
    <td><label>Codigo Producto</label></td>
    <td><input type="text" name="codigo_producto"></td><td><i class="fa-solid fa-magnifying-glass icon"></i></td>
</tr>
    <td><label>Nombre Podructo</label></td>
    <td><input type="text" name="nombre_producto"></td>
<tr>
    <td><label>Fecha de Ingreso</label></td>
    <td><?php date_default_timezone_set('America/Mexico_City'); echo  $fecha_ingreso = date('d-m-Y')?></td>
</tr>
    <td><label>Precio</label></td>
    <td><input type="number" name="precio_txt"></td><td><input type="button" value="Agregar" onClick="scantidad()"></td>
<tr>
    <td><label>Cantidad</label></td>
    <td><input type="text" name="cantidad_txt" id="num-cantidad"></td><td><input type="text" id="reci" value="0"></td>
</tr>
    
<table>
<input type="submit" value="Confirmar" name="btn_Confirmar">
<input type="reset">
</form>
<form action="recibe.php"><input type="submit" value="Volver atras"><br />
</div>
</hgroup>
</center>

</body>
</html>