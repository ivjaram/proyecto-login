<?php
    if (isset($_POST['btn_Confirmar'])) {
        
        echo "tu Nombre es= ".$_POST['nombre_empleado']."<br /> 
        tu apellido es".$_POST['apellido_empleado']."<br /> 
        tu Fecha de nacimiento es= ".$_POST['fecha_nacimiento']."<br />
        tu Edad es= ".$_POST['edad_txt']."<br /> 
        tu Sexo es= ".$_POST['operador']."<br /> 
        tu Nacionalidad es= ".$_POST['Nacionalidad_txt']."<br />
        tu Direccion es= ".$_POST['direccion_txt']."<br />
        y tu numero de Contacto es= ".$_POST['numero_contacto']; 
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