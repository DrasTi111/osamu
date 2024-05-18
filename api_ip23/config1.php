<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');
header("Content-tepe: application/json; charset=utf-8");

try {
    $conn = new PDO("mysql:host=localhost;dbname=osamu;charset=utf8mb4", "root", "Bogdan2006");
}
catch (PDOException $e){
    echo 'Ошибка подключения к базе: ' . $e->getMessage();
}

?>