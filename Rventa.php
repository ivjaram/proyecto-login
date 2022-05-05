<?php
if (isset($_GET['btn_Confirmar'])) {

    echo "El Numero de ventas es: ".$_GET["numero_venta"]."<br />
    El codigo del producto: ".$_GET["codigo_producto"]."<br />
    El Nombre del producto: ".$_GET["nombre_producto"]."<br/>
    es precio es: ".$_GET['precio_txt']."<br />
    las cantidades: ".$_GET['cantidad_txt']."<br />
    El total de cantidad: ".$_GET['total_cantidad']."<br />
    IVA: ".$_GET['IVA_txt']."<br />
    total: ".$_GET['total_txt'];

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