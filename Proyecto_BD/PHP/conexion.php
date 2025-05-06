<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        // Variables de conexión
        $db_host = "localhost";
        $db_nombre = "proyecto_bd";
        $db_user = "root";
        $db_pass = "";
        
    
        //Procedimiento almacenado de ejemplo 
        $conexion = mysqli_connect($db_host, $db_user, $db_pass, $db_nombre);
        if(mysqli_connect_errno()){
            echo "Fallo al conectar con la base de datos";
            exit();
        }
        
        mysqli_set_charset($conexion, "utf8"); // Permite mostrar caracteres especiales

        $query = "SELECT * FROM VIDEOJUEGO;";
        

        $resultados = mysqli_query($conexion, $query); // En esta sentencia se almacenará la consulta a la base de datos
        /*
        //Mostrando los resultados
        $fila = mysqli_fetch_row($resultados); // Esto es una array donde cada fila de la tabla.
        echo $fila[0] . " ";
        echo $fila[1] . " ";
        echo $fila[2] . " ";

        echo "<br>";

        $fila = mysqli_fetch_row($resultados); // Esto es una array donde cada fila de la tabla.
        echo $fila[0] . " ";
        echo $fila[1] . " ";
        echo $fila[2] . " ";
        */
        
        
        while( ($fila = mysqli_fetch_row($resultados)) == true) {

            echo $fila[0] . " ";
            echo $fila[1] . " ";
            echo $fila[2] . " ";
            echo $fila[3] . " ";
            echo $fila[4] . " ";
            echo "<br>";
        }
        

        

        
    ?>    
</body>
</html>