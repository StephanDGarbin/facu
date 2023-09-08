<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];

    // Processar os dados aqui (por exemplo, enviar um e-mail ou salvar em um banco de dados)

    // Exibir mensagem de sucesso
    echo '<div class="mensagem sucesso">Mensagem enviada com sucesso!</div>';
} else {
    // Redirecionar para a página de contato se o formulário não foi enviado
    header("Location: contato.html");
    exit;
}
?>
