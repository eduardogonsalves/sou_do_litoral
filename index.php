<!--SoliDeoGloria-->
<!DOCTYPE html>
<html lang="pt-br">

<!--
    Trabalho a realizar nesta página:
        - ajustar a disposição dos cards(inclusive colocar em percentual da página(CSS));
        - Acrescenta ícones de redes sociais ao rodapé(footer);
        - acrescentar notícias relevantes: Praias impróprias para banhos e outras.
-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Melhorar a descrição no decorrer do desenvolvimento-->
    <meta name="description" content="Descubra os melhores destinos turísticos no litoral paraibano! Explore praias paradisíacas, museus fascinantes, o zoológico local e muito mais. Encontre informações sobre hospedagem, restaurantes e atividades para tornar sua viagem inesquecível.">
    <link rel="stylesheet" href="css/style.css"><!--Referência do CSS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&display=swap" rel="stylesheet">
    <title>Sou do litoral</title>
</head>

<body>

    <!-- Barra de Menu -->
    <header class="header">
        <img src="./imagens/logofinal.png" alt="Logo Marca" style="height: 40px; width: 40px;"></a>
        <nav class="navbar">
            <a href="#">Home</a>
            <a href="./quemsomos.php">Quem somos</a>
            <a href="./index.php#nossosContatos">Contatos</a>
            <a href="./informacoes.php">Informações</a>
            <a href="./login.php">Login / Cadastro</a>
        </nav>   
    </header>

    <!-- Campo de busca (Digite Cabo Branco, para testar)-->

    <div class="buscador">
        <!-- Cabeçalho do campo de busca -->
        <h1 class="btn-busca">Destinos</h1>        
        <!-- Campo de busca -->
        <input type="text" id="campoBusca" placeholder="Digite um destino...">
        <ul id="listaSuspensa"></ul>

    </div>

    <!-- Página Inicial -->
    <div class="headline">        
        <h1 id="Chamada">Sou do litoral</h1>
        <hr class="styled-hr">
        <p style="font-size: 35px; font-weight: 500; text-shadow: 2px 2px 4px #000000; display: flex; text-align: center;"> Da Jampa que você adora!</p>
    </div>
        

    <!-- Cards com opções de passeios -->    
    <div class="card-container">
        <div class="card">
            <a style="text-decoration: none;" href="./praias.php">
                <img src="./imagens/10.webp" alt="Imagem de Praia">
                <h1>Praias</h1>
                <p>
                    Descubra as mais belas praias ao redor do mundo.Aqui você encontrará as melhores opções de praias que o litoral paraibano pode lhe oferecer.            
                </p>
            </a>  
        </div>

        <div class="card">
            <a style="text-decoration: none;" href="./monumentos.php">
                <img src="./imagens/monumentos.jpg" alt="Centro Histórico João Pessoa-PB">
                <h1>Monumentos Históricos</h1>
                <p>
                    Explore a História de João Pessoa. Descubra o Encanto Colonial das Ruas e Praças, onde o Passado Português Ganha Vida. Delicie-se com a Arquitetura Preservada, os Museus e a Vibrante Cultura Local.      
                </p>
            </a>
        </div>
        <div class="card">
            <a style="text-decoration: none;" href="gastronomia.php">
                <img src="./imagens/gastrono.jpg" alt="Imagem de Praia">
                <h1>Gastronomia</h1>
                <p>
                    Desvende os Sabores do Nordeste Brasileiro. Explore uma Viagem Culinária Pelos Aromas e Temperos Únicos da Região.            
                </p>
            </a>
        </div>
        <div class="card">
            <a style="text-decoration: none;" href="./igrejas.php">
                <img src="./imagens/igrejas.jpg" alt="Imagem de Praia">
                <h1>Igrejas</h1>
                <p>
                    Descubra a Fé e a Arquitetura das Igrejas. Admire a Majestade das Construções Religiosas, Obras-primas de Arte e Devoção. Cada Igreja Conta uma História de Espiritualidade e Tradição.            
                </p>
            </a>
        </div>
        <div class="card">
            <a style="text-decoration: none;" href="./artesanato.php">
                <img src="./imagens/artesanato.jpg" alt="Imagem de Praia">
                <h1>Artesanatos</h1>
                <p>
                    Explore a Arte e a Tradição do Artesanato Nordestino. Encante-se com as Cores e Texturas dos Tecidos, Cerâmicas e Esculturas Feitas à Mão.            
                </p>
            </a>
        </div>
        
    </div>

    <!-- Galeria Interativa -->
    <div class="wrapper">
        <div class="items">
            <div class="item" tabindex="0" style="background-image: url(./imagens/1.jpg);"></div>
            <div class="item" tabindex="0" style="background-image: url(./imagens/2.png);"></div>
            <div class="item" tabindex="0" style="background-image: url(./imagens/3.webp);"></div>
            <div class="item" tabindex="0" style="background-image: url(./imagens/4.jpeg);"></div>
            <div class="item" tabindex="0" style="background-image: url(./imagens/5.jpg);"></div>
            <div class="item" tabindex="0" style="background-image: url(./imagens/6.jpg);"></div>
            <div class="item" tabindex="0" style="background-image: url(./imagens/7.jpg);"></div>
            <div class="item" tabindex="0" style="background-image: url(./imagens/8.jpg);"></div>
            <div class="item" tabindex="0" style="background-image: url(./imagens/9.jpg);"></div>
            <div class="item" tabindex="0" style="background-image: url(./imagens/10.webp);"></div>
            <div class="item" tabindex="0" style="background-image: url(./imagens/11.jpg);"></div>
            <div class="item" tabindex="0" style="background-image: url(./imagens/12.jpg);"></div>
            <div class="item" tabindex="0" style="background-image: url(./imagens/13.jpg);"></div>
        </div>
    </div>

    <!-- Cards com notícias -->
    <div class="titulo_news"> 
        <h2>Notícias</h2>
    </div>

    <div class="new-container">

        <div class="news">
            <a style="text-decoration: none;" href="https://www.joaopessoa.pb.gov.br/noticias/espacos-publicos-mantidos-pela-prefeitura-sao-opcoes-de-lazer-em-joao-pessoa/" target="_blank">
                
                <h2>Espaços públicos mantidos pela Prefeitura são opções de lazer em João Pessoa</h2>
                <p>
                    As férias de julho estão chegando e, mais uma vez, a intenção de viajar dos brasileiros para o Nordeste 
                    continua em alta. A Decolar - empresa de viagens líder na América Latina - analisou as preferências de 
                    viagens nacionais em seu site e app. De acordo com o estudo, dos oito primeiros destinos mais buscados, 
                    sete estão no Nordeste - o Rio de Janeiro é a exceção - e João Pessoa é o oitavo mais procurado para o período.           
                </p>
            </a>  
        </div>
        <div class="news">
            <a style="text-decoration: none;" href="https://www.joaopessoa.pb.gov.br/noticias/espacos-publicos-mantidos-pela-prefeitura-sao-opcoes-de-lazer-em-joao-pessoa/" target="_blank">
                
                <h2>Espaços públicos mantidos pela Prefeitura são opções de lazer em João Pessoa</h2>
                <p>
                    As férias de julho estão chegando e, mais uma vez, a intenção de viajar dos brasileiros para o Nordeste 
                    continua em alta. A Decolar - empresa de viagens líder na América Latina - analisou as preferências de 
                    viagens nacionais em seu site e app. De acordo com o estudo, dos oito primeiros destinos mais buscados, 
                    sete estão no Nordeste - o Rio de Janeiro é a exceção - e João Pessoa é o oitavo mais procurado para o período.           
                </p>
            </a>  
        </div>
        <div class="news">
            <a style="text-decoration: none;" href="https://www.joaopessoa.pb.gov.br/noticias/espacos-publicos-mantidos-pela-prefeitura-sao-opcoes-de-lazer-em-joao-pessoa/" target="_blank">
                
                <h2>Espaços públicos mantidos pela Prefeitura são opções de lazer em João Pessoa</h2>
                <p>
                    As férias de julho estão chegando e, mais uma vez, a intenção de viajar dos brasileiros para o Nordeste 
                    continua em alta. A Decolar - empresa de viagens líder na América Latina - analisou as preferências de 
                    viagens nacionais em seu site e app. De acordo com o estudo, dos oito primeiros destinos mais buscados, 
                    sete estão no Nordeste - o Rio de Janeiro é a exceção - e João Pessoa é o oitavo mais procurado para o período.           
                </p>
            </a>  
        </div>
    </div>
    <div style="text-align:right; margin-right: 250px; font-size: 20px; font-weight:600; color: rgb(44, 44, 121);">
            <a style="text-decoration:none"  href="#">mais notícias...</a>
    </div>



    <!-- Rodapé -->
<footer>
    <div id="nossosContatos" class="footer-columns">
        <div class="column">
            <h3>© Sou do Litoral</h3>
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
</footer>


    <script src="./js/script.js"></script>
</body>
</html>

<!--
    Busca de imagens em:
    https://unsplash.com/pt-br/s/fotografias/praia

    https://sudema.pb.gov.br/qualidade-do-ambiente/qualidade-dos-mares
-->