<?php
include("controller/conexao.php");

// Pega a categoria fornecida pelo usuário e a insere na tabela "categoria".
$descricao = $_POST["descricao"];
$cad_categoria = "INSERT INTO categoria(DESCRICAO) VALUES ('$descricao')";

echo "<h3>Descrição: $descricao</h3><br />";

if (mysqli_query($mysqli, $cad_categoria)) {
    echo "<h1>Nova categoria cadastrada com sucesso</h1><br />";
} else {
    echo "Erro: " . $cad_categoria . "<br />" . mysqli_error($mysqli);
}

mysqli_close($mysqli);
?>