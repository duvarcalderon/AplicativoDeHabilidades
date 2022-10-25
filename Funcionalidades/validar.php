<?php
$correo=$_POST['correo'];
$password=$_POST['password'];

$conexion=new mysqli("localhost","root","","desarrollo");
$consulta= " SELECT * FROM registro WHERE correo = '".$correo."' and password = '".$password."'";
$resultado = $conexion->query($consulta);
$rows=mysqli_num_rows($resultado);
if ($rows > 0) {
  if (($correo=='administrador@ucc.com.co')&&($password=='administradorucc')) {
          header('Refresh: 1; URL=tregistrados.php');

      echo  '<script>
      alert("Bienvenido Admministrador UCC,espere un momento");
      </script>';
      exit;
  }else{

    if($correo=$_POST['correo'] && $password=$_POST['password']){

            header('Refresh: 1; URL=../indexCuerpo.php');

      echo  '<script>
      alert("Bienvenido Estudiante UCC,espere un momento");
      </script>';
      exit;
    }
  }
}else{
  header('Refresh: 1; URL=regusuario.php');
  echo  '<script>
  alert("Usuario no registrado ... Lo invitamos a REGISTARSE");
  </script>';
  exit;
}

?>