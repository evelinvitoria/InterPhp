<?php
  // Definições de conexão com o banco de dados
  define('HOST', 'localhost');
  define('USER', 'root');
  define('PASS', '');
  define('BASE', 'cadastro');

  // Conexão com o banco de dados
  $conn = new MySQLi(HOST, USER, PASS, BASE);

  // Verificar se a conexão foi bem-sucedida
  if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
  } 
?>
