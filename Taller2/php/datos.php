<?php

include_once('conex.php');

if(isset($_POST['btn']) && $_POST['btn'] == "Guardar"){

$cedula   = $_POST['cedula'];
$nombre   = $_POST['nombre'];
$nota_mat = $_POST['matematicas'];
$nota_fis = $_POST['fisica'];
$nota_prog= $_POST['programacion'];

$query = "INSERT INTO estudiantes (cedula, nombre, nota_matematicas, nota_fisica, nota_programacion) values ('$cedula', '$nombre', '$nota_mat', '$nota_fis', '$nota_prog')";
$rs = mysqli_query($conn, $query) or die(mysqli_error($conn));


if($rs == true){
    header('Location: ../index.php');
}
mysqli_close($conn);
}
?>

