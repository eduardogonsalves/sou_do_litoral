<!--SoliDeoGloria-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Destino Turístico</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('./imagens/informacoes/fundoInfo.jpg') no-repeat;
            background-size: cover;
            background-position: center;  
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input, .form-group textarea {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        .form-group textarea {
            height: 100px;
        }
        .form-group button {
            background-color: #5cb85c;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .form-group button:hover {
            background-color: #4cae4c;
        }

        #descricao_roteiro{
            width: 40em;
            height: 30em;
        }

    </style>
</head>
<body>

<div class="container">
    <h1>Cadastro de Destino Turístico</h1>
    <form action="inserir_destino.php" method="POST">
        <div class="form-group">
            <label for="titulo_guia_pagina">Título Guia Página</label>
            <input type="text" id="titulo_guia_pagina" name="titulo_guia_pagina" required>
        </div>
        <div class="form-group">
            <label for="nome_destino">Nome do Destino</label>
            <input type="text" id="nome_destino" name="nome_destino" required>
        </div>
        <div class="form-group">
            <label for="carrossel1">Carrossel 1</label>
            <input type="text" id="carrossel1" name="carrossel1">
        </div>
        <div class="form-group">
            <label for="carrossel2">Carrossel 2</label>
            <input type="text" id="carrossel2" name="carrossel2">
        </div>
        <div class="form-group">
            <label for="carrossel3">Carrossel 3</label>
            <input type="text" id="carrossel3" name="carrossel3">
        </div>
        <div class="form-group">
            <label for="carrossel4">Carrossel 4</label>
            <input type="text" id="carrossel4" name="carrossel4">
        </div>
        <div class="form-group">
            <label for="carrossel5">Carrossel 5</label>
            <input type="text" id="carrossel5" name="carrossel5">
        </div>
        <div class="form-group">
            <label for="carrossel6">Carrossel 6</label>
            <input type="text" id="carrossel6" name="carrossel6">
        </div>
        <div class="form-group">
            <label for="carrossel7">Carrossel 7</label>
            <input type="text" id="carrossel7" name="carrossel7">
        </div>
        <div class="form-group">
            <label for="titulo_descricao">Título Descrição</label>
            <input type="text" id="titulo_descricao" name="titulo_descricao" required>
        </div>
        <div class="form-group">
            <label for="localizacao_acesso">Localização e Acesso</label>
            <textarea id="localizacao_acesso" name="localizacao_acesso" required></textarea>
        </div>
        <div>
            <label for="descricao_roteiro">Descrição do Roteiro:</label>
            <small>Escreva cada parágrafo separadamente, cada um em uma nova linha.</small>
            <textarea id="descricao_roteiro" name="descricao_roteiro" required></textarea>
        </div>
        <div class="form-group">
            <label for="video1">Vídeo 1</label>
            <input type="text" id="video1" name="video1" required>
        </div>
        <div class="form-group">
            <label for="video2">Vídeo 2</label>
            <input type="text" id="video2" name="video2" required>
        </div>
        <div class="form-group">
            <label for="video3">Vídeo 3</label>
            <input type="text" id="video3" name="video3" required>
        </div>
        <div class="form-group">
            <label for="video4">Vídeo 4</label>
            <input type="text" id="video4" name="video4">
        </div>
        <div class="form-group">
            <label for="cidade">Cidade</label>
            <input type="text" id="cidade" name="cidade" required>
        </div>
        <div class="form-group">
            <label for="mapa_cidade">Mapa da Cidade</label>
            <input type="text" id="mapa_cidade" name="mapa_cidade" required>
        </div>
        <div class="form-group">
            <label for="long_cidade">Longitude da Cidade</label>
            <input type="text" id="long_cidade" name="long_cidade" required>
        </div>
        <div class="form-group">
            <label for="lat_rest1">Latitude Restaurante 1</label>
            <input type="text" id="lat_rest1" name="lat_rest1" required>
        </div>
        <div class="form-group">
            <label for="long_rest1">Longitude Restaurante 1</label>
            <input type="text" id="long_rest1" name="long_rest1" required>
        </div>
        <div class="form-group">
            <label for="nome_rest1">Nome Restaurante 1</label>
            <input type="text" id="nome_rest1" name="nome_rest1" required>
        </div>
        <div class="form-group">
            <label for="lat_rest2">Latitude Restaurante 2</label>
            <input type="text" id="lat_rest2" name="lat_rest2" required>
        </div>
        <div class="form-group">
            <label for="long_rest2">Longitude Restaurante 2</label>
            <input type="text" id="long_rest2" name="long_rest2" required>
        </div>
        <div class="form-group">
            <label for="nome_rest2">Nome Restaurante 2</label>
            <input type="text" id="nome_rest2" name="nome_rest2" required>
        </div>

        <div class="form-group">
            <label for="lat_rest3">Latitude Restaurante 3</label>
            <input type="text" id="lat_rest3" name="lat_rest3">
        </div>
        <div class="form-group">
            <label for="long_rest3">Longitude Restaurante 3</label>
            <input type="text" id="long_rest3" name="long_rest3">
        </div>
        <div class="form-group">
            <label for="nome_rest3">Nome Restaurante 3</label>
            <input type="text" id="nome_rest3" name="nome_rest3">
        </div>
        <div class="form-group">
            <label for="lat_rest4">Latitude Restaurante 4</label>
            <input type="text" id="lat_rest4" name="lat_rest4">
        </div>
        <div class="form-group">
            <label for="long_rest4">Longitude Restaurante 4</label>
            <input type="text" id="long_rest4" name="long_rest4">
        </div>
        <div class="form-group">
            <label for="nome_rest4">Nome Restaurante 4</label>
            <input type="text" id="nome_rest4" name="nome_rest4">
        </div>
        <div class="form-group">
            <label for="lat_rest5">Latitude Restaurante 5</label>
            <input type="text" id="lat_rest5" name="lat_rest5">
        </div>
        <div class="form-group">
            <label for="long_rest5">Longitude Restaurante 5</label>
            <input type="text" id="long_rest5" name="long_rest5">
        </div>
        <div class="form-group">
            <label for="nome_rest5">Nome Restaurante 5</label>
            <input type="text" id="nome_rest5" name="nome_rest5">
        </div>
        <div class="form-group">
            <label for="lat_rest6">Latitude Restaurante 6</label>
            <input type="text" id="lat_rest6" name="lat_rest6">
        </div>
        <div class="form-group">
            <label for="long_rest6">Longitude Restaurante 6</label>
            <input type="text" id="long_rest6" name="long_rest6">
        </div>
        <div class="form-group">
            <label for="nome_rest6">Nome Restaurante 6</label>
            <input type="text" id="nome_rest6" name="nome_rest6">
        </div>
        <div class="form-group">
            <label for="lat_rest7">Latitude Restaurante 7</label>
            <input type="text" id="lat_rest7" name="lat_rest7">
        </div>
        <div class="form-group">
            <label for="long_rest7">Longitude Restaurante 7</label>
            <input type="text" id="long_rest7" name="long_rest7">
        </div>
        <div class="form-group">
            <label for="nome_rest7">Nome Restaurante 7</label>
            <input type="text" id="nome_rest7" name="nome_rest7">
        </div>
        <div class="form-group">
            <label for="lat_rest8">Latitude Restaurante 8</label>
            <input type="text" id="lat_rest8" name="lat_rest8">
        </div>
        <div class="form-group">
            <label for="long_rest8">Longitude Restaurante 8</label>
            <input type="text" id="long_rest8" name="long_rest8">
        </div>
        <div class="form-group">
            <label for="nome_rest8">Nome Restaurante 8</label>
            <input type="text" id="nome_rest8" name="nome_rest8">
        </div>
        <div class="form-group">
            <label for="lat_rest9">Latitude Restaurante 9</label>
            <input type="text" id="lat_rest9" name="lat_rest9">
        </div>
        <div class="form-group">
            <label for="long_rest9">Longitude Restaurante 9</label>
            <input type="text" id="long_rest9" name="long_rest9">
        </div>
        <div class="form-group">
            <label for="nome_rest9">Nome Restaurante 9</label>
            <input type="text" id="nome_rest9" name="nome_rest9">
        </div>
        <div class="form-group">
            <label for="lat_rest10">Latitude Restaurante 10</label>
            <input type="text" id="lat_rest10" name="lat_rest10">
        </div>
        <div class="form-group">
            <label for="long_rest10">Longitude Restaurante 10</label>
            <input type="text" id="long_rest10" name="long_rest10">
        </div>
        <div class="form-group">
            <label for="nome_rest10">Nome Restaurante 10</label>
            <input type="text" id="nome_rest10" name="nome_rest10">
        </div>
        <div class="form-group">
            <label for="lat_rest11">Latitude Restaurante 11</label>
            <input type="text" id="lat_rest11" name="lat_rest11">
        </div>
        <div class="form-group">
            <label for="long_rest11">Longitude Restaurante 11</label>
            <input type="text" id="long_rest11" name="long_rest11">
        </div>
        <div class="form-group">
            <label for="nome_rest11">Nome Restaurante 11</label>
            <input type="text" id="nome_rest11" name="nome_rest11">
        </div>
        <div class="form-group">
            <label for="lat_rest12">Latitude Restaurante 12</label>
            <input type="text" id="lat_rest12" name="lat_rest12">
        </div>
        <div class="form-group">
            <label for="long_rest12">Longitude Restaurante 12</label>
            <input type="text" id="long_rest12" name="long_rest12">
        </div>
        <div class="form-group">
            <label for="nome_rest12">Nome Restaurante 12</label>
            <input type="text" id="nome_rest12" name="nome_rest12">
        </div>
        <div class="form-group">
            <label for="lat_rest13">Latitude Restaurante 13</label>
            <input type="text" id="lat_rest13" name="lat_rest13">
        </div>
        <div class="form-group">
            <label for="long_rest13">Longitude Restaurante 13</label>
            <input type="text" id="long_rest13" name="long_rest13">
        </div>
        <div class="form-group">
            <label for="nome_rest13">Nome Restaurante 13</label>
            <input type="text" id="nome_rest13" name="nome_rest13">
        </div>
        <div class="form-group">
            <label for="lat_rest14">Latitude Restaurante 14</label>
            <input type="text" id="lat_rest14" name="lat_rest14">
        </div>
        <div class="form-group">
            <label for="long_rest14">Longitude Restaurante 14</label>
            <input type="text" id="long_rest14" name="long_rest14">
        </div>
        <div class="form-group">
            <label for="nome_rest14">Nome Restaurante 14</label>
            <input type="text" id="nome_rest14" name="nome_rest14">
        </div>
        <div class="form-group">
            <label for="lat_rest15">Latitude Restaurante 15</label>
            <input type="text" id="lat_rest15" name="lat_rest15">
        </div>
        <div class="form-group">
            <label for="long_rest15">Longitude Restaurante 15</label>
            <input type="text" id="long_rest15" name="long_rest15">
        </div>
        <div class="form-group">
            <label for="nome_rest15">Nome Restaurante 15</label>
            <input type="text" id="nome_rest15" name="nome_rest15">
        </div>

        <!-- Campos para locais de saúde -->
        <div class="form-group">
            <label for="lat_saude1">Latitude Local de Saúde 1</label>
            <input type="text" id="lat_saude1" name="lat_saude1">
        </div>
        <div class="form-group">
            <label for="long_saude1">Longitude Local de Saúde 1</label>
            <input type="text" id="long_saude1" name="long_saude1">
        </div>
        <div class="form-group">
            <label for="nome_saude1">Nome Local de Saúde 1</label>
            <input type="text" id="nome_saude1" name="nome_saude1">
        </div>
        <div class="form-group">
            <label for="lat_saude2">Latitude Local de Saúde 2</label>
            <input type="text" id="lat_saude2" name="lat_saude2">
        </div>
        <div class="form-group">
            <label for="long_saude2">Longitude Local de Saúde 2</label>
            <input type="text" id="long_saude2" name="long_saude2">
        </div>
        <div class="form-group">
            <label for="nome_saude2">Nome Local de Saúde 2</label>
            <input type="text" id="nome_saude2" name="nome_saude2">
        </div>
        <div class="form-group">
            <label for="lat_saude3">Latitude Local de Saúde 3</label>
            <input type="text" id="lat_saude3" name="lat_saude3">
        </div>
        <div class="form-group">
            <label for="long_saude3">Longitude Local de Saúde 3</label>
            <input type="text" id="long_saude3" name="long_saude3">
        </div>
        <div class="form-group">
            <label for="nome_saude3">Nome Local de Saúde 3</label>
            <input type="text" id="nome_saude3" name="nome_saude3">
        </div>
        <div class="form-group">
            <label for="lat_saude4">Latitude Local de Saúde 4</label>
            <input type="text" id="lat_saude4" name="lat_saude4">
        </div>
        <div class="form-group">
            <label for="long_saude4">Longitude Local de Saúde 4</label>
            <input type="text" id="long_saude4" name="long_saude4">
        </div>
        <div class="form-group">
            <label for="nome_saude4">Nome Local de Saúde 4</label>
            <input type="text" id="nome_saude4" name="nome_saude4">
        </div>
        <div class="form-group">
            <label for="lat_saude5">Latitude Local de Saúde 5</label>
            <input type="text" id="lat_saude5" name="lat_saude5">
        </div>
        <div class="form-group">
            <label for="long_saude5">Longitude Local de Saúde 5</label>
            <input type="text" id="long_saude5" name="long_saude5">
        </div>
        <div class="form-group">
            <label for="nome_saude5">Nome Local de Saúde 5</label>
            <input type="text" id="nome_saude5" name="nome_saude5">
        </div>

        <!-- Campos para locais de polícia -->
        <div class="form-group">
            <label for="lat_policia1">Latitude Local de Polícia 1</label>
            <input type="text" id="lat_policia1" name="lat_policia1">
        </div>
        <div class="form-group">
            <label for="long_policia1">Longitude Local de Polícia 1</label>
            <input type="text" id="long_policia1" name="long_policia1">
        </div>
        <div class="form-group">
            <label for="nome_policia1">Nome Local de Polícia 1</label>
            <input type="text" id="nome_policia1" name="nome_policia1">
        </div>
        <div class="form-group">
            <label for="lat_policia2">Latitude Local de Polícia 2</label>
            <input type="text" id="lat_policia2" name="lat_policia2">
        </div>
        <div class="form-group">
            <label for="long_policia2">Longitude Local de Polícia 2</label>
            <input type="text" id="long_policia2" name="long_policia2">
        </div>
        <div class="form-group">
            <label for="nome_policia2">Nome Local de Polícia 2</label>
            <input type="text" id="nome_policia2" name="nome_policia2">
        </div>
        <div class="form-group">
            <label for="lat_policia3">Latitude Local de Polícia 3</label>
            <input type="text" id="lat_policia3" name="lat_policia3">
        </div>
        <div class="form-group">
            <label for="long_policia3">Longitude Local de Polícia 3</label>
            <input type="text" id="long_policia3" name="long_policia3">
        </div>
        <div class="form-group">
            <label for="nome_policia3">Nome Local de Polícia 3</label>
            <input type="text" id="nome_policia3" name="nome_policia3">
        </div>

        
        <div class="form-group">
            <button type="submit">Enviar</button>
        </div>
    </form>
</div>

</body>
</html>
