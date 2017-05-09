<?php


$errorNombre = "";
$errorUsername = "";
$errorEmail = "";
$errorPassword = "";
$errorValidacionPassword = "";
$errorSexo = "";
$errorTerminosCondiciones = "";
$errorComentarios = "";
$nombre = "";
$username = "";
$email = "";
$comentariosAdicionales = "";
$errorImagen = "";

if ($_POST)
{
    // nombre
    $nombre = trim($_POST['nombre']);
    if (strlen($nombre) > 20)
    {
      $errorNombre = "El nombre no puede tener mas de 20 caracteres";
    }

    if (isset($nombre))
    {
      $nombre = $nombre;
    }

    // username
    $username = trim($_POST['username']);
    if (strlen($username) > 10)
    {
      $errorUsername = "El Username no puede tener mas de 10 caracteres";
    }

    if (isset($username))
    {
      $username = $username;
    }

    // email
    $email = trim($_POST['email']);
    $validateEmail = filter_var($email, FILTER_VALIDATE_EMAIL);
    if ($validateEmail === false)
    {
      $errorEmail = "El email ingresado no es valido";
    }

    if (isset($email))
    {
      $email = $email;
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
    $sexo = $_POST['sexo'];
    if ($sexo === "")
    {
      $errorSexo = "Es obligatorio elegir el sexo de la persona";
    }

    if ($sexo == "masculino")
    {
      $sexo = "Masculino";
    } else
      {
        $sexo = "Femenino";
      }


    // Particular o Empresa
    $particularEmpresa = $_POST['particularEmpresa'];

    if ($particularEmpresa == "particular")
    {
      $particularEmpresa = "Particular";
    } else
      {
        $particularEmpresa = "Empresa";
      }

    // Comentario Textarea
    $mensaje = trim($_POST['comentariosAdicionales']);
    $mensaje = filter_var($mensaje, FILTER_SANITIZE_STRING);
    if (strlen($mensaje) < 10)
    {
      $errorComentarios = "El mensaje debe tener al menos 10 caracteres";
    }

    if (isset($mensaje))
    {
      $comentariosAdicionales = $mensaje;
    }

    // Particular o Empresa
    if ($_POST['terminosCondiciones'] === "")
    {
      $errorTerminosCondiciones = "Es obligatorio aceptar los terminos y condiciones";
    }

    // Donde escuchaste de nosotros
    $dondeEscuchaste = $_POST['dondeEscuchaste'];


    // Subir foto de Perfil

    $nombreImg = "";
    if ($_FILES['avatar']['error'] == UPLOAD_ERR_OK)
    {
      $nombreImg = $_POST['username'];
      $nombreReal = $_FILES['avatar']['name'];
      $extension = pathinfo($nombreReal, PATHINFO_EXTENSION);
      $archivoImg = $_FILES['avatar']['tmp_name'];
      $miImagen = __DIR__ . '/images/perfil/' . $nombreImg . '.' . $extension;
      //move_uploaded_file($archivoImg, $miImagen);

          if ($extension === "png" || $extension === "jpg")
          {
            move_uploaded_file($archivoImg, $miImagen);

          } else
            {
              $errorImagen = "Solo aceptamos PNG y JPG";
            }

    }  else
      {
        $errorImagen = "No se pudo subir la foto";
      }


    // Hacer el envio si todo esta correcto y agregarlo a JSON
    if ($errorNombre =='' && $errorUsername =='' && $errorEmail =='' && $errorPassword =='' && $errorValidacionPassword =='' && $errorSexo =='' && $errorComentarios =='' && $errorComentarios =='' && $errorImagen =='')
    {
      header('Location: bienvenidoRegistro.php');

      $nuevoUsuario = [
        'Nombre' => $nombre,
        'Username' => $username,
        'Email' => $email,
        'Password' => $password,
        'Sexo' => $sexo,
        'Mensaje' => $mensaje,
        'Rubro' => $particularEmpresa,
        'DondeEsuchaste' => $dondeEscuchaste
      ];

      $jsonNuevousuario = json_encode($nuevoUsuario);

      file_put_contents('nuevosUsuarios.txt', $jsonNuevousuario. PHP_EOL, FILE_APPEND | LOCK_EX);
    } else
    {
      header('Location: ../registrarse.php');
    }

}
