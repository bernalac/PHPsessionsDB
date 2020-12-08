<?php
 
include('config.php');
session_start();
 
if (isset($_POST['login'])) {
 
    $username = $_POST['username'];
    $password = $_POST['password'];
 
    $query = $connection->prepare("SELECT * FROM users WHERE username=:username");
    $query->bindParam("username", $username, PDO::PARAM_STR);
    $query->execute();
 
    $result = $query->fetch(PDO::FETCH_ASSOC);
 
    if (!$result) {
        echo '<p class="error">La combinación de la contraseña es errónea</p>';
    } else {
        if (password_verify($password, $result['password'])) {
            $_SESSION['user_id'] = $result['ID'];
            echo '<p class="success">Felicidades, estás logueado</p>';
        } else {
            echo '<p class="error">La combinación de la contraseña es errónea o el usuario no existe</p>';
            
        }
    }
    echo "<a href=\"login.html\">Volver</a>";
}
 
?>
