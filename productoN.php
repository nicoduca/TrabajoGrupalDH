<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ducakes - Producto N</title>
    <?php include "tpl/partials/head.php" ?>
  </head>
  <body>
    <div class="containerGeneral"> <!-- Abre Container General-->

      <?php include "tpl/partials/header.php" ?> <!-- Include header Principal-->

      <article class="productoN">
        <h2>Torta Marroc</h2>
            <div class="prod_N">
                <div class="imagenProd_N">
                    <img src="images/imagennuevoProd_1.jpg" alt="Torta Nueva Ducakes">
                </div>
            </div>

            <div class="prod_Descripcion">
                <div class="descripcionProducto">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                    <span class="precioHome">$300</span>
                <div class="agregarCarrito">
                    <a onclick="document.getElementById('id02').style.display='block'" class="pepe">Agregar al Carrito</a>
                </div>
            </div>

            <!-- The Modal -->
          <div id="id02" class="modal">
            <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>

            <!-- Modal Content -->
            <form class="modal-content animate" action="" method="post">
                <div class="imgcontainer">
                    <img src="images/imagennuevoProd_1.jpg" alt="Torta Nueva Ducakes" class="avatar">
                </div>
                    <h3>Torta Marroc</h3>
                <div class="containerProd">
                    <label><b>Cantidad</b></label>
                    <input type="text" name="productoN" required>
                    <button type="submit">Agregar</button>
                </div>

                <div class="container" style="background-color:#f1f1f1">
                    <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancelar</button>
                </div>
            </form>
          </div>

          <script>
          var modal = document.getElementById('id02');
          window.onclick = function(event)
          {
            if (event.target == modal)
            {
              modal.style.display = "none";
            }
          }
          </script>

          <?php include "tpl/partials/footer.php" ?> <!-- Include Footer Principal-->

    </div>
  </body>
</html>
