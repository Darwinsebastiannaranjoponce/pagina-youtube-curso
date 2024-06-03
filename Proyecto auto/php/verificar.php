
<?php
    include "conexxxion.php";
    $codigo =$_POST['codigo'];
    $res = $conexion->query("select * from register 
        where codigo='$codigo' 
        ")or die($conexion->error);
    if( mysqli_num_rows($res) > 0 ){
        echo "TODO CORRECTO";
        $conexion->query("update register set confirmado = 'si'");
        header("location: http://localhost/proyecto%20auto/inicio.php");
    }else{
        echo "codigo invalido";
    }
?>
