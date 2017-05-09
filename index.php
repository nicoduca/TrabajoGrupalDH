<?php
session_start();
include "php/cookies.controller.php";
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ducakes - Tortas / Alfajores / Cuadrados / Dulces y mucho mas</title>
    <?php include "tpl/partials/head.php" ?>
  </head>
  <body>
    <div class="containerGeneral"> <!-- Abre Container General-->

      <?php include "tpl/partials/header.php" ?> <!-- Include header Principal-->

      <article class="nuevosProductos">
        <h2>Algunas de Nuestras Nuevas Tortas</h2>
        <div class="subNuevosProductos">

                <div class="nuevoProd_1">
                    <div class="imagennuevoProd_1">
                        <a href="productoN.php"><img src="images/imagennuevoProd_1.jpg" alt="Torta Nueva Ducakes"></a>
                    </div>
                        <h3>Marroc</h3>
                        <span class="precioHome">$300</span>
                      <div class="agregarCarrito">
                        <a href="#" class="pepe">Agregar al Carrito</a>
                      </div>
                </div>

                <div class="nuevoProd_2">
                    <div class="imagennuevoProd_2">
                        <img src="images/imagennuevoProd_2.jpg" alt="Torta Nueva Ducakes">
                    </div>
                        <h3>Mashmellous</h3>
                        <span class="precioHome">$350</span>
                    <div class="agregarCarrito">
                        <a href="#" class="pepe">Agregar al Carrito</a>
                    </div>
                </div>

                <div class="nuevoProd_3">
                    <div class="imagennuevoProd_3">
                        <img src="images/imagennuevoProd_3.jpg" alt="Torta Nueva Ducakes">
                    </div>
                        <h3>Dulce de Leche</h3>
                        <span class="precioHome">$280</span>
                    <div class="agregarCarrito">
                        <a href="#" class="pepe">Agregar al Carrito</a>
                    </div>
                </div>

                <div class="nuevoProd_4">
                    <div class="imagennuevoProd_4">
                        <img src="images/imagennuevoProd_4.jpg" alt="Torta Nueva Ducakes">
                    </div>
                        <h3>Kit Kat</h3>
                        <span class="precioHome">$300</span>
                    <div class="agregarCarrito">
                        <a href="#" class="pepe">Agregar al Carrito</a>
                    </div>
                </div>
        </div>
      </article>

      <article class="cuadradosAlfajores">
        <h2>Algunas de Nuestros Alfajores / Brownies / Cuadrados</h2>
        <div class="subCuadrados">

                <div class="cuadrado_1">
                    <div class="imagenCuadrado_1">
                        <img src="images/imagenCuadrado_1.jpg" alt="">
                    </div>
                        <h3>Brownie</h3>
                        <span class="precioHome">$150 x 5 unidades</span>
                      <div class="agregarCarrito">
                        <a href="#">Agregar al Carrito</a>
                      </div>
                </div>

                <div class="cuadrado_2">
                    <div class="imagenCuadrado_2">
                        <img src="images/imagenCuadrado_2.jpg" alt="">
                    </div>
                        <h3>Alfajor de Maicena</h3>
                        <span class="precioHome">$170 x 5 unidades</span>
                      <div class="agregarCarrito">
                        <a href="#">Agregar al Carrito</a>
                      </div>
                </div>

                <div class="cuadrado_3">
                    <div class="imagenCuadrado_3">
                        <img src="images/imagenCuadrado_3.jpg" alt="">
                    </div>
                        <h3>Cuadrado Manzana</h3>
                        <span class="precioHome">$200 x 5 unidades</span>
                      <div class="agregarCarrito">
                        <a href="#">Agregar al Carrito</a>
                      </div>
                </div>

                <div class="cuadrado_4">
                    <div class="imagenCuadrado_4">
                        <img src="images/imagenCuadrado_4.jpg" alt="">
                    </div>
                        <h3>Alfajor de Manteca</h3>
                        <span class="precioHome">$190 x 5 unidades</span>
                      <div class="agregarCarrito">
                        <a href="#">Agregar al Carrito</a>
                      </div>
                </div>
        </div>
      </article>

      <article class="comentarios">
        <img src="images/2.jpg" alt="Imagen Utensillos de Pasteleria" class="imageBanner2">
          <div class="comentariosClientes">
              <h3>Comentarios de Nuestros Clientes</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
      </article>

        <?php include "tpl/partials/footer.php" ?> <!-- Include Footer Principal-->

    </div>
  </body>
</html>
