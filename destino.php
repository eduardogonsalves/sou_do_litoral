<!--SoliDeoGloria-->
<?php
require('./bandoDeDados/conexao_destino.php');

// Verificar se o parâmetro 'nome_destino' foi passado na URL
if (isset($_GET['nome_destino'])) {
    $nome_destino = $_GET['nome_destino'];
} else {
    die("Nenhum destino selecionado.");
}

// Preparar e executar a consulta SQL
$query = $pdo->prepare("SELECT * FROM destino WHERE nome_destino = :nome_destino");
$query->execute(['nome_destino' => $nome_destino]);

// Obter o resultado da consulta como um array associativo
$destino = $query->fetch(PDO::FETCH_ASSOC);

// Verificar se algum destino foi encontrado
if (!$destino) {
    die("Destino não encontrado.");
}

// Separar a latitude e longitude
list($lat, $lng) = explode(', ', $destino['mapa_cidade']);
list(
    $lat_rest1, $long_rest1, $nome_rest1,
    $lat_rest2, $long_rest2, $nome_rest2,
    $lat_rest3, $long_rest3, $nome_rest3,
    $lat_rest4, $long_rest4, $nome_rest4,
    $lat_rest5, $long_rest5, $nome_rest5,
    $lat_rest6, $long_rest6, $nome_rest6,
    $lat_rest7, $long_rest7, $nome_rest7,
    $lat_rest8, $long_rest8, $nome_rest8,
    $lat_rest9, $long_rest9, $nome_rest9,
    $lat_rest10, $long_rest10, $nome_rest10,
    $lat_rest11, $long_rest11, $nome_rest11,
    $lat_rest12, $long_rest12, $nome_rest12,
    $lat_rest13, $long_rest13, $nome_rest13,
    $lat_rest14, $long_rest14, $nome_rest14,
    $lat_rest15, $long_rest15, $nome_rest15,
    $lat_saude1, $long_saude1, $nome_saude1,
    $lat_saude2, $long_saude2, $nome_saude2,
    $lat_saude3, $long_saude3, $nome_saude3,
    $lat_saude4, $long_saude4, $nome_saude4,
    $lat_saude5, $long_saude5, $nome_saude5,
    $lat_policia1, $long_policia1, $nome_policia1,
    $lat_policia2, $long_policia2, $nome_policia2,
    $lat_policia3, $long_policia3, $nome_policia3
) = array(
    $destino['lat_rest1'], $destino['long_rest1'], $destino['nome_rest1'],
    $destino['lat_rest2'], $destino['long_rest2'], $destino['nome_rest2'],
    $destino['lat_rest3'], $destino['long_rest3'], $destino['nome_rest3'],
    $destino['lat_rest4'], $destino['long_rest4'], $destino['nome_rest4'],
    $destino['lat_rest5'], $destino['long_rest5'], $destino['nome_rest5'],
    $destino['lat_rest6'], $destino['long_rest6'], $destino['nome_rest6'],
    $destino['lat_rest7'], $destino['long_rest7'], $destino['nome_rest7'],
    $destino['lat_rest8'], $destino['long_rest8'], $destino['nome_rest8'],
    $destino['lat_rest9'], $destino['long_rest9'], $destino['nome_rest9'],
    $destino['lat_rest10'], $destino['long_rest10'], $destino['nome_rest10'],
    $destino['lat_rest11'], $destino['long_rest11'], $destino['nome_rest11'],
    $destino['lat_rest12'], $destino['long_rest12'], $destino['nome_rest12'],
    $destino['lat_rest13'], $destino['long_rest13'], $destino['nome_rest13'],
    $destino['lat_rest14'], $destino['long_rest14'], $destino['nome_rest14'],
    $destino['lat_rest15'], $destino['long_rest15'], $destino['nome_rest15'],
    $destino['lat_saude1'], $destino['long_saude1'], $destino['nome_saude1'],
    $destino['lat_saude2'], $destino['long_saude2'], $destino['nome_saude2'],
    $destino['lat_saude3'], $destino['long_saude3'], $destino['nome_saude3'],
    $destino['lat_saude4'], $destino['long_saude4'], $destino['nome_saude4'],
    $destino['lat_saude5'], $destino['long_saude5'], $destino['nome_saude5'],
    $destino['lat_policia1'], $destino['long_policia1'], $destino['nome_policia1'],
    $destino['lat_policia2'], $destino['long_policia2'], $destino['nome_policia2'],
    $destino['lat_policia3'], $destino['long_policia3'], $destino['nome_policia3']
);

