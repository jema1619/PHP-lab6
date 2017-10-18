<?php
//PUT THIS HEADER ON TOP OF EACH UNIQUE PAGE
session_start();
if (!isset($_SESSION['adname'])) {
    header("Location: ../main_login.php");
    
}
?>
