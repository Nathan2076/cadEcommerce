<?php
include("controller/conexao.php");

$descricao = $_POST["descricao"];
$cad_marca = "INSERT INTO marca(DESCRICAO) VALUES ('$descricao')";

echo "<h3>Descrição: $descricao</h3><br />";

// O mysqli_query retorna um valor booleano, tornando possível o uso de laços de condição. 
if (mysqli_query($mysqli, $cad_marca)) {
    echo "<h1>Nova categoria cadastrada com sucesso</h1><br />";
} else {
    echo "Erro: " . $cad_marca . "<br />" . mysqli_error($mysqli);
}

mysqli_close($mysqli);
?>