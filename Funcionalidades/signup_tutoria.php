<?php 
    require '../Conexion/DATA_BASE.php';
    
    $message = '';

    if(!empty($_POST['CORREO']) && !empty($_POST['NOMBRE_TUTOR']) && !empty($_POST['NOMBRE_CLASE'])) {

        $sql = "INSERT INTO tutoria_usu (CORREO_USU, NOMBRE_TUTOR, CLASE) values(:correo, :nombre_tutor, :clase)";
        $makia = $conn->prepare($sql);
        $makia->bindParam(':correo', $_POST['CORREO']);
        $makia->bindParam(':nombre_tutor', $_POST['NOMBRE_TUTOR']);
        $makia->bindParam(':clase', $_POST['NOMBRE_CLASE']);

        if($makia->execute()){
            
            $message = 'Su tutoria fue registrada con exito.';
        
        }else{
            
            $message = 'Su tutoria no fue registrada comuniquese con el administrador.';
        }
    }
?>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="../CSS/BaseArchivos.css" rel="stylesheet">
    <link href="../CSS/STYLE.css" rel="stylesheet">
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
                <h1><b>REGISTRO TUTORIA</b></h1>
            </div>
            <div class="ContenedorLogoOperacion col-4">
                <img src="../Imagenes/Tutoria.jpg">
            </div>
            <div class="Contenido">
               
                
                <span><a href="signup_tutoria.php"></a></span>
        
                <H1>REGISTRO TUTORIA</H1>
                <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;1,100&family=Truculenta:opsz,wght@12..72,100&display=swap" rel="stylesheet">
                <link rel="stylesheet" href="ASSETS/CSS/STYLE.css">
                <form action="signup_tutoria.php" method="post">
                <input type="text" name="CORREO" placeholder="INGRESE SU CORREO">
                <input type="text"  name="NOMBRE_TUTOR" placeholder="INGRESE NOMBRE TUTOR">
                <input type="text"  name="NOMBRE_CLASE" placeholder="INGRESE CLASE">
                <input type="submit" value="GUARDAR">
                </form>
                <form action="TABLA_TUTORIAS.php">
                <br><input type="submit" value="MOSTRAR TUTORIA"></br>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>