<?php 
	//include 'conexion/Conexion.php';
	$conexion=mysqli_connect('localhost','root','','test');
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link rel="stylesheet" href="estilos/instrucciones.css">
    <title>Yachayqay Test</title>

<style>
    .button1 {
      FONT-SIZE: 20px;
      text-decoration: none;
      color: White;

      }
</style>
</head>



<body>

	<div class="contenedor">
		<header><img src="imagenes/UC-Horizontal-White 1.png"></header>
		<div class="contenido">
        <img src="imagenes/bienvenida.png" alt="" width="60%" height="60%" align="left">
        <br><br>
        <br><br>
        <br><br>
        <h1>BIENVENIDO</h1>
            <p>AprendiTest, es un sistema que brinda un test 
                que ayuda a los estudiantes y docentes al análisis de su
                tipo de aprendizaje</p>
           
          <div class="footer">
          <body>
          <a href="instrucciones.php" class="button1"> <b><i>INICIAR TEST</i></b></a>
          </body></div>
          
		</div>
	</div>
</body>

</html>