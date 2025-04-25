<?php
// Incluindo auth.php para proteger a página
require_once('includes/auth.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil - Grupo Duarte Imóveis</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>

    <?php include('components/header.php'); ?> <!-- Cabeçalho -->

    <main>
        <h1>Perfil do Usuário</h1>

        <p>Bem-vindo, <?php echo $_SESSION['usuario_nome']; ?>!</p>

        <!-- Formulário de edição do perfil -->
        <form action="atualizar_perfil.php" method="POST">
            <label for="email">E-mail:</label>
            <input type="email" name="email" value="<?php echo $_SESSION['usuario_email']; ?>" required><br>

            <label for="telefone">Telefone:</label>
            <input type="text" name="telefone" value="<?php echo $_SESSION['usuario_telefone']; ?>" required><br>

            <button type="submit">Atualizar</button>
        </form>
    </main>

    <script src="assets/js/scripts.js"></script> <!-- Scripts -->
</body>
</html>
