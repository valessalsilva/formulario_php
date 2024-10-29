<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    
    if (!empty($nome) && !empty($email) && !empty($mensagem)) {
        echo "Obrigado, $nome! Sua mensagem foi recebida.";
    } else {
        echo "Por favor, preencha todos os campos.";
    }
} else {
    echo "Método de envio inválido.";
}
?>