session_start();
$_SESSION['destino'] = $destino;
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($destino['titulo_guia_pagina']); ?></title>
  <link rel="stylesheet" href="./css/destino.css"><!--Referência do CSS-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
  integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
  crossorigin=""/>
  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
     integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
     crossorigin="">
  </script>

    <script>
        // Configurações da Previsão do Tempo
        const apiKey = 'f6abdaa1efa90cf24dc3e65d72b8e87e';  // Chave de API do OpenWeather
        const city = '<?php echo htmlspecialchars($destino['cidade']); ?>'; 
        const weatherImages = {
            clear: './imagens/previsao/clear.png',
            clouds: './imagens/previsao/cloud.png',
            mist: './imagens/previsao/mist.png',
            rain: './imagens/previsao/rain.png',
            snow: './imagens/previsao/snow.png',
            error: './imagens/previsao/404.png'
        };

        function fetchWeatherData() {
            const apiUrl = `https://api.openweathermap.org/data/2.5/weather?q=${encodeURIComponent(city)}&units=metric&appid=${apiKey}&lang=pt_br`;

            fetch(apiUrl)
                .then(response => {
                    if (!response.ok) {
                        throw new Error(`Erro HTTP! status: ${response.status}`);
                    }
                    return response.json();
                })
                .then(data => {
                    const location = document.getElementById('location');
                    const temperature = document.getElementById('temperature');
                    const description = document.getElementById('description');
                    const icon = document.getElementById('icon');
                    const wind = document.getElementById('wind');
                    const humidity = document.getElementById('humidity');
                    const clouds = document.getElementById('clouds');

                    location.textContent = `${data.name}, ${data.sys.country}`;
                    temperature.textContent = `${data.main.temp} °C`;
                    description.textContent = capitalizeFirstLetter(data.weather[0].description);
                    wind.textContent = `💨 Vento: ${data.wind.speed} m/s`;
                    humidity.textContent = `Umidade: ${data.main.humidity}%`;
                    clouds.textContent = `Cobertura de Nuvens: ${data.clouds.all}%`;

                    const weatherMain = data.weather[0].main.toLowerCase();
                    const weatherImage = weatherImages[weatherMain] || weatherImages.error;
                    icon.innerHTML = `<img src="${weatherImage}" alt="Icone do tempo">`;
                })
                .catch(error => {
                    console.error('Erro ao buscar dados da API:', error);
                    alert('Erro ao buscar dados da API: ' + error.message);
                    document.getElementById('icon').innerHTML = `<img src="${weatherImages.error}" alt="Erro ao carregar ícone">`;
                });
        }

        function capitalizeFirstLetter(string) {
                return string.charAt(0).toUpperCase() + string.slice(1);
        }

            // Chama a função para buscar e exibir os dados meteorológicos
            fetchWeatherData();               

            var lat = <?php echo $lat; ?>;
            var lng = <?php echo $lng; ?>;    

    </script>

