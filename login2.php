<!-- The Modal  Este es el Login Ventana Aparte-->
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'"class="close" title="Close Modal">&times;</span>
    <!-- Comienzo Modal Content -->
    <form class="modal-content animate" action="php/session.controller.php" method="post">
        <div class="imgcontainer">
          <img src="images/logo.png" alt="Avatar" class="avatar">
        </div>

        <div class="container">
            <label><b>E-mail</b></label>
            <input type="text" placeholder="Enter email" name="email" required>

            <label><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>

            <button type="submit">Login</button>
            <input type="checkbox" checked="checked" name="recordarme"> Recordarme
        </div>

        <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancelar</button>
            <span class="psw">Olvidaste tu <a href="#">Password?</a></span>
        </div>
    </form>
    <!-- FIN Modal Content -->
  </div>


<script>
  // Para que la ventana se cierre desde cualquier parte
  var modal = document.getElementById('id01');

  window.onclick = function(event)
  {
    if (event.target == modal)
    {
      modal.style.display = "none";
    }
  }
</script>
