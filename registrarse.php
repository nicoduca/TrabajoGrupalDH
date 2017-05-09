<?php
session_start();


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
    if ($errorNombre =='' && $errorUsername =='' && $errorEmail =='' && $errorPassword =='' && $errorValidacionPassword =='' && $errorSexo =='' && $errorComentarios =='' && $errorComentarios =='' && $errorImagen =='') {
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
    }

}

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ducakes - Tortas / Alfajores / Cuadrados / Dulces y mucho mas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include "tpl/partials/head.php" ?>
  </head>
  <body>
    <div class="containerGeneral"> <!-- Abre Container General-->

      <?php include "tpl/partials/header.php" ?> <!-- Include header Principal-->

      <form class="formularioRegistro" action="" method="post" enctype="multipart/form-data">
        <fieldset>
          <legend>Datos Personales</legend>
          <p><label for="nombre">* Nombre: <input type="text" name="nombre" id="nombre" placeholder="Ingrese su nombre" size="30" maxlength="29" value="<?php  echo($nombre);?>" required></label></p>
          <span><?php echo ($errorNombre); ?></span>
          <p><label for="username">* Username: <input type="text" name="username" id="username" size="20" maxlength="19" placeholder="Ingrese su Username" value="<?php  echo($username);?>" required></label></p>
          <span class="erroresformulario"><?php echo ($errorUsername); ?></span>
          <p><label for="email">* Email: <input type="email" name="email" id="email" size="30" maxlength="29" placeholder="Ingrese su email" value="<?php  echo($email);?>" required></label></p>
          <span><?php echo ($errorEmail); ?></span>
          <p><label for="password">* Password: <input type="password" name="password" id="password" size="30" maxlength="29" placeholder="Ingrese su password" required></label></p>
          <span><?php echo ($errorPassword); ?></span>
          <p><label for="confirmacionPassword">* Confirmar Password: <input type="password" name="confirmacionPassword" id="confirmacionPassword" size="30" maxlength="15" placeholder="Confirme su password" required></label></p>
          <span><?php echo ($errorValidacionPassword); ?></span>
          <p><label for="sexo">* Sexo: <input type="radio" name="sexo" value="masculino" required>Masculino<input type="radio" name="sexo" value="femenino" required>Femenino</label></p>
          <span><?php echo ($errorSexo); ?></span>
          <p><label for="fotoPerfil">Foto Perfil: <input type="file" name="avatar" value="<?php echo ($errorImagen); ?>"></label></p>
        </fieldset><br>

        <fieldset>
          <legend>Consultas Generales</legend>
          <p><label for="dondeEscuchaste">Donde nos conociste?</label>
            <select name="dondeEscuchaste" id="dondeEscuchaste">
                <option value="internet">Internet</option>
                <option value="amigo">Amigo</option>
                <option value="diario">Diario</option>
                <option value="otro">Otro</option>
           </select>
          </p>
          <p>Sos Particular o Empresa?
            <label><input type="radio" name="particularEmpresa" value="particular">Particular</label>
            <label><input type="radio" name="particularEmpresa" value="empresa">Empresa</label>
          </p>
          <p><textarea name="comentariosAdicionales" rows="8" cols="40" placeholder="Comentarios Adicionales" value="<?php  echo($comentariosAdicionales);?>"></textarea><br>
          </p>
          <span><?php echo ($errorComentarios); ?></span>
          <p>Todos los campos con * son obligatorios</p>
          <label><input type="checkbox" name="terminosCondiciones" value="terminosCondiciones" required>He leido y acepto los terminos y condiciones de uso</label>
          <span><?php echo ($errorTerminosCondiciones); ?></span>
          <p class="botones"><input type="submit" value="Enviar"><input type="reset" value="Borrar"></p>
        </fieldset>
      </form>

      <?php include "tpl/partials/footer.php" ?> <!-- Include Footer Principal-->

    </div>
  </body>
</html>