</head>
<body>

    <!-- Barra de Menu -->
    <header class="header">
    <img class="logo" src="./imagens/home/logo.png" alt="Logo Marca" style="height: 5em; width: 5em;"></a>
        <nav class="navbar">
            <a href="./index.php">Home</a>
            <a href="./quemsomos.php">Quem somos</a>
            <a href="./index.php#nossosContatos">Contatos</a>
            <a href="./informacoes.php">Informações</a>
            <a href="./login.php">Login / Cadastro</a>
        </nav>
    </header>   
    
    <!-- Carrossel de imagens -->
    <section class="carousel">
        <div class="title">
            <h1 id="top"><?php echo htmlspecialchars($destino['nome_destino']); ?></h1>
        </div>

        <div class="carousel-container">
            <div class="slide"><img src="/<?php echo htmlspecialchars($destino['carrossel1']); ?>" ></div>
            <div class="slide"><img src="/<?php echo htmlspecialchars($destino['carrossel2']); ?>" ></div>
            <div class="slide"><img src="/<?php echo htmlspecialchars($destino['carrossel3']); ?>" ></div>
            <div class="slide"><img src="/<?php echo htmlspecialchars($destino['carrossel4']); ?>" ></div>
            <div class="slide"><img src="/<?php echo htmlspecialchars($destino['carrossel5']); ?>" ></div>
            <div class="slide"><img src="/<?php echo htmlspecialchars($destino['carrossel6']); ?>" ></div>
            <div class="slide"><img src="/<?php echo htmlspecialchars($destino['carrossel7']); ?>" ></div>
        </div>
    </section>

    <!-- Texto descritivo do Destino -->

    <section class="descricao">
        
        <div class="text">
            <h2><?php echo htmlspecialchars($destino['titulo_descricao']); ?></h2><br>
            <div class="apresentacao">
                <div class="apre">            
                    <h3>Localização e Acesso</h3>
                    <p>
                    <?php echo htmlspecialchars(json_decode($destino['localizacao_acesso'], true)[0]['paragrafo']); ?>
                    </p><br>
                </div>
            </div>
            <div class="roteiro">
                <div class="rota">
                    <h3>O que você vai encontrar</h3>
                    <?php 
                        $descricao_roteiro = json_decode($destino['descricao_roteiro'], true);
                        foreach ($descricao_roteiro as $paragrafo) {
                            echo "<p>" . htmlspecialchars($paragrafo['paragrafo']) . "</p>";
                        }
                    ?>
                </div>
            </div>
        </div>
    </section>
    
    <div class="grupoMapa">
        <section class="content">
            <div class="left-column"> <!-- Esta div guarda das datas da previsão das tábuas de maré -->

                <!-- Informações das tábuas de maré aqui -->
                <div class="tabuas" id="tabuasMare">
                    <h2>Tábuas de Maré</h2><hr>
                    <div class="previsao">
                        <h4>Terça 18/06/24</h4>
                        <p> 
                            01:30h - 2.0m<br>
                            07:45h - 0.7m<br>
                            13:56h - 2.0m<br>
                            20:00h - 0.6m<hr>
                        </p>
                    </div>
                    <div class="previsao">
                        <h4>Quarta 19/06/24</h4>
                        <p> 
                            02:15h - 2.1m<br>
                            08:28h - 0.6m<br>
                            14:39h - 2.1m<br>
                            20:43h - 0.6m<hr>
                        </p>
                    </div>
                    <div class="previsao">
                        <h4>Quinta 20/06/24</h4>
                        <p> 
                            02:58h - 2.2m<br>
                            09:11h - 0.5m<br>
                            15:23h - 2.1m<br>
                            21:21h - 0.5m<hr>
                        </p>
                    </div>
                    <div class="previsao">
                        <h4>Sexta 21/06/24</h4>
                        <p> 
                            03:41h - 2.3m<br>
                            09:56h - 0.4m<br>
                            16:08h - 2.2m<br>
                            22:06h - 0.5m<hr>
                        </p>
                    </div>
                    <div class="previsao">
                        <h4>Sábado 22/06/24</h4>
                        <p> 
                            04:21h - 2.4m<br>
                            10:38h - 0.3m<br>
                            16:54h - 2.2m<br>
                            22:53h - 0.4m<hr>
                        </p>
                    </div>
                    <div class="previsao">
                        <h4>Domingo 23/06/24</h4>
                        <p> 
                            05:06h - 2.4m<br>
                            11:19h - 0.3m<br>
                            17:39h - 2.2m<br>
                            23:36h - 0.4m<hr>
                        </p>
                    </div>
                    <div class="previsao">
                        <h4>Segunda 24/06/24</h4>
                        <p> 
                            05:51h - 2.4m<br>
                            12:06h - 0.2m<br>
                            18:26h - 2.2m<hr>
                        </p>
                    </div>
                    <div class="previsao">
                        <h4>Terça 25/06/24</h4>
                        <p> 
                            00:19h - 0.4m<br>
                            06:34h - 2.4m<br>
                            12:54h - 0.3m<br>
                            19:15h - 2.2m<hr>
                        </p>
                    </div>
                    <div class="previsao">
                        <h4>Quarta 26/06/24</h4>
                        <p> 
                            01:06h - 0.5m<br>
                            07:24h - 2.4m<br>
                            13:43h - 0.4m<br>
                            20:04h - 2.1m<hr>
                        </p>
                    </div>
                    <div class="previsao">
                        <h4>Quinta 27/06/24</h4>
                        <p> 
                            01:58h - 0.6m<br>
                            08:19h - 2.3m<br>
                            14:38h - 0.5m<br>
                            21:00h - 2.1m<hr>
                        </p>
                    </div>
                    <div class="previsao">
                        <h4>Sexta 28/06/24</h4>
                        <p> 
                            02:56h - 0.6m<br>
                            09:15h - 2.2m<br>
                            15:39h - 0.5m<br>
                            22:00h - 2.0m<hr>
                        </p>
                    </div>
                    <div class="previsao">
                        <h4>Sábado 29/06/24</h4>
                        <p> 
                            04:02h - 0.7m<br>
                            10:21h - 2.1m<br>
                            16:43h - 0.6m<br>
                            23:04h - 2.0m<hr>
                        </p>
                    </div>
                    <div class="previsao">
                        <h4>Domingo 30/06/24</h4>
                        <p> 
                            05:09h - 0.7m<br>
                            11:28h - 2.1m<br>
                            17:51h - 0.6m<hr>
                        </p>
                    </div>                    
                    <div class="previsao">
                        <h4>Segunda 01/07/24</h4>
                        <p>
                            00:09h - 2.0m<br>
                            06:23h - 0.6m<br>
                            12:39h - 2.1m<br>
                            18:53h - 0.6m<hr>
                        </p>
                    </div>
                    <div class="previsao">
                        <h4>Terça 02/07/24</h4>
                        <p>
                            01:11h - 2.1m<br>
                            07:32h - 0.5m<br>
                            13:45h - 2.1m<br>
                            19:54h - 0.6m<hr>
                        </p>
                    </div>
                    <div class="previsao">
                        <h4>Quarta 03/07/24</h4>
                        <p>
                            02:13h - 2.2m<br>
                            08:28h - 0.4m<br>
                            14:43h - 2.1m<br>
                            20:47h - 0.6m<hr> 
                        </p>
                    </div>
                    <div class="previsao">
                        <h4>Quinta 04/07/24</h4>
                        <p>
                            03:06h - 2.3m<br>
                            09:17h - 0.4m<br>
                            15:38h - 2.2m<br>
                            21:32h - 0.5m<hr>
                        </p> 
                    </div>
                    <div class="previsao">
                        <h4>Sexta 05/07/24</h4>
                        <p>
                            03:54h - 2.3m<br>
                            10:04h - 0.3m<br>
                            16:23h - 2.2m<br>
                            22:15h - 0.5m<hr>
                        </p> 
                    </div>
                    <div class="previsao">
                        <h4>Sábado 06/07/24</h4>
                        <p>
                            04:36h - 2.3m<br>
                            10:47h - 0.3m<br>
                            17:02h - 2.2m<br>
                            22:54h - 0.5m<hr>
                        </p>
                    </div>
                    <div class="previsao">
                        <h4>Domingo 07/07/24</h4>
                        <p>
                            05:11h - 2.3m<br>
                            11:26h - 0.3m<br>
                            17:41h - 2.1m<br>
                            23:30h - 0.5m<hr>
                        </p>
                    </div>
                    <div class="previsao">
                        <h4>Segunda 08/07/24</h4>
                        <p>
                            05:47h - 2.3m<br>
                            12:02h - 0.4m<br>
                            18:15h - 2.1m<hr>
                        </p>
                    </div>
                    <div class="previsao">
                        <h4>Terça 09/07/24</h4>
                        <p>
                            00:02h - 0.5m<br>
                            06:21h - 2.3m<br>
                            12:38h - 0.4m<br>
                            18:51h - 2.1m<hr>
                        </p>
                    </div>
                    <div class="previsao">
                        <h4>Quarta 10/07/24</h4>
                        <p>
                            00:38h - 0.6m<br>
                            06:56h - 2.2m<br>
                            13:09h - 0.5m<br>
                            19:26h - 2.0m<hr>
                        </p>
                    </div>
                    <div class="previsao">
                        <h4>Quinta 11/07/24</h4>
                        <p>
                            01:13h - 0.7m<br>
                            07:36h - 2.1m<br>
                            13:49h - 0.6m<br>
                            20:06h - 1.9m<hr>
                        </p>
                    </div>
                    <div class="previsao">
                        <h4>Sexta 12/07/24</h4>
                        <p>
                            01:56h - 0.7m<br>
                            08:19h - 2.0m<br>
                            14:32h - 0.7m<br>
                            20:53h - 1.9m<hr>
                        </p>
                    </div>
                    <div class="previsao">
                        <h4>Sábado 13/07/24</h4>
                        <p>
                            02:43h - 0.8m<br>
                            09:06h - 1.9m<br>
                            15:21h - 0.8m<br>
                            21:45h - 1.8m<hr>
                        </p>
                    </div>
                    <div class="previsao">
                        <h4>Domingo 14/07/24</h4>
                        <p>
                            03:45h - 0.9m<br>
                            10:04h - 1.8m<br>
                            16:21h - 0.9m<br>
                            22:43h - 1.8m<hr>
                        </p>
                    </div>
                    <div class="previsao">
                        <h4>Segunda 15/07/24</h4>
                        <p>
                            04:51h - 0.9m<br>
                            11:08h - 1.8m<br>
                            17:23h - 0.9m<br>
                            23:49h - 1.8m<hr>
                        </p>
                    </div>
                    <div class="previsao">
                        <h4>Terça 16/07/24</h4>
                        <p>
                            05:58h - 0.9m<br>
                            12:15h - 1.8m<br>
                            18:23h - 0.8m<hr>
                        </p>
                        </div>
                    <div class="previsao">
                        <h4>Quarta 17/07/24</h4>
                        <p>
                            00:49h - 1.9m<br>
                            07:06h - 0.8m<br>
                            13:17h - 1.9m<br>
                            19:24h - 0.8m<hr>
                        </p>
                    </div>
                    <div class="previsao">
                        <h4>Quinta 18/07/24</h4>
                        <p>
                            01:41h - 2.0m<br>
                            08:02h - 0.6m<br>
                            14:11h - 2.0m<br>
                            20:17h - 0.6m<hr>
                        </p>
                    </div>
                    <div class="previsao">
                        <h4>Sexta 19/07/24</h4>
                        <p>
                            02:34h - 2.2m<br>
                            08:53h - 0.5m<br>
                            15:06h - 2.1m<br>
                            21:06h - 0.5m<hr>
                        </p>
                    </div>
                    <div class="previsao">
                        <h4>Sábado 20/07/24</h4>
                        <p>
                            03:21h - 2.3m<br>
                            09:39h - 0.3m<br>
                            15:56h - 2.2m<br>
                            21:53h - 0.4m<hr>
                        </p><hr>
                    </div>
                    <div class="previsao">
                        <h4>Domingo 21/07/24</h4>
                        <p>
                            04:06h - 2.4m<br>
                            10:21h - 0.2m<br>
                            16:41h - 2.3m<br>
                            22:36h - 0.4m<hr>
                        </p><hr>
                    </div>
                    <div class="previsao">
                        <h4>Segunda 22/07/24</h4>
                        <p>
                            04:49h - 2.5m<br>
                            11:01h - 0.2m<br>
                            17:21h - 2.4m<br>
                            23:17h - 0.3m<hr>
                        </p><hr>
                    </div>
                    <div class="previsao">
                        <h4>Terça 23/07/24</h4>
                        <p>
                            05:30h - 2.5m<br>
                            11:40h - 0.2m<br>
                            18:01h - 2.4m<br>
                            23:58h - 0.3m<hr>
                        </p><hr>
                    </div>
                    <div class="previsao">
                        <h4>Quarta 24/07/24</h4>
                        <p>
                            06:11h - 2.5m<br>
                            12:17h - 0.3m<br>
                            18:40h - 2.4m<hr>
                        </p><hr>
                    </div>
                    <div class="previsao">
                        <h4>Quinta 25/07/24</h4>
                        <p>
                            00:39h - 0.4m<br>
                            06:52h - 2.4m<br>
                            12:54h - 0.3m<br>
                            19:21h - 2.3m<hr>
                        </p><hr>
                    </div>
                    <div class="previsao">
                        <h4>Sexta 26/07/24</h4>
                        <p>
                            01:19h - 0.5m<br>
                            07:34h - 2.3m<br>
                            13:32h - 0.4m<br>
                            20:03h - 2.2m<hr>
                        </p><hr>
                    </div>
                    <div class="previsao">
                        <h4>Sábado 27/07/24</h4>
                        <p>
                            02:02h - 0.7m<br>
                            08:18h - 2.1m<br>
                            14:13h - 0.6m<br>
                            20:49h - 2.0m<hr>
                        </p><hr>
                    </div>
                    <div class="fonte">
                        <p style="color: white;">Fonte: Marinha do Brasil</p>
                    </div>
                    <div class="tabuaCompleta">
                        <a style="text-decoration: none; color: white; font-size: 0.8em" href="https://www.marinha.mil.br/chm/sites/www.marinha.mil.br.chm/files/dados_de_mare/23_-_porto_de_cabedelo_2024_ok.pdf" target="_blank">Previsão completa clique aqui!</a>
                    </div>                
                </div>
            </div>

            <!-- Mapa do Destino -->
            <div class="center-column">
                <div id="map"></div>
                <div class="map-buttons">
                    <button class="btnsmaps" onclick="showMarkers('restaurantes')">Restaurantes</button>
                    <button class="btnsmaps" onclick="showMarkers('saude')">Unidades de Saúde Próximas</button>
                    <button class="btnsmaps" onclick="showMarkers('policia')">Polícia Mais Próxima</button>
                </div>
            </div>

            <div class="right-column">
                <!-- Previsão do tempo aqui -->
                <div id="weather">
                    <h2 style="text-shadow: 0.1em 0.1em 3px rgba(0, 0, 0, 0.5);">Previsão do Tempo</h2>
                    <div style="font-weight:600; text-shadow: 0.1em 0.1em 3px rgba(0, 0, 0, 0.5);" id="location"></div>
                    <div id="icon"></div>
                    <div style="font-size: 3em; text-shadow: 0.1em 0.1em 3px rgba(0, 0, 0, 0.5);" id="temperature"></div>
                    <div style="font-size: 1em; font-weight:600; margin-bottom: 20px; text-shadow: 0.1em 0.1em 3px rgba(0, 0, 0, 0.5);" id="description"></div>
                    <div style="font-size: 1.4em; font-weight:600; text-shadow: 0.1em 0.1em 3px rgba(0, 0, 0, 0.5); margin-bottom: 10px" id="wind"></div>
                    <div style="font-size: 1.4em; font-weight:600; text-shadow: 0.1em 0.1em 3px rgba(0, 0, 0, 0.5); margin-bottom: 10px"  id="humidity"></div>
                    <div style="font-size: 1.4em; font-weight:600; text-shadow: 0.1em 0.1em 3px rgba(0, 0, 0, 0.5); margin-bottom: 10px" id="clouds"></div>
                </div>
            </div>

        </section>
    </div>

    <!-- Cards de vídeos do YouTube -->
    <section class="videos">
        <h2>Galeria de Vídeos</h2>
        <div class="video-cards">
            <div class="video-card">
                <iframe src="<?php echo htmlspecialchars($destino['video1']); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="video-card">
                <iframe src="<?php echo htmlspecialchars($destino['video2']); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="video-card">
                <iframe src="<?php echo htmlspecialchars($destino['video3']); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="video-card">
                <iframe src="<?php echo htmlspecialchars($destino['video4']); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </section>

    <div style="display: none;"> <!-- Os valores contidos nesta Div serão atribuídos à variáveis no Js-->
        <h2 id="1"><?php echo $lat_rest1; ?></h2>
        <h2 id="2"><?php echo $long_rest1; ?></h2>
        <h2 id="3"><?php echo $nome_rest1; ?></h2>

        <h2 id="4"><?php echo $lat_rest2; ?></h2>
        <h2 id="5"><?php echo $long_rest2; ?></h2>
        <h2 id="6"><?php echo $nome_rest2; ?></h2>

        <h2 id="7"><?php echo $lat_rest3; ?></h2>
        <h2 id="8"><?php echo $long_rest3; ?></h2>
        <h2 id="9"><?php echo $nome_rest3; ?></h2>

        <h2 id="10"><?php echo $lat_rest4; ?></h2>
        <h2 id="11"><?php echo $long_rest4; ?></h2>
        <h2 id="12"><?php echo $nome_rest4; ?></h2>

        <h2 id="13"><?php echo $lat_rest5; ?></h2>
        <h2 id="14"><?php echo $long_rest5; ?></h2>
        <h2 id="15"><?php echo $nome_rest5; ?></h2>

        <h2 id="16"><?php echo $lat_rest6; ?></h2>
        <h2 id="17"><?php echo $long_rest6; ?></h2>
        <h2 id="18"><?php echo $nome_rest6; ?></h2>

        <h2 id="19"><?php echo $lat_rest7; ?></h2>
        <h2 id="20"><?php echo $long_rest7; ?></h2>
        <h2 id="21"><?php echo $nome_rest7; ?></h2>

        <h2 id="22"><?php echo $lat_rest8; ?></h2>
        <h2 id="23"><?php echo $long_rest8; ?></h2>
        <h2 id="24"><?php echo $nome_rest8; ?></h2>

        <h2 id="25"><?php echo $lat_rest9; ?></h2>
        <h2 id="26"><?php echo $long_rest9; ?></h2>
        <h2 id="27"><?php echo $nome_rest9; ?></h2>

        <h2 id="28"><?php echo $lat_rest10; ?></h2>
        <h2 id="29"><?php echo $long_rest10; ?></h2>
        <h2 id="30"><?php echo $nome_rest10; ?></h2>

        <h2 id="31"><?php echo $lat_rest11; ?></h2>
        <h2 id="32"><?php echo $long_rest11; ?></h2>
        <h2 id="33"><?php echo $nome_rest11; ?></h2>

        <h2 id="34"><?php echo $lat_rest12; ?></h2>
        <h2 id="35"><?php echo $long_rest12; ?></h2>
        <h2 id="36"><?php echo $nome_rest12; ?></h2>

        <h2 id="37"><?php echo $lat_rest13; ?></h2>
        <h2 id="38"><?php echo $long_rest13; ?></h2>
        <h2 id="39"><?php echo $nome_rest13; ?></h2>

        <h2 id="40"><?php echo $lat_rest14; ?></h2>
        <h2 id="41"><?php echo $long_rest14; ?></h2>
        <h2 id="42"><?php echo $nome_rest14; ?></h2>

        <h2 id="43"><?php echo $lat_rest15; ?></h2>
        <h2 id="44"><?php echo $long_rest15; ?></h2>
        <h2 id="45"><?php echo $nome_rest15; ?></h2>
        
        <h2 id="46"><?php echo $lat_saude1; ?></h2>
        <h2 id="47"><?php echo $long_saude1; ?></h2>
        <h2 id="48"><?php echo $nome_saude1; ?></h2>

        <h2 id="49"><?php echo $lat_saude2; ?></h2>
        <h2 id="50"><?php echo $long_saude2; ?></h2>
        <h2 id="51"><?php echo $nome_saude2; ?></h2>

        <h2 id="52"><?php echo $lat_saude3; ?></h2>
        <h2 id="53"><?php echo $long_saude3; ?></h2>
        <h2 id="54"><?php echo $nome_saude3; ?></h2>

        <h2 id="55"><?php echo $lat_saude4; ?></h2>
        <h2 id="56"><?php echo $long_saude4; ?></h2>
        <h2 id="57"><?php echo $nome_saude4; ?></h2>

        <h2 id="58"><?php echo $lat_saude5; ?></h2>
        <h2 id="59"><?php echo $long_saude5; ?></h2>
        <h2 id="60"><?php echo $nome_saude5; ?></h2>

        <h2 id="61"><?php echo $lat_policia1; ?></h2>
        <h2 id="62"><?php echo $long_policia1; ?></h2>
        <h2 id="63"><?php echo $nome_policia1; ?></h2>

        <h2 id="64"><?php echo $lat_policia2; ?></h2>
        <h2 id="65"><?php echo $long_policia2; ?></h2>
        <h2 id="66"><?php echo $nome_policia2; ?></h2>

        <h2 id="67"><?php echo $lat_policia3; ?></h2>
        <h2 id="68"><?php echo $long_policia3; ?></h2>
        <h2 id="69"><?php echo $nome_policia3; ?></h2>

    </div>


    <!-- Rodapé -->
    <footer>
        <div class="footer-content">
            <div class="btn-topo">
                <a href="#top">Topo</a>
            </div>
            <div id="nossosContatos" class="footer-columns">
                <div class="column">
                    <h3>Sou do Litoral</h3>
                    <p>Developed by Group 3 - Senac</p>
                </div>
                <div class="column">
                    <h3>Endereço</h3>
                    <p>Av. Dom Pedro I, Centro. João Pessoa-PB</p>
                </div>
                <div class="column">
                    <h3>Contatos</h3>
                    <p>contato@soudolitoral.com</p>
                    <p>3548-9886</p>
                </div>
            </div>
        </div>
    </footer>

    <script>
                // Configurações da tábuas de maré

                document.addEventListener("DOMContentLoaded", function() {
                const diasParaMostrar = 3; // Hoje + próximos dois dias
                const dataInicial = new Date(); // Data atual

                // Remover a parte da hora para facilitar a comparação
                dataInicial.setHours(0, 0, 0, 0);

                // Selecionar todas as previsões
                const previsoes = document.querySelectorAll(".tabuas .previsao");

                previsoes.forEach(previsao => {
                    const h4 = previsao.querySelector('h4');
                    if (!h4) return; // Caso não encontre h4 dentro da div .previsao, sai da iteração

                    const dataTexto = h4.textContent.split(' ')[1]; // Pegar a parte da data no formato "dd/mm/aa"
                    const [dia, mes, ano] = dataTexto.split('/').map(Number); // Transformar em números
                    const dataPrevisao = new Date(2000 + ano, mes - 1, dia); // Corrigir o ano para formato completo

                    // Remover a parte da hora para facilitar a comparação
                    dataPrevisao.setHours(0, 0, 0, 0);

                    // Verificar se a data da previsão é a partir de dataInicial e até o terceiro dia
                    if (dataPrevisao >= dataInicial && dataPrevisao <= new Date(dataInicial.getTime() + (diasParaMostrar - 1) * 24 * 60 * 60 * 1000)) {
                        previsao.style.display = 'block'; // Mostrar a previsão
                    } else {
                        previsao.style.display = 'none'; // Esconder a previsão
                    }
                });
            });
    </script>
   
    <script src="./js/destino.js"></script>
