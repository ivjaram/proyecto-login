<?php

if (isset($_GET['btn_Confirmar'])) {

    echo "El codigo del producto: ".$_GET["codigo_producto"]."<br />
    El nombre del producto: ".$_GET["nombre_producto"]."<br />
    Feha de elaboracion es: ".$_GET["fecha_elaboracion"]."<br/>
    Fecha de vencimiento: ".$_GET['fecha_vencimiento']."<br />
    Fecha de ingreso: ".$fecha_ingreso = date('d-m-Y')."<br />
    El precio es: ".$_GET['precio']."<br />
    Pais de procedencia: ".$_GET['Pais_procedencia']."<br />
    Descripcion del producto: ".$_GET['descrripcion_Producto']."<br />
    Cantidad: ".$_GET['cantidad_txt']."<br/ >Precio de compra: ".$_GET['precio_compra']."<br />
    Precio de Venta: ".$_GET['precio_venta'];

}


?>
<style>
    body{
        background: #F7BD2F;
        font-size: 3em; 
        font-weight: bold;
    }
    input[type="submit"]{
        font-size: 1.5em;
      padding: 10px 60px;
      border-radius: 50px;
      color: white;
      background: red;
      align-content: left;
      font-weight: bold;
      margin-top: 30px;
    }
</style>
<form action="recibe.php" class="Salir">
    <input type="submit" value="Salir">
  </form>