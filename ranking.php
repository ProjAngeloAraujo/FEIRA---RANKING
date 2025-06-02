<?php

$link = mysqli_connect("localhost", "root", "", "Ranking");
if (!$link) {
    exit('Erro na conexão com o banco.');
}

$sql = "SELECT DISTINCT nome FROM votos";
$result = mysqli_query($link, $sql);

// Verifica se a consulta retornou resultados
if (mysqli_num_rows($result) > 0) {
    // Exibe os nomes únicos dos projetos
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Projeto: " . $row["nome"] . "<br>";
    }
} else {
    echo "Nenhum nome encontrado.";
}

?>