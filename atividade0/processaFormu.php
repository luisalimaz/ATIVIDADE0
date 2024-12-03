<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <title>Dados do Cadastro</title>
</head>
<body>

    <nav>
        <a href="index.php">Home</a> |
        <a href="formulario.php">Formulário</a> |
        <a href="sobre.php">Sobre</a>
    </nav>
    
    <h1>Dados Recebidos do Formulário</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = htmlspecialchars($_POST["nome"]);
        $idade = (int) $_POST["idade"];
        $altura = (float) $_POST["altura"];
        $peso = (float) $_POST["peso"];
        
        echo "<p>Nome do Cliente: $nome</p>";
        echo "<p>Idade do Cliente: $idade</p>";
        echo "<p>Altura do Cliente: $altura m</p>";
        echo "<p>Peso do Cliente: $peso kg</p>";
    }
    ?>
</body>
</html>