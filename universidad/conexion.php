<?php
    function conexion(){
        $conexion = mysqli_connect('localhost','root','','universidad','3306');
        if($conexion){
            return $conexion;
        }else{
            return "Error en la conexión!!";
        }
    }
?>