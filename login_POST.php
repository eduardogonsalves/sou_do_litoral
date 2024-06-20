<?php
require('./bandoDeDados/config.php');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    // Validação de Nome
    if (empty($nome)) {
        echo "O nome de usuário é obrigatório.";
        exit();
    }

    // Validação de Senha
    if (empty($senha)) {
        echo "A senha é obrigatória.";
        exit();
    } else if (strlen($senha) < 6) {
        echo "A senha deve ter pelo menos 6 caracteres.";
        exit();
    }

    try {
        // Verificação no banco de dados
        $stmt = $pdo->prepare('SELECT * FROM usuario WHERE nome = :nome');
        $stmt->execute(['nome' => $nome]);
        $user = $stmt->fetch();

        if ($user) {
            if (password_verify($senha, $user['senha'])) {
                echo "Login bem-sucedido!";
            } else {
                echo "Senha incorreta.";
            }
        } else {
            echo "Nome de usuário não encontrado.";
        }
    } catch (PDOException $e) {
        // Trata o erro de conexão ao banco de dados
        echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
    }
}
?>
