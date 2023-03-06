<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = '2a29';
try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", 
    $username, $password,
    [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
    // pour fermer la connection
    // $pdo = null;
    // echo 'connected to database successfully!';
} catch (PDOException $e) {
    echo 'connection failed! '.$e->getMessage();
}
