<?php
session_start();
include('db.php');
$usuario=$_POST['usuario'];
$password=$_POST['password'];



$consulta="SELECT*FROM usuarios where usuario='$usuario' and password='$password'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
  $_SESSION['userLogin'] = "Loggedin";
    header("location:home.php");
    

}else{
    ?>
    <?php
    include("index.html");

  ?>
  <h1 class="bad">Error de autenticación </h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);