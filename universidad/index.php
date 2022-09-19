<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleIndex.css">
</head>
<body>
    <header class="container-header"> 
       <div class="container-top-bar">
        <div class="container-top-bar-opciones">
            <h1>Registro: </h1>
            <a href="registroDocentes.php"> Profesor</a>
            <a href="registroEstudiantes.php"> Estudiante</a>
        </div>
        <div style="margin-right:20px"  class="container-top-bar-opciones">
        <a href="inicioSesion.php">
        <h3>Ingreso</h3>
        </a>
        </div>
       </div>
        <picture class="container-picture">
            <img src="./assets/LOGO.png" alt="">
        </picture>
        <nav class="container-nav-page">
           <a href="#conoceLaU"><ul class="container-nav-page-ul">Conoce la U</ul></a> 
            <a href="#estudiaConNosotros"><ul class="container-nav-page-ul">Estudia con nosotros</ul></a>
          <a href="#contactanos"><ul class="container-nav-page-ul">Contáctanos</ul></a>  
        </nav>
        <picture class="container-picture-slider">
            <img src="./assets/IMAGEN-INICIO.png" alt="">
        </picture>
    </header>
    <section>
        <div class="title-conoce">
            <p id="conoceLaU">CONOCE LA U</p>
        </div>
        <div class="container-frame-pp">
            <div class="container-frame">
                <iframe width="100%" height="500px" src="https://www.youtube.com/embed/VzXlr9FI1UE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <div class="title-conoce">
            <p id="estudiaConNosotros">ESTUDIA CON NOSOTROS</p>
        </div>
        <div class="container-card">
            <div class="container-card-facultades">
                <div class="a-hover">
                    <a  href="facultadingenieria.php">
                    <p>FACULTAD DE INGENIERÍA</p>
                    <img style="width:65%" src="./assets/ICONO-INGENIERIA.png" alt="">
                    </a>
                    
                </div>
                <div class="a-hover">
                    <a  href="facultaddiseño.php">
                    <p>FACULTAD DE DISEÑO</p>
                    <img src="./assets/ICONO-DISEÑO.png" alt="">
                    </a>
                    
                </div>
            </div>
        </div>
        <div class="container-card">
            <div class="container-card-facultades2">
            <div class="a-hover">
                <a  href="facultadciencias.php">
                <p>FACULTAD DE CIENCIAS</p>
                    <img src="./assets/ICONO-CIENCIA.png" alt="">
                </a>
                   
                </div>
            </div>
        </div>
    </section>
    <div class="title-conoce">
            <p id="contactanos">CONTÁCTANOS</p>
        </div>
    <footer>
        <div class="container-footer-col">
            <div class="container-footer-col-div">
                <h1>Canales de comunicación</h1>
                <h3>Tel: 508 43 51 </h3>
                <h3>Tel: 555 444 666 </h3>
                <h4>universidadboston@edu.co</h4>
            </div>
            <div>
                <h1>Horarios</h1> 
                <h3>Lun - Vie: 7:00 - 22:00 </h3>
                <h3>Sábado: 8:00 - 22:00 </h3>
                <h3>Domingo: 8:00 - 23:00 </h3>
            </div>
        </div>
        <div class="container-frame-maps">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.905276830708!2d-75.58886658517808!3d6.276183727730093!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e4429a387cb4419%3A0x83f3028eb9843b64!2sPascual%20Bravo%20porter%C3%ADa%20pilarica!5e0!3m2!1ses!2sco!4v1661957447563!5m2!1ses!2sco" width="400" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>        
        </div>
    </footer>
    <script src="index.js"></script>
</body>
</html>