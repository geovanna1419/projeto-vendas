<?php

$servername = "localhost"; 
$username = "usuario";      
$password = "senha";       
$dbname = "vendas";         

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
echo "Conexão bem-sucedida!";
?>