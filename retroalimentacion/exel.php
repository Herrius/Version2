<?php
header("Content-Type: application/xls");
header("Content-Disposition:attachment; filename=Estilo_Aprendizaje.xls");
?>
<table>
   <center><h1>Buen día estimado participante</h1></center>
   <center><i><p>El resultado de sus estilos de aprendizaje es el siguiente:</p></i></center>
    <tr>
        <th>Aprendizaje Activo</th>
        <th>Aprendizaje Reflexivo</th>
        <th>Aprendizaje Sensorial</th>
        <th>Aprendizaje Intuitiva</th>
        <th>Aprendizaje Visual</th>
        <th>Aprendizaje Verbal</th>
        <th>Aprendizaje Secuencial</th>
        <th>Aprendizaje Global</th>
    </tr>
    <?php
        $conexion=mysqli_connect ('localhost','root','','test');
        $sql="CALL SP_MOSTRAR_RESULTADO";
        $result=mysqli_query($conexion,$sql);
        while ($fila=mysqli_fetch_array($result)){
            ?>
           <center><h2>Alumno <?php echo $fila[0] ?></h2></center> 
            <tr>
              <td style="text-align: center;color:blue"><?php echo $fila[1] ?>%</td>  
              <td style="text-align: center;color:blue"><?php echo $fila[2] ?>%</td>  
              <td style="text-align: center;color:blue"><?php echo $fila[3] ?>%</td>
              <td style="text-align: center;color:blue"><?php echo $fila[4] ?>%</td> 
              <td style="text-align: center;color:blue"><?php echo $fila[5] ?>%</td>  
              <td style="text-align: center;color:blue"><?php echo $fila[6] ?>%</td>  
              <td style="text-align: center;color:blue"><?php echo $fila[7] ?>%</td>    
              <td style="text-align: center;color:blue"><?php echo $fila[8] ?>%</td>  
            </tr>

        <?php }?>   
</table>