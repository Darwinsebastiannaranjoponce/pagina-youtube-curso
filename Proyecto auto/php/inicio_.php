<?php
    include 'conexxxion.php';

    $nombre=$_POST['Nombre'];

    $contrasena=$_POST['Contrasena'];

    $vcn0= mysqli_query($conexion, "SELECT * FROM register where Nombre='$nombre' and Contrasena='$contrasena'");
    if(mysqli_num_rows($vcn0)> 0){
        header("location: https://www.youtube.com/?hl=es-419");
        exit();
    }else{
        echo'
        <script>
            alert("Usuario o contraseñas incorrectos, por favor verifique los datos introducidos");
            window.location = "../inicio.php";
        </script>';
        exit(); 
    }







?>