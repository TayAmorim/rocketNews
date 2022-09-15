<?php

$host = 'localhost';
$user = 'root';
$pass = 'I0%SHd49';
$dbname = 'rocketnews';
$port = 3306;

try {
  $conn = new PDO("mysql:host=$host;port=$port;dbname=" . $dbname, $user, $pass,);
  //echo "Conexão com banco de Dados realizados com Sucesso";
} catch (PDOException $eer) {
  //echo "Error: Conexão com banco de dados não realizado com sucesso. Erro gerado" . $eer->getMessage();
}
