<?php
error_reporting(0);
session_start();
include 'conecta.php';
$usuario= $conecta->real_escape_string ($_POST['usuario']);
$password= $conecta->real_escape_string ($_POST['password']);
echo $usuario;
echo $password;

$consulta = "SELECT * FROM alumnos WHERE Usuario ='$usuario' and Password ='$password'";
if ($resultado = $conecta->query($consulta)){
    while($row =$resultado->fetch_array()){
        $userok= $row ['Usuario'];
        $passwordrok= $row['Password'];
    }
    $resultado->close();
}
$conecta->close();
 if(isset($usuario) && isset($password)){
     if($usuario==$userok && $password==$passwordrok){
         $_SESSION['login']=TRUE;
         $_SESSION['Usuario']=$usuario;
         header("location:principal.php");
     }
     else{
         header("No cuentas con permisos");
     }
    } 
    else{
         header("location:../Aplicacion1.php");
    }
?>