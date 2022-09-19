<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar</title>
    <link rel="stylesheet" href="styleInicioSesion.css">
</head>
<body>
   
     <a href="index.php" class="container-form-logogeneral" >  <img  src="./assets/iniciosesionlogo.png" alt=""></a> 
   
    <div class="container">
        <form method="get" action="sesion.php" class="container-form">
            <div class="container-form-logo">
                <img src="./assets/recurso 5.png" alt="">
            </div>
        <div class="container-form-h1">
            <h2>INICIO DE SESIÓN</h2>
        </div>
        <div class="container-form-inputs-labels"> 
        <div class="container-form-input">
            <label for="">Correo</label>
            <input type="text" name="correo" id="">
        </div>
        <div class="container-form-input">
            <label for="">Contraseña</label>
            <input type="password" name="contraseña" id="">
        </div>
       
        <div class="container-fomr-button">
            <button name="registrar" type="submit">Iniciar sesión</button>
        </div>
        <div class="container-form-olvidaste">
            <a href="">¿Olvidaste tu contraseña?</a>
        </div>
        <div class="olvidaste">
            <div class="container-form-olvidaste">
                <a href="registroDocentes.php">¿No tienes cuenta, profesor?</a>
            </div>
            <div class="container-form-olvidaste">
                <a href="registroEstudiantes.php">¿No tienes cuenta, alumno?</a>
            </div>
        </div>
        
        </div>
        </form>
    </div>
</body>
</html>