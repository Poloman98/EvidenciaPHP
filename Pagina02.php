<?php

   include_once 'Libreria/Connection.php';
   $objConnection=new Connection();
    
   $sql="select codigo,nombres,apellidos,edad,correo from estudiantes";    
   $conexion=$objConnection->getConnect();    
   $conect= mysqli_query($conexion, $sql);

   if (!$conect){
    echo mysqli_errno($conexion);
    echo "<script type='text/javascript'>
            alert('Error al consultar datos');
          </script>";
}
else {
    echo "Registro Exitoso";
    // echo "<script type='text/javascript'>
    //             alert('Consulta exitosa');
    //       </script>";
}

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />

        <link rel='shortcut icon' href='' type='image/x-icon' sizes="16x16" />
        <!-- ================== ESTILOS CSS ================== -->
                
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Goldman&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="shortcut icon" type="image/x-icon" href="IMGS/ima01.ico" />
        <link href="CSS/estilo.css" rel="stylesheet"/>
        <link href="CSS/bootstrap.min.css" rel="stylesheet"/>        
                 
        <title>Registro de usuarios</title>
    </head>
    <body class="body-primario">        
        <div class="col-md-8 mx-auto" style="margin-top:180px;">                                           
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>edad</th>
                        <th>correo</th>                            
                    </tr>
                </thead>
                <tbody>                 
                <?php
                
                
                    while ($con = mysqli_fetch_row($conect))
                    {                
                        echo "<tr>";
                        echo "<td align='center'>".$con[0]."</td>";
                        echo "<td align='center'>".$con[1]."</td>";
                        echo "<td align='center'>".$con[2]."</td>";
                        echo "<td align='center'>".$con[3]."</td>";
                        echo "<td align='center'>".$con[4]."</td>";                        
                        echo "</tr>";
                    }
            
                ?>                                               
                    <!-- <tr>
                        <td align="center"><?php //echo $_POST['id'] ?></td>
                        <td align="center"><?php //echo $_POST['nombre'] ?></td>
                        <td align="center"><?php //echo $_POST['apellido'] ?></td>
                        <td align="center"><?php //echo $_POST['edad'] ?></td>
                        <td align="center"><?php //echo $_POST['correo'] ?></td>
                    </tr>                                               -->
                </tbody>
            </table>                        
        </div>        
        <div>
            <center>
                <a href="index.php" style="color:red; font-family: 'Goldman', cursive;" >Regresar a la pagina principal</a>
            </center>
        </div>                
    </body>
</html>    