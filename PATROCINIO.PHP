<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coleta dos dados do formulário
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];

    // Endereço de e-mail para onde enviar os dados
    $destinatario = "guel88442736@gmail.com";

    // Assunto do e-mail
    $assunto = "Solicitação de Patrocínio";

    // Construção do corpo do e-mail
    $corpo_email = "Nome: $nome\n";
    $corpo_email .= "Email: $email\n";
    $corpo_email .= "Mensagem:\n$mensagem";

    // Envia o e-mail
    if (mail($destinatario, $assunto, $corpo_email)) {
        echo "<p>Seu formulário foi enviado com sucesso! Obrigado por entrar em contato.</p>";
    } else {
        echo "<p>Ocorreu um erro ao enviar seu formulário. Por favor, tente novamente mais tarde.</p>";
    }
}
?>
