<html>
<head>

</head>
<body>
    <?php
        $idpregunta = $_REQUEST['idpregunta'];
        $idusu = $_REQUEST['idusu'];
        $Comentario = $_POST['P'.$idpregunta];

    ?>
        <h1>Datos: <?php echo $idpregunta;
            echo $idusu;
            echo $Comentario; ?></h1>
    <?php
    
    ?>
</body>

</html>