</body>
</html>


<!-- Abaixo um gabarito para inserir destinos (Nos campos que não forem possível completar com informações colocar NULL-para números e deixar as strings vazias-"")



INSERT INTO destino (
    titulo_guia_pagina, nome_destino, carrossel1, carrossel2, carrossel3, carrossel4, carrossel5, carrossel6, carrossel7,
    titulo_descricao, localizacao_acesso, descricao_roteiro, video1, video2, video3, video4, cidade, mapa_cidade, long_cidade,
    lat_rest1, long_rest1, nome_rest1, lat_rest2, long_rest2, nome_rest2, lat_rest3, long_rest3, nome_rest3, lat_rest4, long_rest4, nome_rest4, 
    lat_rest5, long_rest5, nome_rest5, lat_rest6, long_rest6, nome_rest6, lat_rest7, long_rest7, nome_rest7, lat_rest8, long_rest8, nome_rest8, 
    lat_rest9, long_rest9, nome_rest9, lat_rest10, long_rest10, nome_rest10, lat_rest11, long_rest11, nome_rest11, lat_rest12, long_rest12, nome_rest12, 
    lat_rest13, long_rest13, nome_rest13, lat_rest14, long_rest14, nome_rest14, lat_rest15, long_rest15, nome_rest15, 
    lat_saude1, long_saude1, nome_saude1, lat_saude2, long_saude2, nome_saude2, lat_saude3, long_saude3, nome_saude3, lat_saude4, long_saude4, nome_saude4, 
    lat_saude5, long_saude5, nome_saude5, lat_policia1, long_policia1, nome_policia1, lat_policia2, long_policia2, nome_policia2, lat_policia3, long_policia3, nome_policia3
) VALUES (
    'Igreja de São Francisco', 
    'Igreja de São Francisco', 
    'soudolitoral/imagens/igreja_s_francisco/isf10.jpg', 
    'soudolitoral/imagens/igreja_s_francisco/isf11.jpg', 
    'soudolitoral/imagens/igreja_s_francisco/isf12.jpg', 
    'soudolitoral/imagens/igreja_s_francisco/isf9.jpg', 
    'soudolitoral/imagens/igreja_s_francisco/isf8.jpg', 
    'soudolitoral/imagens/igreja_s_francisco/isf3.webp', 
    'soudolitoral/imagens/igreja_s_francisco/isf1.jpg', 
    'A Joia do Barroco no Coração de João Pessoa',
    '[{"paragrafo": "A Igreja de São Francisco está situada no Centro Histórico de João Pessoa, capital do estado da Paraíba, no nordeste do Brasil. Este magnífico complexo arquitetônico é acessível por diversas vias principais da cidade."}]',
    '[{"paragrafo": "A Igreja de São Francisco é famosa por sua riqueza histórica e beleza arquitetônica. O complexo inclui o Convento de Santo Antônio, a Capela da Ordem Terceira de São Francisco, a Capela de São Benedito e a Casa de Oração dos Terceiros, conhecida como Capela Dourada."}, 
    {"paragrafo": "O convento e a igreja são exemplos primorosos do estilo barroco, com ornamentos detalhados e obras de arte sacra. A fachada esculpida e os altares decorados com ouro impressionam visitantes e estudiosos."}, 
    {"paragrafo": "A fonte de Santo Antônio, construída em 1717, é outro destaque. Localizada ao lado do convento, a água jorra da boca de um golfinho de pedra. A inscrição em latim remete ao sacrifício e devoção dos frades que a construíram."}, 
    {"paragrafo": "A área ao redor da igreja é um tesouro cultural, oferecendo uma visão abrangente da influência das culturas indígenas, africanas e europeias na região. Os visitantes podem explorar o claustro e o grande adro com um cruzeiro."}, 
    {"paragrafo": "À noite, a iluminação da igreja realça sua beleza e cria um ambiente sereno e contemplativo. O local também é um centro de atividades culturais, com eventos e exposições regulares."}, 
    {"paragrafo": "A Igreja de São Francisco encanta com sua grandiosidade histórica, riqueza cultural e acolhimento. Seja para admirar a arquitetura, participar de eventos culturais ou simplesmente contemplar a história, é uma experiência inesquecível."}]',
    'https://www.youtube.com/embed/Y-jD9SlyXnA?si=Jc6zEfmeCkhvI_Dx', 
    'https://www.youtube.com/embed/nCno48etG5Q?si=bIDy5KNWekvBh-WC', 
    'https://www.youtube.com/embed/jxKrnEK9ZD0?si=47aQdaFetALjdLbr', 
    'https://www.youtube.com/embed/K2l3cRQck00?si=dOJX0MsK8r0Vgyyj', 
    'João Pessoa', 
    '-7.1266, -34.8254', 
    -34.8254, 
    -7.124075, -34.878478, 'Ed Restaurante Self Service', 
    -7.120763, -34.881641, 'Restaurante e Lanchonete A Garagem', 
    -7.117269, -34.882093, 'La Em Casa Restaurante', 
    -7.117640, -34.879101, 'Status restaurante e lanchonete', 
    -7.115109, -34.879848, 'Restaurante Sertanejo', 
    -7.121833, -34.883410, 'Aspargos Restaurante e Cafeteria', 
    NULL, NULL, '', 
    NULL, NULL, '', 
    NULL, NULL, '', 
    NULL, NULL, '', 
    NULL, NULL, '', 
	NULL, NULL, '', 
    NULL, NULL, '', 
    NULL, NULL, '', 
    NULL, NULL, '', 
    -7.117909, -34.869462, 'Hospital Geral Santa Isabel', 
    -7.116201, -34.885178, 'USF Varadouro I e II', 
    -7.124796, -34.888114, 'USF Cordão Encarnado I', 
    -7.114937, -34.871747, 'USF Tambiá', 
    -7.115668, -34.877369, 'Hospital Prontovida', 
    -7.120064, -34.878947, 'Posto Policial', 
    -7.118740, -34.874624, '2ª Delegacia Distrital de Polícia Civíl', 
    -7.124679, -34.872811, 'Delegacia Especializada de Atendimento à Mulher - NORTE'
);


