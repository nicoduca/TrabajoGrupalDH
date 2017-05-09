<?php
if ( !isset($_SESSION['email']) && isset($_COOKIE['email'])) {
  $_SESSION['email'] = $_COOKIE['email'];
}
?>
