<?php
session_start();
session_destroy();    // Destruye la session
setcookie('email', $_POST['email'], -1, '/');   // Destruye la Cookie

header('Location: ../index.php');

 ?>
