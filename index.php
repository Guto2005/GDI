<?php 
// Incluindo o header.php (backend)
// require('includes/header.php'); // Deixe comentado enquanto não for necessário

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grupo Duarte Imóveis</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>

    <?php 
    // Incluindo o cabeçalho (header)
    include('components/header/header.php'); 
    ?> <!-- Cabeçalho -->

    <main>
        <h1>Catálogo de Imóveis</h1>

        <!-- Lista de Imóveis -->
        <div class="imoveis-lista">
            <?php
                // Conexão com o banco de dados
                // require('includes/database.php'); // Comentei por enquanto

                // Definir o número de imóveis por página
                // $imoveis_por_pagina = 6;  // Comentei por enquanto
                // Definir a página atual, caso não exista, mostrar a primeira página
                // $pagina_atual = isset($_GET['pagina']) ? $_GET['pagina'] : 1;  // Comentei por enquanto
                
                // Calcular o OFFSET (quantos imóveis pular)
                // $offset = ($pagina_atual - 1) * $imoveis_por_pagina;  // Comentei por enquanto
                
                // Consulta SQL para obter os imóveis com LIMIT e OFFSET
                // $query = "SELECT * FROM imoveis LIMIT $imoveis_por_pagina OFFSET $offset";  // Comentei por enquanto
                // $result = mysqli_query($conn, $query);  // Comentei por enquanto
                
                // Loop para exibir os imóveis
                // while ($imovel = mysqli_fetch_assoc($result)) {  // Comentei por enquanto
                //     echo '<div class="imovel-item">';  // Comentei por enquanto
                //     echo '<img src="' . $imovel['imagem'] . '" alt="Imagem do imóvel">';  // Comentei por enquanto
                //     echo '<h3>' . $imovel['nome'] . '</h3>';  // Comentei por enquanto
                //     echo '<p>Preço: R$ ' . number_format($imovel['preco'], 2, ',', '.') . '</p>';  // Comentei por enquanto
                //     echo '<a href="detalhes.php?id=' . $imovel['id'] . '">Ver Detalhes</a>';  // Comentei por enquanto
                //     echo '</div>';  // Comentei por enquanto
                // }
            ?>
        </div>

        <!-- Navegação de Páginas -->
        <div class="pagination">
            <?php
                // Consultar o número total de imóveis para definir o número de páginas
                // $total_query = "SELECT COUNT(*) AS total FROM imoveis";  // Comentei por enquanto
                // $total_result = mysqli_query($conn, $total_query);  // Comentei por enquanto
                // $total_imoveis = mysqli_fetch_assoc($total_result)['total'];  // Comentei por enquanto
                
                // Calcular o total de páginas
                // $total_paginas = ceil($total_imoveis / $imoveis_por_pagina);  // Comentei por enquanto
                
                // Mostrar os botões de navegação
                // echo '<div class="pagination-buttons">';  // Comentei por enquanto
                // for ($i = 1; $i <= $total_paginas; $i++) {  // Comentei por enquanto
                //     if ($i == $pagina_atual) {  // Comentei por enquanto
                //         echo '<span class="active-page">' . $i . '</span>';  // Comentei por enquanto
                //     } else {  // Comentei por enquanto
                //         echo '<a href="index.php?pagina=' . $i . '">' . $i . '</a>';  // Comentei por enquanto
                //     }  // Comentei por enquanto
                // }  // Comentei por enquanto
                // echo '</div>';  // Comentei por enquanto
            ?>
        </div>
    </main>

    <script src="assets/js/scripts.js"></script> <!-- Scripts -->
</body>
</html> 
