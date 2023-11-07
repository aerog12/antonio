<?php
// Array con usuarios y contraseñas permitidas (esto es solo para fines de demostración)
$usuarios = array(
    "usuario1" => "contrasena1",
    "usuario2" => "contrasena2"
);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["user"];
    $contrasena = $_POST["passwd"];

    // Verificar si el usuario y la contraseña son correctos
    if (array_key_exists($usuario, $usuarios) && $usuarios[$usuario] == $contrasena) {
        // Inicio de sesión exitoso, redirigir al usuario a la página de bienvenida
        header("Location: bienvenido.php");
        exit();
    } else {
        echo "<div>";
        echo "<p>Inicio de sesión fallido. Por favor, verifica tus credenciales.</p>";
        echo "<br>";
        echo '<a href="index.php">Volver a login</a>';
        echo "</div>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesFallo.css">
    <title>Document</title>
</head>
<body>
    
</body>
</html>




