<?php
require '../Conexion/DATA_BASE2.php';

$message = '';

if (!empty($_POST['FICHA'])) {

    $sql = "INSERT INTO ficha (FICHA) values(:ficha)";
    $makia = $conn->prepare($sql);
    $makia->bindParam(':ficha', $_POST['FICHA']);

    if ($makia->execute()) {

        $message = 'Su nota fue guardada con exito.';
    } else {

        $message = 'Su nota no fue guardada comuniquese con el administrador.';
    }
}
?>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="../CSS/BaseArchivos.css" rel="stylesheet">
    <link href="../CSS/STYLE2.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="../Javascript/VentanasEmergentes.js"></script>
</head>

<body>
    <div class="ContenedorCentral d-flex justify-content-center">
        <div class="ContenedorIndex row d-flex justify-content-between">
            <div class="ContenedorLogoUni col-4">
                <img src="../Imagenes/ucc2.jpg">
            </div>
            <div class="InformacionFormulario col-4 d-flex justify-content-center">
                <h1><b>Fichas Tecnicas</b></h1>
            </div>
            <div class="ContenedorLogoOperacion col-4">
                <img src="../Imagenes/FichasTecnicas.jpg">
            </div>
            <div class="Contenido">
                <span><a href="ficha.php"></a></span>

                <H1>FICHA BIBLIOGRAFICA</H1>
                <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;1,100&family=Truculenta:opsz,wght@12..72,100&display=swap" rel="stylesheet">
                <link rel="stylesheet" href="ASSETS/CSS/STYLE2.css">
                <form action="ficha.php" method="post">
                    <textarea name="FICHA" rows="25" cols="50" placeholder="Ingrese su cometario"></textarea>
                    <input type="submit" value="GUARDAR">
                </form>


            </div>
        </div>
    </div>
    <div class="footer fixed-bottom d-flex justify-content-center">
        <div class="fixed-left">
            <img src="../Imagenes/ucc.jpg" alt="ImagenUcc">
        </div>
        <p class="parrafo">
            <b>Universidad Cooperativa de Colombia</b><br>
            Todos los derechos reservados - Bogotá - Colombia - 2022<br>
            Realizado por estudiantes de Ingenieria de Sistemas - Diseño Orientado A Objetos
        </p>
        <div class="fixed-right">
            <img src="../Imagenes/ucc2.jpg" alt="ImagenUcc">
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>