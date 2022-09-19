<?php 
$nombre = $_GET['nombre'];
$documento =$_GET['documento'];
$direccion =$_GET['direccion'];
$correo =$_GET['correo'];
$contraseña =$_GET['contraseña'];
$facultad =$_GET['facultad'];
$cargo = $_GET['cargo'];
$programa =$_GET['programa'];
include_once "conexion.php";
$conexion = conexion();
if ($documento == "" ||$nombre == ""||$direccion == "" ||
$correo == "") {
    header("refresh:0;url=registroDocentes.php");
    echo "<script> alert('Campos vacios!!!') </script>";
    return;
}
$sql = "INSERT INTO docentes(documentoDocente,nombre,direccion,correo,contraseña,nombreFacultad,nombrePrograma,cargo) VALUES ('$documento','$nombre','$direccion','$correo','$contraseña','$facultad','$programa','$cargo')";
$query=mysqli_query($conexion, $sql);
if($query){
    echo "<script> alert('registro exitoso!!!') </script>";
    header("refresh:0;url=inicioSesion.php");
}
?>