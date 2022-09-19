<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudiante</title>
    <link rel="stylesheet" href="styleInicioEstudiante.css">
</head>
<body>
    <header class="header-estudiante">
        <h1>Bienvenido Estudiante</h1>
    </header>
    <div class="container-semestre"> <h1>Malla correspondiente al semestre </h1> <p id="semestre"></p> </div> 
    <div class="container-carrera"> <h3>Actualmente te encuentras cursando la carrera: </h3> <p id="nombreCarrera"></p>  </div>
    <div class="cards_materias" id="materias"></div>

    <?php
        $docObtenido = $_GET['doc'];
        include_once "conexion.php";
        $semestre = "";
        $programa = "";
        $conexion = conexion();
        $query = mysqli_query($conexion, "SELECT semestre,nombrePrograma FROM estudiantes WHERE documentoestudiantes= '$docObtenido'");
        
        while($resultados = mysqli_fetch_array($query)){
            $semestre = $resultados['semestre'];
            $programa = $resultados['nombrePrograma'];
            echo " <script> var div = document.getElementById('semestre');
            var divContainer = document.createElement('div');
            var div2 = document.createElement('div');
            div2.textContent = `$semestre`;
            div.appendChild(div2);
            var div = document.getElementById('nombreCarrera');
            var divContainer = document.createElement('div');
            var div2 = document.createElement('div');
            div2.textContent = `$programa`;
            div.appendChild(div2);</script>"; 
        }
        $query2 = mysqli_query($conexion, "SELECT nombreMateria FROM materias WHERE semestre='$semestre' AND nombrePrograma ='$programa'"); 
        while($resultados2 = mysqli_fetch_array($query2)){
            $nombreMaterias = $resultados2['nombreMateria'];
            echo " <script> var div = document.getElementById('materias');
            var divContainer = document.createElement('div');
            var div2 = document.createElement('div');
            div2.textContent = `$nombreMaterias`;
            div.appendChild(div2);</script>"; 
        }
     
    ?>
</body>
</html>