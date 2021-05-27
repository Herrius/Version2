<?php

    $connect =mysqli_connect('localhost','root','','test');


    //Inilizamos paginación ///

    //Obtenemos 'Numero' paginación via 'GET'.
    if (isset($_GET['idpregunta'])) { 
        $pagina  = $_GET['idpregunta'];     
    } else { //Por defecto inicamos la página en 1, es decir, registro numero 1.
        $pagina=1;
    }

    //Cantidad de registro a mostrar en paginación.
    $cantidad_reg=1;    
    //Localizacion SQL.
    $ubicacion = ($pagina-1) * $cantidad_reg;

    //Sentencia SQL, mostramos consejo.
    $preguntas= mysqli_query($connect,"SELECT enunciado,opcion1,opcion2 FROM tblpreguntas ORDER BY idpregunta LIMIT $ubicacion,$cantidad_reg");
    $registro= mysqli_fetch_array($preguntas);

    //Obtenemos datos a mostrar para la páginación.        
    $enunciado = $registro['enunciado'];
    $opcion1 = $registro['opcion1'];
    $opcion2 = $registro['opcion2'];
?>
    <!DOCTYPE HTML>    
    <html>    
    <head>    
    <meta utfset="utf-8"> 
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
   
    <style>
        
        body{
            height: 100%;
            width: 100%; 
            top:0px; 
            background-image: url("../imagenes/questions.jpg");
            margin: 0 auto; 
       
            background: linear-gradient(90deg, #e63947cb 0%, #cd1f1fc7 22.17%, #c13584c7 49.41%, #7a00c6cb 81.28%);
            opacity: 1;
            font-family: "Comic Sans MS,Arial,Verdana";
        }


            header {
            top:0px;
            width: 80%;
            height: 20%;
            background: #2c2b2b;
            box-shadow: 1px 7px 25px rgba(0, 0, 0, 0.24);
            color: #fff;
            text-align: center;
        }
            div {
            height: 50%;
            width: 75%;
            background-color: white;
            border: none;
            color: black;
            padding: 15px 32px;
            text-align: center;
            font-size: 18px;
        }

    </style>

    </head>    
    <title>Yachayqay Test</title>    
    <center><body  >

    <br><br><br><br><br><br><br><br><br><br><br>

    <header><br><img src="imagenes/UC-Horizontal-White 1.png"></header>
    <center><div>

    <center><h1> Yachayqay Test </h1></center>

    <!--  Mostramos datos para paginación -->
    <center><h2><?php echo $enunciado;?></h2></center>
    <center><a><input type=radio name=question value=1><?php echo $opcion1;?></input></a><br></center>
    <center><a><input type=radio name=question value=2><?php echo $opcion2; ?></input></a><br></center>
    
    
    
    <br>
    <?php //Creamos botoneras anterior / siguiente

        //SQL
        $preguntas= mysqli_query($connect,"SELECT * FROM tblpreguntas");     
        //Total registros existentes en Base de Datos.
        $total_filas = mysqli_num_rows($preguntas);
        //Cantidad a mostrar en paginación.
        $cantidad_reg=1;
        //Calculamos total paginas. 
        $total_pagina = ceil($total_filas / $cantidad_reg); 

        //Calculamos botones anterior / siguiente
        $prev = $pagina - 1;
        $next = $pagina + 1;

        //Boton 'Anterior'
        if ($prev > 0) { 
            echo "<center><a href='fetch.php?idpregunta=$prev'>Anterior</a></center>"; 
        }

        //Opcional, visualizar el total de paginas, es decir, podrias crear algo similar a  < 1 2 3 4 > .       
       // for ($i=1; $i<=$total_pagina; $i++) { 
          //  echo "<a href='fetch.php?pagina=$i'>$i</a>"; 
        //}

        //Boton 'Siguiente'
        if ($pagina < $total_pagina ) {
            echo "<center><a href='fetch.php?idpregunta=$next'>Siguiente</a></center>"; 
        }  

 
    ?>
 
    
</div></center> 
   
</body></center>

</html>