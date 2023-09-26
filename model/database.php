<?php
    $dsn = 'mysql:host=localhost;dbname=product';
    $username = 'root';
    $password = 'ntbd2006';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>