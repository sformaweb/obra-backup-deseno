<?php
  session_start();
  unset($_SESSION['usuario']);
  unset($_SESSION['estado']);
  session_destroy();
  header("location:login.php");
?>