Updade de fotos

UPDATE destino
SET 
    carrossel1 = 'soudolitoral/imagens/farol_cb/fcb1.jpg',
    carrossel2 = 'soudolitoral/imagens/farol_cb/fcb2.jpg',
    carrossel3 = 'soudolitoral/imagens/farol_cb/fcb3.jpg', 
    carrossel4 = 'soudolitoral/imagens/farol_cb/fcb4.jpg',
    carrossel5 = 'soudolitoral/imagens/farol_cb/fcb5.webp', 
    carrossel6 = 'soudolitoral/imagens/farol_cb/fcb6.webp',
    carrossel7 = 'soudolitoral/imagens/farol_cb/fcb7.jpg'
WHERE nome_destino = 'Farol do Cabo Branco';


Referência pra criação da tabela(Sofreu ajustes, após o código abaixo)

CREATE TABLE destino (
    id INT PRIMARY KEY AUTO_INCREMENT,
    titulo_guia_pagina VARCHAR(40) NOT NULL,
    nome_destino VARCHAR(40) NOT NULL,
    carrossel1 VARCHAR(255),
    carrossel2 VARCHAR(255),
    carrossel3 VARCHAR(255),
    carrossel4 VARCHAR(255),
    carrossel5 VARCHAR(255),
    carrossel6 VARCHAR(255),
    carrossel7 VARCHAR(255),
    titulo_descricao VARCHAR(30) NOT NULL,
    localizacao_acesso JSON NOT NULL,
    descricao_roteiro JSON NOT NULL,
    video1 VARCHAR(100) NOT NULL,
    video2 VARCHAR(100) NOT NULL,
    video3 VARCHAR(100) NOT NULL,
    video4 VARCHAR(100), (até aqui são dados que irão alimentar a página destino.php)
    cidade VARCHAR(50) NOT NULL, (a partir daqui são dados que irão alimentar destino.js)
    mapa_cidade VARCHAR(50) NOT NULL,
    long_cidade DECIMAL(10, 7) NOT NULL,
    
    lat_rest1 DECIMAL(10, 7) NOT NULL,
    long_rest1 DECIMAL(10, 7) NOT NULL,
    nome_rest1 VARCHAR(70) NOT NULL,
    
    lat_rest2 DECIMAL(10, 7) NOT NULL,
    long_rest2 DECIMAL(10, 7) NOT NULL,
    nome_rest2 VARCHAR(70) NOT NULL,

    lat_rest3 DECIMAL(10, 7) NOT NULL,
    long_rest3 DECIMAL(10, 7) NOT NULL,
    nome_rest3 VARCHAR(70) NOT NULL,

    lat_rest4 DECIMAL(10, 7) NOT NULL,
    long_rest4 DECIMAL(10, 7) NOT NULL,
    nome_rest4 VARCHAR(70) NOT NULL,

    lat_rest5 DECIMAL(10, 7) NOT NULL,
    long_rest5 DECIMAL(10, 7) NOT NULL,
    nome_rest5 VARCHAR(70) NOT NULL,

    lat_rest6 DECIMAL(10, 7),
    long_rest6 DECIMAL(10, 7),
    nome_rest6 VARCHAR(70),

    lat_rest7 DECIMAL(10, 7),
    long_rest7 DECIMAL(10, 7),
    nome_rest7 VARCHAR(70),

    lat_rest8 DECIMAL(10, 7),
    long_rest8 DECIMAL(10, 7),
    nome_rest8 VARCHAR(70),

    lat_rest9 DECIMAL(10, 7),
    long_rest9 DECIMAL(10, 7),
    nome_rest9 VARCHAR(70),

    lat_rest10 DECIMAL(10, 7),
    long_rest10 DECIMAL(10, 7),
    nome_rest10 VARCHAR(70),

    lat_rest11 DECIMAL(10, 7),
    long_rest11 DECIMAL(10, 7),
    nome_rest11 VARCHAR(70),

    lat_rest12 DECIMAL(10, 7),
    long_rest12 DECIMAL(10, 7),
    nome_rest12 VARCHAR(70),

    lat_rest13 DECIMAL(10, 7),
    long_rest13 DECIMAL(10, 7),
    nome_rest13 VARCHAR(70),

    lat_rest14 DECIMAL(10, 7),
    long_rest14 DECIMAL(10, 7),
    nome_rest14 VARCHAR(70),

    lat_rest15 DECIMAL(10, 7),
    long_rest15 DECIMAL(10, 7),
    nome_rest15 VARCHAR(70),

    lat_saude1 DECIMAL(10, 7) NOT NULL,
    long_saude1 DECIMAL(10, 7) NOT NULL,
    nome_saude1 VARCHAR(70) NOT NULL,

    lat_saude2 DECIMAL(10, 7) NOT NULL,
    long_saude2 DECIMAL(10, 7) NOT NULL,
    nome_saude2 VARCHAR(70) NOT NULL,

    lat_saude3 DECIMAL(10, 7) NOT NULL,
    long_saude3 DECIMAL(10, 7) NOT NULL,
    nome_saude3 VARCHAR(70) NOT NULL,

    lat_saude4 DECIMAL(10, 7),
    long_saude4 DECIMAL(10, 7),
    nome_saude4 VARCHAR(70),

    lat_saude5 DECIMAL(10, 7),
    long_saude5 DECIMAL(10, 7),
    nome_saude5 VARCHAR(70),

    lat_policia1 DECIMAL(10, 7) NOT NULL,
    long_policia1 DECIMAL(10, 7) NOT NULL,
    nome_policia1 VARCHAR(70)NOT NULL,

    lat_policia2 DECIMAL(10, 7),
    long_policia2 DECIMAL(10, 7),
    nome_policia2 VARCHAR(70),

    lat_policia3 DECIMAL(10, 7),
    long_policia3 DECIMAL(10, 7),
    nome_policia3 VARCHAR(70),
);


-->