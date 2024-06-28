<!-- SoliDeoGloria -->

<?php
// Conexão com o banco de dados
require('./bandoDeDados/conexao_destino.php');

// Capturar os dados do formulário
$titulo_guia_pagina = $_POST['titulo_guia_pagina'];
$nome_destino = $_POST['nome_destino'];
$carrossel1 = $_POST['carrossel1'];
$carrossel2 = $_POST['carrossel2'];
$carrossel3 = $_POST['carrossel3'];
$carrossel4 = $_POST['carrossel4'];
$carrossel5 = $_POST['carrossel5'];
$carrossel6 = $_POST['carrossel6'];
$carrossel7 = $_POST['carrossel7'];
$titulo_descricao = $_POST['titulo_descricao'];
$localizacao_acesso = $_POST['localizacao_acesso'];

// Converter a descrição do roteiro em JSON
$descricao_roteiro = $_POST['descricao_roteiro'];
$paragrafos = explode("\n", trim($descricao_roteiro));
$json_roteiro = [];
foreach ($paragrafos as $paragrafo) {
    if (!empty($paragrafo)) {
        $json_roteiro[] = ["paragrafo" => trim($paragrafo)];
    }
}
$descricao_roteiro = json_encode($json_roteiro);

$video1 = $_POST['video1'];
$video2 = $_POST['video2'];
$video3 = $_POST['video3'];
$video4 = $_POST['video4'];
$cidade = $_POST['cidade'];
$mapa_cidade = $_POST['mapa_cidade'];
$long_cidade = $_POST['long_cidade'];
$lat_rest1 = $_POST['lat_rest1'];
$long_rest1 = $_POST['long_rest1'];
$nome_rest1 = $_POST['nome_rest1'];
$lat_rest2 = $_POST['lat_rest2'];
$long_rest2 = $_POST['long_rest2'];
$nome_rest2 = $_POST['nome_rest2'];
$lat_rest3 = $_POST['lat_rest3'];
$long_rest3 = $_POST['long_rest3'];
$nome_rest3 = $_POST['nome_rest3'];
$lat_rest4 = $_POST['lat_rest4'];
$long_rest4 = $_POST['long_rest4'];
$nome_rest4 = $_POST['nome_rest4'];
$lat_rest5 = $_POST['lat_rest5'];
$long_rest5 = $_POST['long_rest5'];
$nome_rest5 = $_POST['nome_rest5'];
$lat_rest6 = $_POST['lat_rest6'];
$long_rest6 = $_POST['long_rest6'];
$nome_rest6 = $_POST['nome_rest6'];
$lat_rest7 = $_POST['lat_rest7'];
$long_rest7 = $_POST['long_rest7'];
$nome_rest7 = $_POST['nome_rest7'];
$lat_rest8 = $_POST['lat_rest8'];
$long_rest8 = $_POST['long_rest8'];
$nome_rest8 = $_POST['nome_rest8'];
$lat_rest9 = $_POST['lat_rest9'];
$long_rest9 = $_POST['long_rest9'];
$nome_rest9 = $_POST['nome_rest9'];
$lat_rest10 = $_POST['lat_rest10'];
$long_rest10 = $_POST['long_rest10'];
$nome_rest10 = $_POST['nome_rest10'];
$lat_rest11 = $_POST['lat_rest11'];
$long_rest11 = $_POST['long_rest11'];
$nome_rest11 = $_POST['nome_rest11'];
$lat_rest12 = $_POST['lat_rest12'];
$long_rest12 = $_POST['long_rest12'];
$nome_rest12 = $_POST['nome_rest12'];
$lat_rest13 = $_POST['lat_rest13'];
$long_rest13 = $_POST['long_rest13'];
$nome_rest13 = $_POST['nome_rest13'];
$lat_rest14 = $_POST['lat_rest14'];
$long_rest14 = $_POST['long_rest14'];
$nome_rest14 = $_POST['nome_rest14'];
$lat_rest15 = $_POST['lat_rest15'];
$long_rest15 = $_POST['long_rest15'];
$nome_rest15 = $_POST['nome_rest15'];
$lat_saude1 = $_POST['lat_saude1'];
$long_saude1 = $_POST['long_saude1'];
$nome_saude1 = $_POST['nome_saude1'];
$lat_saude2 = $_POST['lat_saude2'];
$long_saude2 = $_POST['long_saude2'];
$nome_saude2 = $_POST['nome_saude2'];
$lat_saude3 = $_POST['lat_saude3'];
$long_saude3 = $_POST['long_saude3'];
$nome_saude3 = $_POST['nome_saude3'];
$lat_saude4 = $_POST['lat_saude4'];
$long_saude4 = $_POST['long_saude4'];
$nome_saude4 = $_POST['nome_saude4'];
$lat_saude5 = $_POST['lat_saude5'];
$long_saude5 = $_POST['long_saude5'];
$nome_saude5 = $_POST['nome_saude5'];
$lat_policia1 = $_POST['lat_policia1'];
$long_policia1 = $_POST['long_policia1'];
$nome_policia1 = $_POST['nome_policia1'];
$lat_policia2 = $_POST['lat_policia2'];
$long_policia2 = $_POST['long_policia2'];
$nome_policia2 = $_POST['nome_policia2'];
$lat_policia3 = $_POST['lat_policia3'];
$long_policia3 = $_POST['long_policia3'];
$nome_policia3 = $_POST['nome_policia3'];

