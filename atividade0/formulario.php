<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário de Cadastro</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include 'menu.php'; ?>

    <h1>Formulário de Cadastro</h1>
    <form action="processa_formulario.php" method="POST">
        <label for="nome">Nome do cliente:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="idade">Idade do cliente:</label>
        <input type="number" id="idade" name="idade" required>

        <label for="altura">Altura do cliente (em metros):</label>
        <input type="number" id="altura" name="altura" step="0.01" required>

        <label for="peso">Peso do cliente (em kg):</label>
        <input type="number" id="peso" name="peso" step="0.01" required>

        <label for="genero">Gênero do cliente:</label>
        <select id="genero" name="genero" required>
            <option value="">Selecione</option>
            <option value="Masculino">Masculino</option>
            <option value="Feminino">Feminino</option>
            <option value="Outro">Outro</option>
        </select>

        <button type="submit">Enviar</button>
        <button type="reset">Limpar</button>
    </form>
</body>
</html>
