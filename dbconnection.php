<?php
$servername = "localhost";
$username = "ticket_user"; // Nuevo usuario
$password = "123456789"; // Contraseña del nuevo usuario
$dbname = "crm_gestion";

// Crear conexión
$con = mysqli_connect($servername, $username, $password, $dbname);

// Verificar conexión
if (mysqli_connect_errno()) {
    echo "Connection failed: " . mysqli_connect_error();
}
?>
