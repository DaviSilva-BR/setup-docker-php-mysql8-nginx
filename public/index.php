<?php

$server = 'db'; // Se colocar localhost não irá conectar, pois o container está com o nome mrb-mysql
$user = 'admin';
$pass = 'admin@123';
$db = 'teste_local'; // Mude para o nome do seu banco

try {
    $pdo = new PDO("mysql:host=$server;dbname=$db;charset=utf8", $user, $pass);
    
    $sql = "SELECT * FROM teste ORDER BY id";
                foreach ($pdo->query($sql) as $row) {
                echo "<option value='".$row['name']."'>".$row['name']."</option>";
                 
                }

} catch (PDOException $err) {
    $msg = $err->getMessage();
    echo "Erro ao conectar no banco de dados: $msg";
}