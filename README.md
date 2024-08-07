<h1 align="center">CadEcommerce</h1>
<p align="center">
  <img alt="Exemplo" src="docs/Exemplo.gif" />
</p>
<br />

## Sobre

Um projeto de E-commerce com cadastro de produtos, categorias e marcas, realizado nas aulas de Programação Web II.

<img src="docs/Pedido.png" alt="Exemplo de pedido" width="49.9%" />
<img src="docs/Carrinho.png" alt="Tela de carrinho" width="49.9%" />
<img src="docs/Pedidos.png" alt="Banco de dados pedidos" width="49.9%" />
<img src="docs/Produtos.png" alt="Banco de dados produtos" width="49.9%" />

## Métodos

### [mysqli_connect](https://www.php.net/manual/en/mysqli.construct.php)

Usado para abrir uma conexão ao Servidor MySQL.

Exemplo:

`mysqli_connect.php`
```php
<?php

$server = "localhost";
$admin  = "treinador";
$senha  = "admin1234";
$banco  = "futebolfc";

$mysqli = mysqli_connect($server, $admin, $senha, $banco);

?>
```

### [include](https://www.php.net/manual/en/function.include.php) / [include_once](https://www.php.net/manual/en/function.include-once.php)

Inclui o arquivo especificado ao arquivo atual, permitindo o uso de variáveis e métodos definidos no arquivo a ser incluído.
Ao usar `include_once`, apenas inclui o arquivo uma vez, caso ele já não tenha sido incluído.

[Exemplo](https://www.everdeveloper.com.br/diferenca-entre-include-include-once-require-e-require-once-php):

`variaveis.php`
```php
<?php

$nome    = "Nathan";
$serie   = 3;
$materia = "Programação Web II";

?>
```

`include.php`
```php
<?php

include("variaveis.php");

echo "Olá, $nome. Você está no $serie ano e está estudando $materia.";
// Olá, Nathan. Você está no 3 ano e está estudando Programação Web II.

?>
```

### [mysqli_query](https://www.php.net/manual/en/mysqli.query.php)

Executa um código SQL no banco de dados especificado

Exemplo:

```php
<?php

include("mysqli_connect.php");

mysqli_query($mysqli, "CREATE TABLE jogadores (id INT PRIMARY KEY NOT NULL AUTO_INCREMENT, nome VARCHAR(255), time VARCHAR(255), camisa INT)");
mysqli_query($mysqli, "INSERT INTO jogadores (nome, camisa) VALUES ('Neymar JR', 10)");

?>
```

### [mysqli_error](https://www.php.net/manual/en/function.mysql-error.php)

Retorna o erro da última função SQL executada.

Exemplo:

```php
<?php

include("mysqli_connect.php");

mysqli_query($mysqli, "INSERT INTO treinadores (nome, idade) VALUES ('Tite', 63)");

echo mysqli_error($mysqli);
// Table 'futebolfc.treinadores' doesn't exist

?>
```

### [mysqli_affected_rows](https://www.php.net/manual/en/mysqli.affected-rows.php)

Obtém o número de linhas afetadas em uma operação MySQL anterior.

Exemplo:

```php
<?php

include("mysqli_connect.php");

mysqli_query($mysqli, "INSERT INTO jogadores (nome, camisa) VALUES ('Richarlison', 9)");

if (mysqli_affected_rows($mysqli) != 0) {
    echo "O insert foi bem-sucedido";
} else {
    echo "Houve um erro ao executar o último código SQL";
}

// O insert foi bem-sucedido.

?>
```

### [mysqli_close](https://www.php.net/manual/en/mysqli.close.php)

Fecha uma conexão previamente aberta com um banco de dados.

Exemplo:

```php
<?php

include("mysqli_connect.php");

mysqli_query($mysqli, "DELETE FROM jogadores WHERE nome = 'Neymar JR'");

mysqli_close($mysqli);

?>
```

## Tecnologias Utilizadas

- ✅ PHP
- ✅ HTML
- ✅ CSS
- ✅ JS
