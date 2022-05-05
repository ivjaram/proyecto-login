<?php

if (isset($_GET['btn_Confirmar'])) {

    echo "El codigo del producto: ".$_GET["codigo_producto"]."<br />
    El nombre del producto: ".$_GET["nombre_producto"]."<br />
    Feha de Ingreso es: ".$fecha_ingreso = date('d-m-Y')."<br />
    El Precio es: ".$_GET['precio_txt']."<br />
    Cantidad: ".$_GET['cantidad_txt'];
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