<?php
    include_once 'Libreria/Connection.php';
    $objConnection=new Connection();        
?>

<DOCTYPE html>
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

        <div class="content01">
            <div class="row" >
                <div class="col-12 col-xl-3 col-lg-4 col-md-6 col-sm-12 mx-auto">                
                    <form name="formulario1" method="post" action="Pagina02.php" >
                        <div class="container venreg">
                            <h1>Registro</h1>
                            <p>En el siguiente formulario puede agregar nuevos estudiantes al curso</p>                         
                            <label>ID</label><br>
                            <input type="number" placeholder="Ingrese ID" name="id" id="id" required>
                            <label>Nombres</label><br>
                            <input type="text" placeholder="Ingrese Nombres" name="nombre" id="nombre" required>
                            <label>Apellidos</label><br>
                            <input type="text" placeholder="Ingrese Apellidos" name="apellido" id="apellido" required><br>
                            <label>Edad</label><br>
                            <input type="number" placeholder="Ingrese Edad" name="edad" id="edad" required>
                            <label>Correo</label><br>
                            <input type="text" placeholder="correo" name="correo" id="correo" required>                                                        
                            
                            <p style="font-size: 0.8em; color : cyan;">Creado por Sebastian barona</p>
                            <div class="clearfix" align="left">
                                <!-- <button type="button" id="btn-envio" class="btn btn-success">Enviar</button> -->
                                <input type="submit"class="btn btn-success" name="envio" value="Enviar"/>
                                <button type="button" class="btn btn-danger" onclick="limpiar()">Limpiar</button>                                
                            </div>
                        </div>
                    </form>
                </div>                            
            </div>            
        </div>                                      
    </body>

    <script type="text/javascript">
            
        function limpiar()
        {                    
                document.getElementById("id").value = "";
                document.getElementById("nombre").value = "";
                document.getElementById("apellido").value = "";
                document.getElementById("edad").value = "";
                document.getElementById("correo").value = "";
        }                
            
    </script>
</html>

<?php
    
    if(!empty($_POST['envio']))     
    {    
        settype($id,"integer");
        settype($nombre,"string");
        settype($apellido,"string");
        settype($edad,"integer");
        settype($correo,"string");
        
        $id       = $_POST['id'];
        $nombre   = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $edad     = $_POST['edad'];
        $correo   = $_POST['correo'];
    
        $sql="insert into estudiantes values ($id,'$nombre','$apellido',$edad,'$correo')";    
        $conexion=$objConnection->getConnect();        
        $ejecucion=mysqli_query($conexion, $sql);
        
        if (!$ejecucion){
            echo mysqli_errno($conexion);
            echo "<script type='text/javascript'>
                    alert('Error al insertar datos');
                  </script>";
        }
        else {
            //echo "Registro Exitoso";
            echo "<script type='text/javascript'>
                        alert('Registro Exitoso');
                  </script>";
        }
    }        

?>
