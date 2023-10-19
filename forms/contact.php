<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Variáveis a partir dos dados do formulário
    $receiving_email_address = 'compliance@nnconsultoria.org';
    $from_name = $_POST['name'];
    $from_email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Configuração de cabeçalho
    $headers = "From: $from_name <$from_email>\r\n";
    $headers .= "Reply-To: $from_email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8\r\n";

    // Tente enviar o email
    if (mail($receiving_email_address, $subject, $message, $headers)) {
        echo "Email enviado com sucesso!";
    } else {
        echo "Falha ao enviar o email. Por favor, tente novamente mais tarde.";
    }
}
?>
