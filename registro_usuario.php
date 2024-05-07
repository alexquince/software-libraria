<?php
            include 'conexionbd.php';
    
        
    $nombre_completo = trim($_POST['nombre_completo']);
    $ciudad = trim($_POST['ciudad']);
    $correo = trim($_POST['correo']);
    $contrasena = trim($_POST['contrasena']);

    $query = "INSERT INTO usuario(nombre_completo, ciudad, correo, contrasena, )
              VALUES('$nombre_completo','$ciudad','$correo','$contrasena')";
    
    $ejecutar = mysqli_query($conexion, $query);
    
    if($ejecutar){
        echo'
                <script>
                    alert("usuario almacenado exitosamente");
                </scrpt>
            '    
    }
     
?>