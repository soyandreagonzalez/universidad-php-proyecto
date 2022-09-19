<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styleProfesores.css">
</head>
<body>
    <div>
        <img src="./assets/Recurso 6.png" alt="">
    </div>
    <div class="div-general">
        <p>¡Bienvenido Profesor! </p> <p style="font-size:25px">Estás encargado de</p>  
        <div id="programa"></div>
    </div>  
    <div class="navigation">
        <nav>
            <ul>Estudiantes</ul>
        </nav>
    </div> 
    <div style="display:flex;justify-content:center; align-items:center">
    <h1 style="text-aling:center;"> Materias </h1>
    </div>
    
    <div class="card-materias-container">
    <div class="cards_materias" name="card-materia" id="materias"></div>
    </div>
     
</body>
<?php
        $docObtenido = $_GET['doc'];
        include_once "conexion.php";
        $semestre = "";
        $programa = "";
        $conexion = conexion();
        $query = mysqli_query($conexion, "SELECT nombrePrograma FROM docentes WHERE documentoDocente= '$docObtenido'");
    
        while($resultados = mysqli_fetch_array($query)){
            $programa = $resultados['nombrePrograma'];
            echo " <script> var div = document.getElementById('programa');
            var divContainer = document.createElement('div');
            divContainer.textContent = `$programa`;
            div.appendChild(divContainer);</script>"; 
        }
        $query2 = mysqli_query($conexion, "SELECT nombreMateria FROM materias WHERE nombrePrograma ='$programa'"); 
        while($resultados2 = mysqli_fetch_array($query2)){
            $nombreMaterias = $resultados2['nombreMateria'];
            echo " <script> var div = document.getElementById('materias');
            var div2 = document.createElement('div');
            div2.setAttribute = ('name', 'btn_navigate');
            div2.setAttribute = ('value', `$nombreMaterias`);
            var p = document.createElement('p');
            p.textContent = `$nombreMaterias`;
            div2.appendChild(p);
            div.appendChild(div2);</script>"; 
        }
    ?>
</html>