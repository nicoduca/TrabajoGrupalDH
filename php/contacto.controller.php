<?php

if ($_POST)
{
    // nombre
    $nombre = trim($_POST['nombre']);
    if (strlen($nombre) > 20)
    {
      $errorNombre = "El nombre no puede tener mas de 20 caracteres";
    }

    // username
    $username = trim($_POST['username']);
    if (strlen($username) > 10)
    {
      $errorUsername = "El Username no puede tener mas de 10 caracteres";
    }

    // email
    $email = trim($_POST['email']);
    $validateEmail = filter_var($email, FILTER_VALIDATE_EMAIL);
    if ($validateEmail === false)
    {
      $errorEmail = "El email ingresado no es valido";
    }

    // password
    $password = $_POST['password'];
    if (strlen($password) < 7)
    {
      $errorPassword = "El Password debe tener como minimo 7 caracteres";
    }

    // validar Password
    if ($_POST['password'] != $_POST['confirmacionPassword'])
    {
      $errorValidacionPassword = "El Password y su confirmacion no coinciden";
    }

    // Sexo
    if ($_POST['sexo'] === "")
    {
      $errorSexo = "Es obligatorio elegir el sexo de la persona";
    }

    // Comentario Textarea
    $mensaje = trim($_POST['comentariosAdicionales']);
    $mensaje = filter_var($mensaje, FILTER_SANITIZE_STRING);
    if (strlen($mensaje) < 10)
    {
      $errorComentarios = "El mensaje debe tener al menos 10 caracteres";
    }

    // Particular o Empresa
    if ($_POST['terminosCondiciones'] === "")
    {
      $errorTerminosCondiciones = "Es obligatorio aceptar los terminos y condiciones";
    }

    if ($errorNombre =='' && $errorUsername =='' && $errorEmail =='' && $errorPassword =='' && $errorValidacionPassword =='' && $errorSexo =='' && $errorComentarios =='' && $errorComentarios =='') {
      header('Location: bienvenidoRegistro.php');
    }

}

 ?>
