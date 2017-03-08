<?php
    $dsn = 'mysql:host=sql2.njit.edu;dbname=la92';
    $username = 'la92';
    $password = '06CLHiUFj';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>
