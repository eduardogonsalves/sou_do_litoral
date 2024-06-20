<!--SoliDeoGloria-->
<!DOCTYPE html>
<html lang="pt-br">
<!--Conexão com Banco de Dados-->
<?php require('./bandoDeDados/config.php') ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-Cadastro</title>
    <link rel="stylesheet" href="css/login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="login">
        <form id="loginForm" action="login_POST.php" method="POST" novalidate>
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" id="nome" name="nome" placeholder="nome" required>
                <i class='bx bxs-user'></i>
                <div class="error-message" id="erroNome"></div>
            </div>
            <div class="input-box">
                <input type="password" id="senha" name="senha" placeholder="senha" required>
                <i class='bx bxs-lock-alt'></i>
                <div class="error-message" id="erroSenha"></div>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox">Lembrar senha</label>
                <a href="#"> Esqueceu a senha?</a>
            </div>

            <button type="submit" class="btn">Login</button>

            <div class="register-link">
                <p>Ainda não é registrado?<a href="./cadastro.php"> Cadastre-se!</a></p>
            </div>
            <div class="error-message" id="error-message"></div>
        </form>
    </div>
    <script>
        document.getElementById('loginForm').addEventListener('submit', function (event) {
            event.preventDefault(); // Impede o envio do formulário para fazer a validação via AJAX
            var username = document.getElementById('nome').value;
            var password = document.getElementById('senha').value;
            var erroNome = document.getElementById('erroNome');
            var erroSenha = document.getElementById('erroSenha');
            var errorMessage = document.getElementById('error-message');

            erroNome.innerText = '';
            erroSenha.innerText = '';
            errorMessage.innerText = '';

            if (username === "") {
                erroNome.innerText = "O nome de usuário é obrigatório.";
                return false;
            } else if (password === "") {
                erroSenha.innerText = "A senha é obrigatória.";
                return false;
            } else if (password.length < 6) {
                erroSenha.innerText = "A senha deve ter pelo menos 6 caracteres.";
                return false;
            }

            // Enviar os dados para validação no servidor via AJAX
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "login_POST.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    var response = xhr.responseText;
                    if (response === "Login bem-sucedido!") {
                        window.location.href = "index.php"; // Redireciona para a página de dashboard
                    } else {
                        errorMessage.innerText = response;
                    }
                }
            };
            xhr.send("nome=" + encodeURIComponent(username) + "&senha=" + encodeURIComponent(password));

            return false;
        });
    </script>
</body>
</html>