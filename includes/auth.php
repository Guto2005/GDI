<?php
// Inicia a sessão, se necessário
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Verifica se o usuário está logado
if (!isset($_SESSION['usuario_id'])) {
    // Redireciona para login.php se não estiver logado
    header('Location: login.php');
    exit();
}
?>
