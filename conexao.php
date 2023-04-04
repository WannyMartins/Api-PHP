<?php

//Variáveis de acesso

$url = "localhost";
$usuario = "root";
$senha = "";
$base = "api";

//conexão

$conexao = mysqli_connect($url, $usuario, $senha, $base);

if (!$conexao) {
    echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
 


//Arrumar caracteres especiais

mysqli_set_charset($conexao, "utf8");

?>