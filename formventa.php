<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="fuction.js"></script>
    <title>Modelo venta</title>
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
    <hgroup class="contenedor">
    <div class="dentro">
   <center> 
<h1>Modulo Ventas</h1>
    <form action="Rventa.php" method="GET">
    <table Border>
<tr>
    <td><label>Numero Venta</label></td>
    <td><input type="number" name="numero_venta"></td>
</tr>
    <td><label>Codigo Producto</label></td>
    <td><input type="text" name="codigo_producto"></td>
<tr>
    <td><label>Nombre Producto</label></td>
    <td><input type="text" name="nombre_producto"></td>
</tr>
    <td><label>Precio</label></td>
    <td><input type="text" id="n1" name="precio_txt" onkeyup="suma()" onchange="sumaIVA(this.value)"></td>
<tr>
    <td><label>Cantidad</label></td>
    <td><input type="text" id="n2" name="cantidad_txt" onkeyup="suma()" onkeyup="sumaIVA()" onchange="sumaIVA(this.value)"></td>
</tr>
    <td><label>total por cantidad</label></td>
    <td><input type="text" id="res" name="total_cantidad" ></td>
<tr>
    <td><label>IVA</label></td>
    <td><input type="text" id="iva" value="19%" name="IVA_txt"></td>
</tr>
    <td><label>total</label></td>
    <td><input type="text" id="total" name="total_txt" onkeyup="sumaIVA()" onchange="sumaIVA(this.value)"></td>
<tr>

<table>

<input type="submit" value="Confirmar" name="btn_Confirmar" onClick="suma()"  onClick="sumaIVA()">
<input type="reset">
</form>
<form action="recibe.php"><input type="submit" value="Volver atras"><br />
</center>
</div>
</hgroup>

</body>
</html>