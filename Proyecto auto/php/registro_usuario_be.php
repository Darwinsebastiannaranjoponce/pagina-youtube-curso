<?php 
    
    include 'conexxxion.php';

    $nombre= $_POST['Nombre'];
    $correo= $_POST['Correo'];
    $contrasena= $_POST['Contrasena'];

    $query= "INSERT INTO register(Nombre, Correo, Contrasena) 
             VALUES('$nombre','$correo','$contrasena')";
    // verificar que los datos no se repita en BD

    $vc= mysqli_query($conexion, "SELECT * FROM register WHERE Correo='$correo'");
    if(mysqli_num_rows($vc) > 0){
        echo'
        <script>
        alert("Este correo ya esta registrado, ponga otro diferente")
        window.location="../registro.php"
        </script>
    ';
    exit('');
    }
    
    $vn= mysqli_query($conexion, "SELECT * FROM register WHERE Nombre='$nombre'");
    if(mysqli_num_rows($vn) > 0){
        echo'
        <script>
        alert("Este nombre ya esta registrado, ponga otro diferente")
        window.location="../registro.php"
        </script>
    ';
    exit('');
    }

    $vcn= mysqli_query($conexion, "SELECT * FROM register WHERE Contrasena='$contrasena'");
    if(mysqli_num_rows($vcn) > 0){
        echo'
        <script>
        alert("Esta contraseña ya esta registrado, ponga otro diferente")
        window.location="../registro.php"
        </script>
    ';
    exit('');
    }

    //finn

    $ejecutar= mysqli_query($conexion, $query);
    if($ejecutar){
        include "./Confirmacion.php";
        if($enviado){
            $conexion->query("insert into register (Nombre, Correo, Contrasena, confirmado, codigo)
                values('$nombre','$correo','$contrasena','no','$codigo')") or die($conexion->error);
                echo "Rebice su email para validar su registro";
            }else{
            echo "Error, no se pudo enviar el email, vuelva a intentarlo";
        }

    }else{
        echo '
        <script>
                alert("No se pudo registrar, intentelo de nuevo")
                window.location="../registro.php"
        </script>
        ';
    }
    mysqli_close($conexion);
?>