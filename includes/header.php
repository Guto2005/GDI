<?php
// Inicia a sessão apenas se ainda não tiver sido iniciada
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Define a variável $usuario_nome para uso em páginas públicas
$usuario_nome = $_SESSION['usuario_nome'] ?? 'Visitante'; // Exibe "Visitante" se o nome não estiver definido

// Qualquer outro código de inicialização pode ir aqui
?>

