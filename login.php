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
        <form novalidate action="login_POST.php" method="POST">
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
        </form>
    </div>
    <Script>
        document.getElementById('nome').addEventListener('submit', function (e) {
            let hasError = false;

            document.querySelectorAll('.error-message').forEach(function (msg) {
                msg.textContent = '';
            });
            
            const nome = document.getElementById('nome').value;
            if (!isset(nome)) {
                document.getElementById('erroNome').textContent = "Digite o nome de usuário";
                hasError = true;
            }

            const senha = document.getElementById('senha').value;
            if (senha.length < 6) {
                document.getElementById('erroSenha').textContent = "Por favor, insira uma senha com pelo menos 06 dígitos";
                hasError = true;
            }

            if (hasError) {
                e.preventDefault();
            }


        });





    </Script>





</body>


</html>