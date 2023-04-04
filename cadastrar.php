<?php

//incluir conexão
include('conexao.php');

//Obter Dados

$obterDados = file_get_contents("php://input");

//extrair dados do json

$extrair = json_decode($obterDados);

//separar os dados do json

$nomeCurso = $extrair->cursos->nomeCurso;
$valorCurso = $extrair->cursos->valorCurso;

//SQL

$sql = "INSERT INTO cursos (nomeCurso, valorCurso) VALUES ('$nomeCurso', $valorCurso)";
mysqli_query($conexao, $sql);

//exportar os dados que queremos incluir no banc de dados

$curso = [
    'nomeCurso' => $nomeCurso,
    'valorCurso' => $valorCurso
]

json_encode(['curso'] => $curso);

?>