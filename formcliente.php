<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modulo Clientre</title>
</head>
<style>
    body { background: url(img/fondo.jpg);}
    select{font-size: 1em;}
    input{font-size: 1em;}
    
    .contenedor{
        
        margin: auto;
        width: 900px;
        height: 900px;
        margin-top: 30px;
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
        <div class="contenedor">
            <hgroup class="dentro">
    <h1>Modulo CLiente</h1>
    <form action="Rcliente.php" method="POST">
    <table Border>
<tr>
    <td><label>Nombre Cliente</label></td>
    <td><input type="text" name="nombre_cliente"></td><br />
</tr>
    <td><label>Apellido Cliente</label></td>
    <td><input type="text" name="apellido_cliente"></td><br />
<tr>
    <td><label>Fecha Nacimiento</label></td>
    <td><input type="date" name="fecha_nacimiento"></td><br />
</tr>
    <td><label>Edad</label></td>
    <td><input type="text" name="edad_cliente"></td><br />
<tr>
    <td><label>Sexo</label></td>
    <td><select name="operador">
    <option >--Seleccionar--</option>
        <option >Hombre</option>
        <option >Mujer</option></td>
</tr>
    <td><label>Direccion</label></td>
    <td><input type="text" name="direccion_cliente"></td><br />
<tr>
    <td><label>Correo</label></td>
    <td><input type="email" name="correo_cliente"></td><br />
</tr>
    <td><label>Celular</label></td>
    <td><input type="tel" name="celular_cliente"></td><br />
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