<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../CSS/text.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="../CSS/BaseArchivos.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="../Javascript/VentanasEmergentes.js"></script>
    <title>Test</title>
</head>

<body>
    <div class="ContenedorCentral d-flex justify-content-center">
        <div class="ContenedorIndex row d-flex justify-content-between">
            <div class="ContenedorLogoUni col-4">
                <img src="../Imagenes/ucc2.jpg">
            </div>
            <div class="InformacionFormulario col-4 d-flex justify-content-center">
                <h1><b>Titulo Formulario</b></h1>
            </div>
            <div class="ContenedorLogoOperacion col-4">
                <img src="../Imagenes/test.jpeg">
            </div>
            <div class="Contenido">
                <form id="msform" name="pregunta-form" method="POST" action="save-answer">

                    <p style="position:absolute; bottom: 542px;left: 330px;color: red;">Tiempo restante : <span
                            id="timer"></span></p>
                    <?php

                    if (count($pregunta) > 0) {
                        $counter = 1;
                        foreach ($pregunta as $quest) {
                    ?>
                    <fieldset style="bottom:90px" ;>
                        <hr />
                        <p style="text-align: left;">pregunta <?php echo $counter; ?> of <?php echo count($pregunta); ?>
                        </p>


                        <hr />
                        <div class="text-left">
                            <h4 class="quiz-heading"><?php echo $quest->pregunta; ?></h4>
                            <div class="quiz-row">

                                <div class="q-tab">
                                    <label class="radio">
                                        <input type="radio" value="option_1" name="pregunta_<?php echo $quest->id; ?>"
                                            class="ans-opt">
                                        <span class="outer"><span class="inner"></span></span>
                                        <?php echo $quest->option1; ?>
                                    </label>
                                </div>

                                <div class="q-tab">
                                    <label class="radio">
                                        <input type="radio" value="option_2" name="pregunta_<?php echo $quest->id; ?>"
                                            class="ans-opt">
                                        <span class="outer"><span class="inner"></span></span>
                                        <?php echo $quest->option2; ?>
                                    </label>
                                </div>

                                <div class="q-tab">
                                    <label class="radio">
                                        <input type="radio" value="option_3" name="pregunta_<?php echo $quest->id; ?>"
                                            class="ans-opt">
                                        <span class="outer"><span class="inner"></span></span>
                                        <?php echo $quest->option3; ?>
                                    </label>
                                </div>

                                <div class="q-tab">
                                    <label class="radio">
                                        <input value="option_4" type="radio" name="pregunta_<?php echo $quest->id; ?>"
                                            class="ans-opt">
                                        <span class="outer"><span class="inner"></span></span>
                                        <?php echo $quest->option4; ?>
                                    </label>
                                </div>

                            </div>
                        </div>
                        <hr />
                        <?php
                                if ($counter != 1) {
                                ?>

                        <?php }

                                if ($counter == count($pregunta)) { ?>

                        <input type="submit" name="submit" id="sbmtbtn" onclick="return submitAnswer();"
                            class="action-button" value="Submit" />
                        <?php } else {  ?>
                        <input type="button" name="next" id="defaultbtnnxt" class="next action-button" value="Next" />

                        <?php } ?>
                    </fieldset>
                    <?php $counter++;
                        }
                    } ?>
                    <input type="hidden" name="quizid" value="<?php echo $pregunta[0]->quiz_id; ?>">
                </form>





                <script type="text/javascript">
                function submitAnswer() {

                    let attempt = 0;
                    $(".ans-opt").each(function() {
                        if ($(this).prop("checked")) {
                            attempt++;
                        }
                    });
                    if (confirm('Puntuación final : ' + attempt + '\n Are you sure to submit your answer ?'))

                        return true;

                    else
                        return false;
                }
                </script>

            </div>
        </div>
    </div>
</body>



<?php
$count_down = $time[0]->quiz_duration;
$duration = trim($count_down, 'min');
?>

<div class="footer fixed-bottom d-flex justify-content-center">
    <div class="fixed-left">
        <img src="../Imagenes/ucc.jpg" alt="ImagenUcc">
    </div>
    <p>
        <b>Universidad Cooperativa de Colombia</b><br>
        Todos los derechos reservados - Bogotá - Colombia - 2022<br>
        Realizado por estudiantes de Ingenieria de Sistemas - Diseño Orientado A Objetos
    </p>
    <div class="fixed-right">
        <img src="../Imagenes/ucc2.jpg" alt="ImagenUcc">
    </div>
</div>





</html>