<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario</title>
</head>

<body>

  <form action="index.php" class="Salir">
    <input type="submit" value="Cerrar Seccion">
  </form>

<center>
  <hgroup>
    <script language="javascript"> alert("Hola".$_POST["usuario_txt"];)</script>
    <div class="contenedor">
      <ul><h1>Menu</h1>
      <hr>
      <li><a href="formpersonal.php">Formulario Personal</a></li>
      <li><a href="formcliente.php">Formulario Cliente</a></li>
      <li><a href="formproducto.php">Formulario Producto</a></li>
      <li><a href="formbodega.php">Formulario Bodega</a></li>
      <li><a href="formventa.php">Formulario venta</a></li>
      </ul>
    </div>
  </hgroup>
</center>


<style>
    h1{font-size:4.4em; }
    a{font-size:3.9em; text-decoration:none;}
    body { background: url(img/fondo.jpg);}
    ul{
    
    padding: 10px 60px;
    border-radius: 50px;
    box-shadow: 1px 1px 5px rgb(0, 0, 0,0.5);
    color: rgb(0, 0, 0);
    background-color: rgb(213, 230, 250);
    
  }

    @media(min-width:768px) {
      .contenedor {
        margin: auto;
        width: 900px;
        margin-top: 150px;
        border-radius: 2%;
      }
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
</body>
</html>