<?php
  session_start();
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

      <form class="formularioRegistro" action="php/session.controller.php" method="post">
        <fieldset>
          <legend>Ingresar</legend>
          <p><label for="email">Email: <input type="email" name="email" id="email" size="30" maxlength="29" placeholder="Ingrese su email" required></label></p>
          <p><label for="password">Password: <input type="password" name="passwordLogin" id="password" size="30" maxlength="29" placeholder="Ingrese su password" required></label></p>
          <p class="botones"><input type="submit" value="Enviar"><input type="reset" value="Borrar"></p>
        </fieldset>
      </form>

      <?php include "tpl/partials/footer.php" ?> <!-- Include Footer Principal-->

    </div>
  </body>
</html>
