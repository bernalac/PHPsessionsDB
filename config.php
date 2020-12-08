<?php
define('USER', 'javier');
define('PASSWORD', 'javier');
define('HOST', 'localhost');
define('DATABASE', 'Usuario');
 
try {
    $connection = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASSWORD);
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}
?>
