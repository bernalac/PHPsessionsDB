<?php
session_start();
 
if(!isset($_SESSION['user_id'])){
    header('Location: login.html');
    exit;
} else {
    echo "Puedes verlo, funciona <br><br>";
    echo $_SESSION['user_id'];
    echo '<br>';
}
echo "<a href=\"login.html\">Volver</a>";
?>
