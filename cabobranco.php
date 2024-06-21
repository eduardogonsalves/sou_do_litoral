<!DOCTYPE html>
<html lang="pt-BR">
<!--SoliDeoGloria-->
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cabo Branco</title>
  <link rel="stylesheet" href="./css/cabobranco.css"><!--Referência do CSS-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
  integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
  crossorigin=""/>
  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
     integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
     crossorigin=""></script>

</head>
<body>

    <!-- Barra de Menu -->
    <header class="header">
    <img src="./imagens/home/logo.png" alt="Logo Marca" style="height: 40px; width: 40px;"></a>
        <nav class="navbar">
            <a href="./index.php">Home</a>
            <a href="./quemsomos.php">Quem somos</a>
            <a href="./index.php#nossosContatos">Contatos</a>
            <a href="./informacoes.php">Informações</a>
            <a href="./login.php">Login / Cadastro</a>
        </nav>   
    </header>

    <div class="title">
        <h1 id="top">Praia de Cabo Branco</h1>
    </div>
    
    <!-- Carrossel de imagens -->
    <section class="carousel">
        <div class="carousel-container">
            <div class="slide"><img src="./imagens/caboBranco/cb1.webp" alt="Cabo Branco"></div>
            <div class="slide"><img src="./imagens/caboBranco/cb12.webp" alt="Cabo BrancoImagem 2"></div>
            <div class="slide"><img src="./imagens/caboBranco/cb8.webp" alt="Cabo Branco 3"></div>
            <div class="slide"><img src="./imagens/caboBranco/cb9.jpg" alt="Cabo Branco"></div>
            <div class="slide"><img src="./imagens/caboBranco/cb5.jpg" alt="Cabo Branco"></div>
            <div class="slide"><img src="./imagens/caboBranco/cb6.jpg" alt="Cabo Branco"></div>
            <div class="slide"><img src="./imagens/caboBranco/cb11.jpg" alt="Cabo Branco"></div>
        </div>
    </section>

    <!-- Texto descritivo do Destino -->

    <section class="descricao">
        <div class="text">
            <h2>O Encontro da Cidade e o Mar</h2><br>
            <div class="apresentacao">
                <div class="apre">            
                    <h3>Localização e Acesso</h3>
                    <p> Cabo Branco é uma extensão de areia dourada que se estende ao 
                        longo da costa leste de João Pessoa, a capital do estado da Paraíba, 
                        no nordeste do Brasil. Faz parte da região conhecida como 
                        "Ponta do Seixas", considerada o ponto mais oriental das Américas. 
                        Seu acesso é fácil, com várias vias de acesso a partir do centro da cidade.
                    </p><br>
                </div>
            </div>
            <div class="roteiro">
                <div class="rota">
                    <h3>O que você vai encontrar</h3>
                    <P>
                        Cabo Branco é famosa por sua beleza natural, com águas cristalinas em tons de azul e verde, 
                        perfeitas para mergulho e relaxamento. A faixa de areia macia convida a caminhadas à 
                        beira-mar e banhos de sol.                        
                    </P>
                    <P>
                        O Farol do Cabo Branco, projetado por Oscar Niemeyer, é um destaque. Localizado no ponto 
                        mais oriental das Américas, oferece vistas deslumbrantes do Atlântico e é ideal para 
                        apreciar o pôr do sol.                        
                    </P>
                    <P>
                        Cabo Branco oferece diversas atividades e entretenimento, como surf, stand-up paddle e kitesurf, 
                        além de quiosques que servem petiscos e bebidas.
                    </P>
                    <P>
                        A área é rica em cultura e gastronomia paraibana, com restaurantes que oferecem pratos tradicionais 
                        nordestinos influenciados por culturas indígenas, africanas e europeias.
                    </P>
                    <P>
                        À noite, Cabo Branco tem uma animada cena noturna, com bares e restaurantes à beira-mar que 
                        oferecem música ao vivo e uma atmosfera descontraída.
                    </P>
                    <P>
                        A Praia de Cabo Branco encanta com sua beleza natural, cultura vibrante e hospitalidade. 
                        Seja para relaxar, explorar ou contemplar a paisagem, Cabo Branco proporciona uma experiência inesquecível.
                    </P>
                </div>
            </div>
        </div>
    </section>
    
    <div class="grupoMapa">
        <section class="content">
        <div class="left-column">
            <!-- Informações das tábuas de maré aqui -->
            <div class="tabuas" id="tabuasMare">
                <h2>Tábua de Maré</h2><hr>
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
                    <h4>Sexta 28/06/24</h4>
                    <p> 
                        02:56h - 0.6m<br>
                        09:15h - 2.2m<br>
                        15:39h - 0.5m<br>
                        22:00h - 2.0m<hr>
                    </p><hr>
                </div>
                <div class="previsao">
                    <h4>Sábado 29/06/24</h4>
                    <p>
                        04:02h - 0.7m<br>
                        10:21h - 2.1m<br>
                        16:43h - 0.6m<br>
                        23:04h - 2.0m<hr>
                    </p><hr>
                </div>
                <div class="previsao">
                    <h4>Domingo 30/06/24</h4>
                    <p>
                        05:09h - 0.7m<br>
                        11:28h - 2.1m<br>
                        17:51h - 0.6m<hr>
                    </p><hr>
                </div>
                <div class="previsao">
                    <h4>Segunda 01/07/24</h4>
                    <p>
                        00:09h - 2.0m<br>
                        06:23h - 0.6m<br>
                        12:39h - 2.1m<br>
                        18:53h - 0.6m<hr>
                    </p><hr>
                </div>
                <div class="previsao">
                    <h4>Terça 02/07/24</h4>
                    <p>
                        01:11h - 2.1m<br>
                        07:32h - 0.5m<br>
                        13:45h - 2.1m<br>
                        19:54h - 0.6m<hr>
                    </p><hr>
                </div>
                <div class="previsao">
                    <h4>Quarta 03/07/24</h4>
                    <p>
                        02:13h - 2.2m<br>
                        08:28h - 0.4m<br>
                        14:43h - 2.1m<br>
                        20:47h - 0.6m<hr>
                    </p><hr>
                </div>
                <div class="previsao">
                    <h4>Quinta 04/07/24</h4>
                    <p>
                        03:06h - 2.3m<br>
                        09:17h - 0.4m<br>
                        15:38h - 2.2m<br>
                        21:32h - 0.5m<hr>
                    </p><hr>
                </div>
                <div class="previsao">
                    <h4>Sexta 05/07/24</h4>
                    <p>
                        03:54h - 2.3m<br>
                        10:04h - 0.3m<br>
                        16:23h - 2.2m<br>
                        22:15h - 0.5m<hr>
                    </p><hr>
                </div>
                <div class="previsao">
                    <h4>Sábado 06/07/24</h4>
                    <p>
                        04:36h - 2.3m<br>
                        10:47h - 0.3m<br>
                        17:02h - 2.2m<br>
                        22:54h - 0.5m<hr>
                    </p><hr>
                </div>
                <div class="previsao">
                    <h4>Domingo 07/07/24</h4>
                    <p>
                        05:11h - 2.3m<br>
                        11:26h - 0.3m<br>
                        17:41h - 2.1m<br>
                        23:30h - 0.5m<hr>
                    </p><hr>
                </div>
                <div class="previsao">
                    <h4>Segunda 08/07/24</h4>
                    <p>
                        05:47h - 2.3m<br>
                        12:02h - 0.4m<br>
                        18:15h - 2.1m<hr>
                    </p><hr>
                </div>
                <div class="previsao">
                    <h4>Terça 09/07/24</h4>
                    <p>
                        00:02h - 0.5m<br>
                        06:21h - 2.3m<br>
                        12:38h - 0.4m<br>
                        18:51h - 2.1m<hr>
                    </p><hr>
                </div>
                <div class="previsao">
                    <h4>Quarta 10/07/24</h4>
                    <p>
                        00:38h - 0.6m<br>
                        06:56h - 2.2m<br>
                        13:09h - 0.5m<br>
                        19:26h - 2.0m<hr>
                    </p><hr>
                </div>
                <div class="previsao">
                    <h4>Quinta 11/07/24</h4>
                    <p>
                        01:13h - 0.7m<br>
                        07:36h - 2.1m<br>
                        13:49h - 0.6m<br>
                        20:06h - 1.9m<hr>
                    </p><hr>
                </div>
                <div class="previsao">
                    <h4>Sexta 12/07/24</h4>
                    <p>
                        01:56h - 0.7m<br>
                        08:19h - 2.0m<br>
                        14:32h - 0.7m<br>
                        20:53h - 1.9m<hr>
                    </p><hr>
                </div>
                <div class="previsao">
                    <h4>Sábado 13/07/24</h4>
                    <p>
                        02:43h - 0.8m<br>
                        09:06h - 1.9m<br>
                        15:21h - 0.8m<br>
                        21:45h - 1.8m<hr>
                    </p><hr>
                </div>
                <div class="previsao">
                    <h4>Domingo 14/07/24</h4>
                    <p>
                        03:45h - 0.9m<br>
                        10:04h - 1.8m<br>
                        16:21h - 0.9m<br>
                        22:43h - 1.8m<hr>
                    </p><hr>
                </div>
                <div class="previsao">
                    <h4>Segunda 15/07/24</h4>
                    <p>
                        04:51h - 0.9m<br>
                        11:08h - 1.8m<br>
                        17:23h - 0.9m<br>
                        23:49h - 1.8m<hr>
                    </p><hr>
                </div>
                <div class="previsao">
                    <h4>Terça 16/07/24</h4>
                    <p>
                        05:58h - 0.9m<br>
                        12:15h - 1.8m<br>
                        18:23h - 0.8m<hr>
                    </p><hr>
                    </div>
                <div class="previsao">
                    <h4>Quarta 17/07/24</h4>
                    <p>
                        00:49h - 1.9m<br>
                        07:06h - 0.8m<br>
                        13:17h - 1.9m<br>
                        19:24h - 0.8m<hr>
                    </p><hr>
                </div>
                <div class="previsao">
                    <h4>Quinta 18/07/24</h4>
                    <p>
                        01:41h - 2.0m<br>
                        08:02h - 0.6m<br>
                        14:11h - 2.0m<br>
                        20:17h - 0.6m<hr>
                    </p><hr>
                </div>
                <div class="previsao">
                    <h4>Sexta 19/07/24</h4>
                    <p>
                        02:34h - 2.2m<br>
                        08:53h - 0.5m<br>
                        15:06h - 2.1m<br>
                        21:06h - 0.5m<hr>
                    </p><hr>
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
    
    
    <section class="calendar">
        <!-- Calendário e descrição aqui -->
    </section>

    <!-- Cards de vídeos do YouTube -->
    <section class="videos">
        <h2>Galeria de Vídeos</h2>
        <div class="video-cards">
            <div class="video-card">
                <iframe src="https://www.youtube-nocookie.com/embed/fE9XYai51VY?si=53WP19du0wwms0-t" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="video-card">
                <iframe src="https://www.youtube.com/embed/v5rRm6DOHzg?si=zHDv_kkRe6RZSqZy" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="video-card">
                <iframe src="https://www.youtube.com/embed/cvaWef0O-z0?si=UNzL98lNIba4QAYV" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="video-card">
                <iframe src="https://www.youtube.com/embed/wQ3FxpNIW9U?si=3ysctNOFMfUr_c43" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </section>

    <!-- Rodapé -->
    <footer>
        <div class="footer-content">
            <div class="btn-topo">
                <a href="./cabobranco.php#top">Topo</a>
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
                    <p>3548-9886</p>
                </div>
            </div>
        </div>
    </footer>






    <script>
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

    <script src="./js/cabobranco.js"></script>
</body>
</html>

<!--
https://turismo.joaopessoa.pb.gov.br/
-->