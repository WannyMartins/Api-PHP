<?php
//criar conexão

include("conexao.php");

//SQL

$sql = "SELECT * FROM cursos";

//Executar

$executar = mysqli_query($conexao, $sql);

//Vetor para o laço de repetição

$cursos = [];

//Indice

$indice = 0;

//laço

while($linha = mysqli_fetch_assoc($executar)){
    $cursos[$indice]['idCurso'] = $linha['idCurso'];
    $cursos[$indice]['nomeCurso'] = $linha['nomeCurso'];
    $cursos[$indice]['valorCurso'] = $linha['valorCurso'];

    $indice++;

}

//Json === encapsular no json

json_encode(['cursos' => $cursos]);


//var_dump($cursos)
?>