<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/a23cd32f3d.js" crossorigin="anonymous"></script>
  <title>Login</title>
</head>

<head>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      font-family: Arial, Helvetica, sans-serif;
      margin: 0;
      background: url(img/fondo.jpg);
      background-size: cover;
      background-attachment: fixed;
    }
    .contenedor{
      width: 100%;
      padding: 15px;
    }
    .formulario{
      background: #fff;
      margin-top: 150px;
      padding: 3px;
    }
    h1{
      text-align: center;
      color: #1a2537;
      font-size: 40px;
    }
    input[type="text"],
    input[type="password"]{
      font-size: 20px;
      width: 82%;
      padding: 10px;
      border: none;
    }
    .input-contenedor{
      margin-bottom: 15px;
      border: 1px solid #aaa;
    }
    .icon{
      min-width: 50px;
      text-align: center;
      color: #999;
    }
    .contenedor #btn_enviar{
      border: none;
      width: 100%;
      color: white;
      font-size: 20px;
      background: #1a2537 ;
      padding: 15px 20px;
      border-radius: 5px;
      cursor: pointer;
    }
    .contenedor #btn_enviar:hover{
      background: cadetblue;
    }
    @media(min-width:768px)
    {
      .formulario{
        margin: auto;
        width: 500px;
       margin-top: 190px; 
       border-radius: 2%;
      }
    }
  </style>
</head>

<body>
  <form class="formulario" action="recibe.php" method="POST">
    <h1>Ingresar</h1>
    <div class="contenedor">

      <div class="input-contenedor">
        <i class="fas fa-user icon"></i>
        <input type="text" placeholder="Usuario">
      </div>
      <div class="input-contenedor">
        <i class="fas fa-key icon"></i>
        <input type="password" placeholder="password">
      </div>

      <input type="submit" id="btn_enviar" value="Login">
    </div>

  </form>



</body>

</html>