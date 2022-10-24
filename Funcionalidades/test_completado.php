 <!DOCTYPE html>
 <html lang="es">

 <head>
     <meta charset="UTF-8" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <link rel="stylesheet" href="../CSS/test.css" />
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
                 <img src="../Imagenes/Mapa mental.png">
             </div>
             <div class="Contenido">
                 <div id="printThis">
                     <div class="container">
                         <center>
                             <h3>Felicidades!</h3>
                         </center>
                         <br>
                         <center>
                             <h5>Has acabado el quiz</h5>
                         </center>
                         <br>

                         <table>
                             <tr>
                                 <th>Pregunta</th>
                                 <th>Respuesta</th>
                             </tr>

                             <tr>
                                 <td>Numero de intentos</td>
                                 <td><?php echo count($resultado); ?></td>

                             </tr>
                             <tr>
                                 <td>Respuestas correctas: </td>
                                 <td><?php echo count($correctas); ?></td>

                             </tr>
                         </table>

                         <br>
                         <br>

                         <center><input type="submit" value="Print" id="btnPrint" name="prnt" class="btn btn-primary">
                         </center>

                     </div>
                 </div>
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