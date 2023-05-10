<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = $_POST["usuario"];
  $password = $_POST["password"];

  echo "<h2>Hola tu nombre es: $nombre</h2>";
  echo "<h2>Tu contraseña es: $password</h2>";
}
?>
