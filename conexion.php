<?php
    $pdo = new PDO('mysql:host=localhost;dbname=conexion_gym_db', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>