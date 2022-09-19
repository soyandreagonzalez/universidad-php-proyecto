<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar</title>
    <link rel="stylesheet" href="styleregistroestudiantes.css">
</head>
<body>
        <a href="index.php" class="container-form-logogeneral" >  <img  src="./assets/recurso 6.png" alt=""></a> 

    <div class="container">
        <form action="conex-registro-estudiantes.php" method="get" class="container-form">
            <div class="container-form-logo">
                <img src="./assets/recurso 5.png" alt="">
            </div>
        <div class="container-form-h1">
            <h2>REGISTRO ALUMNOS</h2>
        </div>
        <div class="container-form-inputs-labels"> 
        <div class="container-form-input">
            <label for="">Nombre completo</label>
            <input type="text" name="nombre" id="">
        </div>
        <div class="container-form-input">
            <label for="">Documento</label>
            <input type="text" name="documento" id="">
        </div>
        <div class="container-form-input">
            <label for="">Correo</label>
            <input type="text" name="correo" id="">
        </div>
        
        <div class="container-form-input">
            <label for="">direccion</label>
            <input type="text" name="direccion" id="">
        </div>

         <div class="container-form-input">
            <label for="">Contraseña</label>
            <input type="password" name="contraseña" id="">
        </div>
        <div class="container-form-selects">
            <div> Facultad
                <select name="facultad" id="facultad">
                    <option value=""></option>
                </select>
            </div>
            <div class="selected-programas">
            <div><input type="radio" value="analisis_muestras" name="programa" id="analisis_muestras">analisis muestras</div> 
            <div><input type="radio" value="medio_ambiente" name="programa" id="medio_ambiente">medio ambiente</div>
            <div><input type="radio" value="quimica_industria" name="programa" id="quimica_industria">quimica industria</div>
            <div><input type="radio" value="diseño_grafico" name="programa" id="diseño_grafico">diseño grafico</div>
            <div><input type="radio" value="diseño_industrial" name="programa" id="diseño_industrial">diseño industrial</div>
            <div><input type="radio" value="diseño_vestuario" name="programa" id="diseño_vestuario">diseño vestuario</div>
            <div><input type="radio" value="ingenieria_ambiental" name="programa" id="ingenieria_ambiental">ingenieria ambiental</div>
            <div><input type="radio" value="ingenieria_quimica" name="programa" id="ingenieria_quimica">ingenieria quimica</div>
            <div><input type="radio" value="ingenieria_sistemas" name="programa" id="ingenieria_sistemas">ingenieria sistemas</div>
            </div>  
            <div>Semestre
                <select name="semestre" id="">
                    <option value=1>1</option>
                    <option value=2>2</option>
                    <option value=3>3</option>
                </select>
            </div> 
            <div>Pago
                <select name="pago" id="">
                    <option value="pendinte">pendiente</option>
                    <option value="cancelado">cancelado</option>
                </select>
            </div> 
        </div>
        <div class="container-fomr-button">
            <button type="submit"> Registrar</button>
        </div>
        <div class="container-form-olvidaste">
            <a href="inicioSesion.php">¿Ya tienes cuenta?</a>
        </div>
        </div>
        </form>
    </div>

</body>

<?php 
    function options(){
        include_once "conexion.php";
        $conexion = conexion();
        $query = mysqli_query($conexion, "SELECT * FROM facultad");
        while($resultados = mysqli_fetch_array($query)){
            $facultades = $resultados['nombreFacultad'];
            echo "<script> 
            var select = document.getElementById('facultad');
            var option = document.createElement('option');
            option.value = `$facultades`;
            option.text = `$facultades`;
            select.add(option);
            </script>"; 
        } 
    }
     options();
?>
<?php 


?>
<script src="index.js"></script>
</html>