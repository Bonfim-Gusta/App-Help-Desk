<?php
    session_start();

    $usuarios_app = [
        ['email' => 'adm@teste.com.br', 'senha' => '123456'],
        ['email' => 'user@teste.com.br', 'senha' => 'abcd'],
        ['email' => 'gu@teste.com.br', 'senha' => 'asdfgh'],
    ];

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $usuario_autenticado = false;
    foreach ($usuarios_app as $user)
    {
        if($email == $user['email'] && $senha == $user['senha'])
        {
            $usuario_autenticado = true;
        }
    }

    if($usuario_autenticado)
    {
        $_SESSION['autenticado'] = 'SIM';
        header('Location: ' .'home.php');
    }
    else
    {
        $_SESSION['autenticado'] = 'NAO';
        header('Location: index.php?login=erro');
    }

?>