<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadastro.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;700&display=swap" rel="stylesheet">
    <title>Cadastro</title>
</head>
<body>
    <div class="corpo">
        <form novalidate action="cadastro_POST.php" method="POST" class="cadastro" id="form">
            <label for="userName">Nome <span class="info-icon" title="Campo obrigatório">🛈</span></label>
            <input type="text" name="userName" id="userName" placeholder="Nome" required>
            <div class="error-message" id="erroNome"></div>

            <label for="sobrenome">Sobrenome</label>
            <input type="text" name="sobrenome" id="sobrenome">
            <div class="error-message" id="erroSobrenome"></div>

            <label for="email">Email <span class="info-icon" title="Campo obrigatório">🛈</span></label>
            <input type="email" name="email" id="email" placeholder="seu_melhor_email@" required>
            <div class="error-message" id="erroEmail"></div>

            <label for="cell">Telefone + DDD <span class="info-icon" title="Campo obrigatório">🛈</span></label>
            <input type="text" name="cell" id="cell" placeholder="99-99999-9999" required>
            <div class="error-message" id="erroCell"></div>

            <label for="password">Senha</label>
            <input type="password" name="password" id="password">
            <div class="error-message" id="erroSenha"></div>

            <label for="confirmar">Confirmar Senha</label>
            <input type="password" name="confirmar" id="confirmar">
            <div class="error-message" id="erroConfirma"></div>

            <button class="botao" type="submit">Enviar</button>
        </form>
    </div>

    <script>
        document.getElementById('form').addEventListener('submit', function (e) {
            let hasError = false;

            document.querySelectorAll('.error-message').forEach(function (msg) {
                msg.textContent = '';
            });

            const nome = document.getElementById('userName').value;
            if (!/^[a-zA-Z-' ]*$/.test(nome)) {
                document.getElementById('erroNome').textContent = "Apenas letras";
                hasError = true;
            }

            const sobrenome = document.getElementById('sobrenome').value;
            if (!/^[a-zA-Z-' ]*$/.test(sobrenome)) {
                document.getElementById('erroSobrenome').textContent = "Apenas letras";
                hasError = true;
            }

            const email = document.getElementById('email').value;
            if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
                document.getElementById('erroEmail').textContent = "Favor informar um email válido";
                hasError = true;
            }

            const cell = document.getElementById('cell').value;
            if (!/^\d{2}-\d{5}-\d{4}$/.test(cell)) {
                document.getElementById('erroCell').textContent = "Insira um número de telefone válido no formato 99-99999-9999";
                hasError = true;
            }

            const senha = document.getElementById('password').value;
            if (senha.length < 6) {
                document.getElementById('erroSenha').textContent = "Por favor, insira uma senha com pelo menos 06 dígitos";
                hasError = true;
            }

            const confirmar = document.getElementById('confirmar').value;
            if (confirmar !== senha) {
                document.getElementById('erroConfirma').textContent = "As senhas precisam ser iguais";
                hasError = true;
            }

            if (hasError) {
                e.preventDefault();
            }
        });

        document.getElementById('cell').addEventListener('input', function (e) {
            var value = e.target.value;
            e.target.value = value.replace(/[^0-9-]/g, '');
        });
    </script>
</body>
</html>
