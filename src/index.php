<?php
$host = 'mysql';
$db = 'testdb';
$user = 'root';
$pass = '123456';

try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    echo "<h1>Hola Mundo</h1>";
    echo "<p>Conexión a la base de datos exitosa</p>";
} catch (PDOException $e) {
    echo "<h1>Error de conexión</h1>";
    echo "<p>" . $e->getMessage() . "</p>";
}
?>
