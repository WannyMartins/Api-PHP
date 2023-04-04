<?php

//incluir conexão
include('conexao.php');

//Obter Dados

$obterDados = file_get_contents("php://input");

//extrair dados do json

$extrair = json_decode($obterDados);

//separar os dados do json

$idCurso = $extrair->cursos->idCurso;
$nomeCurso = $extrair->cursos->nomeCurso;
$valorCurso = $extrair->cursos->valorCurso;

//SQL

$sql = "UPDATE cursos SET nomeCurso='$nomeCurso', valorCurso=$valorCurso WHERE idCurso=$idCurso";
mysqli_query($conexao, $sql);

//exportar os dados que queremos incluir no banc de dados

$curso = [
    'idCurso' => $idCurso,
    'nomeCurso' => $nomeCurso,
    'valorCurso' => $valorCurso
]

json_encode(['curso'] => $curso);

?>