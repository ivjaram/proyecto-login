<?php

if (isset($_POST['btn_Confirmar'])) {

    echo"El nombre del cliente es: ".$_POST["nombre_cliente"]."<br /> 
    El apellido es: ".$_POST["apellido_cliente"]."<br /> 
    Su Fecha de nacimiento es: ".$_POST["fecha_nacimiento"]."<br />
    Su Edad es: ".$_POST['edad_cliente']."<br /> 
    Su Sexo es: ".$_POST['operador']."<br /> 
    Su Direccion es: ".$_POST['direccion_cliente']."<br />
    Su correo es: ".$_POST['correo_cliente']."<br />
    y Su numero de Contacto es: ".$_POST["celular_cliente"];
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