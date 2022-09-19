<?php
include('conexion.php');
$correo=$_GET['correo'];
$contraseña=$_GET['contraseña'];
$con=conexion();

if(isset($_GET['registrar'])){
    $sql="SELECT documentoDocente,correo,cargo,contraseña FROM docentes WHERE correo='$correo'";
    $query = mysqli_query($con, $sql);
    while($resultado = mysqli_fetch_array($query)){
        $documentoProfesor = $resultado['documentoDocente'];
        $cargoProfesor = $resultado['cargo'];
        $contraseñaDocente= $resultado['contraseña'];
        $correoDocente= $resultado['correo'];
    }
    if ($cargoProfesor == "docente" & $contraseñaDocente == $contraseña & $correoDocente == $correo ) {
        echo "<script> alert('Bienvenido, Profesor!')</script>";
        header("refresh:0;url=inicioProfesor.php?doc=$documentoProfesor");
    }else if($cargoProfesor == "coordinador" & $contraseñaDocente == $contraseña & $correoDocente == $correo ) {
        echo "<script> alert('Bienvenido, coordinador!')</script>";
        header("refresh:0;url=inicioCoordinador.php?doc=$documentoProfesor");
    }else if ($cargoProfesor == "decano" & $contraseñaDocente == $contraseña & $correoDocente == $correo ) {
        echo "<script> alert('Bienvenido, Decano!')</script>";
        header("refresh:0;url=inicioDecano.php?doc=$documentoProfesor");
    }else{
        $sql="SELECT documentoestudiantes,correo,contraseña FROM estudiantes WHERE correo='$correo'";
        $query = mysqli_query($con, $sql);
        while($resultado = mysqli_fetch_array($query)){
            $documentoEstudiante = $resultado['documentoestudiantes'];
            $contraseñaEstudiante= $resultado['contraseña'];
            $correoEstudiante= $resultado['correo'];
        }
        if ($contraseñaEstudiante == $contraseña & $correoEstudiante == $correo) {
            echo "<script> alert('Bienvenido, estudiante!')</script>";
            header("refresh:0;url=inicioEstudiante.php?doc=$documentoEstudiante");
        }else{
            echo "<script> alert('Correo o contraseña incorrectos!')</script>";
            header("refresh:0;url=inicioSesion.php");   
        }  
    }
}
?>