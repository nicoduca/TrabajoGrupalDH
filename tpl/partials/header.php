<header> <!-- Abre header Principal-->

<img src="images/1.jpg" alt="" class="imageBanner">    <!-- Imagen fondo del header -->

<div class="menuTotal">

    <div class="logoPrincipal">
      <a href="#"><img src="images/logo.png" alt="Panni DH"></a>
    </div>

    <div class="main-login">  <!-- Abre Menu Registro/Login Principal-->
      <ul>
          <?php if(!isset($_SESSION['email'])): ?>
              <li><a href="registrarse.php"><?php echo "Registrarse"; ?></a></li>
              <li><a onclick="document.getElementById('id01').style.display='block'">Login</a></li>
          <?php endif; ?>
          <?php if(isset($_SESSION['email'])): ?>
              <li><a href="php/cerrarSesion.controller.php"><?php echo "Cerrar Sesion"; ?></li>
          <?php endif; ?>
          <?php if(isset($_SESSION['email'])): ?>
              <li>Bienvenido: <?php echo $_SESSION['email']; ?></li>
          <?php endif; ?>
          <!--<li><a href="php/cerrarSesion.controller.php">Cerrar Sesion</a></li>-->
      </ul>
    </div>  <!-- Cierra Menu Registro/Login Principal-->


    <nav class="flexy-nav"> <!-- Abre Menu Principal-->
      <ul id="flexy-nav__items" class="flexy-nav__items">
          <li class="flexy-nav__item"><a href="index.php" class="flexy-nav__link">Home</a></li>
          <li class="flexy-nav__item"><a href="productos.php" class="flexy-nav__link">Productos</a></li>
          <li class="flexy-nav__item"><a href="nosotros.php" class="flexy-nav__link">Nosotros</a></li>
          <li class="flexy-nav__item"><a href="contacto.php" class="flexy-nav__link">Contacto</a></li>
      </ul>
    </nav> <!-- Cierra Menu Principal-->


    <!-- Abre Menu Toogle para Tablet y Phones-->
    <input type="checkbox" class="checkbox" id="menu-toogle"/>
    <label for="menu-toogle" class="menu-toogle"></label>
      <nav class="nav">
          <a href="index.php" class="nav__item current">Home</a>
          <a href="productos.php" class="nav__item">Productos</a>
          <a href="nosotros.php" class="nav__item">Nosotros</a>
          <a href="contacto.php" class="nav__item">Contacto</a>
      </nav>
      <!-- Cierra Menu Toogle para Tablet y Phones-->
</div>

<?php include "login2.php" ?> <!-- Include Login Ventana aparte-->



</header> <!-- Cierra header Principal-->
