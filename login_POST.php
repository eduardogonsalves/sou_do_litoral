<!--SoliDeoGloria-->
<?php

    require('./bandoDeDados/config.php');

    if($_SERVER['REQUEST_METHOD'] == "POST") {
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];

        $erroNome = $erroSenha = "Nenhum";

        // Validação de Nome
        if(empty($nome)){
            $erroNome = "Digite o nome de usuário";
        } else if(!isset($nome)) {
            $erroNome = "Nome de incorreto ou $nome ainda não cadastrado";
        } else {
            $erroNome = "Nenhum";
        }

        // Validação de Senha
        if(empty($senha)){
            $erroSenha = "Digite sua senha";
        } else if(!isset($senha)) {
            $erroSenha = "Senha incorreta";
        } else {
            $erroSenha = "Nenhum";
        }
        //Haverá verificação de associação do nome de usuário à senha fornecida
        // o código abaixo é apenas para teste de página.
        
        if ($erroNome == "Nenhum" && $erroSenha == "Nenhum") {
            echo "<script>alert('Seja bem vindo $nome! Você será redirecionado à página inicial.');
            window.location.href = './index.php';</script>";
        }




    }


?>