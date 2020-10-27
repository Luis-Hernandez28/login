<?php 
include 'conecta.php'; 
session_start();
$usuario = $_SESSION['Usuario'];
if(!isset($usuario)){
    header("location:Aplicacion1.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bienbenido al sistema: <?php echo $usuario; ?> </h1>
</body>
</html>