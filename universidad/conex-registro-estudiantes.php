<?php 
$nombre = $_GET['nombre'];
$documento = $_GET['documento'];
$direccion = $_GET['direccion'];
$correo = $_GET['correo'];
$contraseña = $_GET['contraseña'];
$facultad = $_GET['facultad'];
$semestre = $_GET['semestre'];
$pago = $_GET['pago'];
$programa =$_GET['programa'];
$cargo = "estudiante";
include_once "conexion.php";
$conexion = conexion();
if ($documento == "" ||$nombre == ""||$direccion == "" ||
$correo == "") {
    header("refresh:0;url=registroEstudiantes.php");
    echo "<script> alert('Campos vacios!!!') </script>";
    return;
}
$sql = "INSERT INTO estudiantes(documentoEstudiantes,nombre,direccion,correo,contraseña,nombreFacultad,semestre,pago,nombrePrograma,cargo) VALUES ('$documento','$nombre','$direccion','$correo','$contraseña','$facultad','$semestre','$pago','$programa','$cargo')";
$query=mysqli_query($conexion, $sql);
if($query){
    echo "<script> alert('registro exitoso!!!') </script>";
    header("refresh:0;url=inicioSesion.php");
}
?>
