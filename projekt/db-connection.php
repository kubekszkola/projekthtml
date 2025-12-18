<?php

$host = 'localhost';
$dbname = 'MOJABAZAMOJABAZA';
$user = 'admin';
$pass = 'admin';

$dsn = "mysql:host=$host;dbname=$dbname;";

$pdo = new PDO($dsn, $user, $pass);

try{
    $pdo = new PDO($dsn, $user, $pass);
} catch( PDOException $e){
    echo "Polaczenie nieudane: " . $e->getMessage();
}