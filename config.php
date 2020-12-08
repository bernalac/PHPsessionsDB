<?php
define('USER', 'usernameDB');
define('PASSWORD', 'passwordDB');
define('HOST', 'localhost');
define('DATABASE', 'Usuario');
 
try {
    $connection = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASSWORD);
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}
?>
