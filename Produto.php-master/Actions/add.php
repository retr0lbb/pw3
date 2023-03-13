<?php
    require '../Contato.class.php';
        
    $user = new Usuario();

    if (isset($_POST['nome'])) {
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];

    }

    $user->addContact($nome, $senha, $email);

?>