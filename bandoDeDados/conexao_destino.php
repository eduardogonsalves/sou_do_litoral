<!--SoliDeoGloria-->

<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "sou_do_litoral";

    try {
        $pdo = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Consulta para obter os dados da página
        $consulta = $pdo->query("SELECT * FROM destino LIMIT 1");
        $destino = $consulta->fetch(PDO::FETCH_ASSOC);

        if ($destino) {
            $titulo_pagina = htmlspecialchars($destino['titulo'], ENT_QUOTES, 'UTF-8');
            $descricao_pagina = htmlspecialchars($destino['descricao'], ENT_QUOTES, 'UTF-8');
            $imagem_principal = $destino['imagem_principal'];
            $link_video_youtube = $destino['link_video_youtube'];
            $cidade = $destino['cidade'];
        } else {
            // Tratamento para página não encontrada
            $titulo_pagina = "Título Padrão";
            $descricao_pagina = "Descrição padrão da página...";
            $imagem_principal = "default.jpg";
            $link_video_youtube = "";
            $cidade = "Cidade Desconhecida";
        }
        
    } catch(PDOException $e) {
        die("Erro ao conectar com o banco de dados: " . $e->getMessage());
    }
?>
