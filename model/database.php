<?php
    $dsn = 'mysql:host=localhost;dbname=my_guitar_shop1';
    $username = 'rjs76';
    $password = 'Dualshock77';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>