<?php
session_start();

$_SESSION['email'] = $_POST['email'];

if (isset($_POST['recordarme']))
{
  $tiempoAbierto = time() + 60 * 60 * 3;
  setcookie('email', $_POST['email'], $tiempoAbierto, '/');
}

header('Location: ../index.php');


 ?>