// Preparar a consulta SQL
$sql = "INSERT INTO destino (
    titulo_guia_pagina, nome_destino, carrossel1, carrossel2, carrossel3, carrossel4, carrossel5, carrossel6, carrossel7,
    titulo_descricao, localizacao_acesso, descricao_roteiro, video1, video2, video3, video4, cidade, mapa_cidade, long_cidade,
    lat_rest1, long_rest1, nome_rest1, lat_rest2, long_rest2, nome_rest2, lat_rest3, long_rest3, nome_rest3, lat_rest4, long_rest4, nome_rest4, 
    lat_rest5, long_rest5, nome_rest5, lat_rest6, long_rest6, nome_rest6, lat_rest7, long_rest7, nome_rest7, lat_rest8, long_rest8, nome_rest8, 
    lat_rest9, long_rest9, nome_rest9, lat_rest10, long_rest10, nome_rest10, lat_rest11, long_rest11, nome_rest11, lat_rest12, long_rest12, nome_rest12, 
    lat_rest13, long_rest13, nome_rest13, lat_rest14, long_rest14, nome_rest14, lat_rest15, long_rest15, nome_rest15, 
    lat_saude1, long_saude1, nome_saude1, lat_saude2, long_saude2, nome_saude2, lat_saude3, long_saude3, nome_saude3, lat_saude4, long_saude4, nome_saude4, 
    lat_saude5, long_saude5, nome_saude5, lat_policia1, long_policia1, nome_policia1, lat_policia2, long_policia2, nome_policia2, lat_policia3, long_policia3, nome_policia3
) VALUES (
    '$titulo_guia_pagina', '$nome_destino', '$carrossel1', '$carrossel2', '$carrossel3', '$carrossel4', '$carrossel5', '$carrossel6', '$carrossel7',
    '$titulo_descricao', '$localizacao_acesso', '$descricao_roteiro', '$video1', '$video2', '$video3', '$video4', '$cidade', '$mapa_cidade', '$long_cidade',
    '$lat_rest1', '$long_rest1', '$nome_rest1', '$lat_rest2', '$long_rest2', '$nome_rest2', '$lat_rest3', '$long_rest3', '$nome_rest3', '$lat_rest4', '$long_rest4', '$nome_rest4', 
    '$lat_rest5', '$long_rest5', '$nome_rest5', '$lat_rest6', '$long_rest6', '$nome_rest6', '$lat_rest7', '$long_rest7', '$nome_rest7', '$lat_rest8', '$long_rest8', '$nome_rest8', 
    '$lat_rest9', '$long_rest9', '$nome_rest9', '$lat_rest10', '$long_rest10', '$nome_rest10', '$lat_rest11', '$long_rest11', '$nome_rest11', '$lat_rest12', '$long_rest12', '$nome_rest12', 
    '$lat_rest13', '$long_rest13', '$nome_rest13', '$lat_rest14', '$long_rest14', '$nome_rest14', '$lat_rest15', '$long_rest15', '$nome_rest15', 
    '$lat_saude1', '$long_saude1', '$nome_saude1', '$lat_saude2', '$long_saude2', '$nome_saude2', '$lat_saude3', '$long_saude3', '$nome_saude3', '$lat_saude4', '$long_saude4', '$nome_saude4', 
    '$lat_saude5', '$long_saude5', '$nome_saude5', '$lat_policia1', '$long_policia1', '$nome_policia1', '$lat_policia2', '$long_policia2', '$nome_policia2', '$lat_policia3', '$long_policia3', '$nome_policia3'
)";

// Executar a consulta
if ($conn->query($sql) === TRUE) {
    echo "Novo destino inserido com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

// Fechar a conexão
$conn->close();
?>
