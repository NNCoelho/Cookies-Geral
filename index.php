<?php

    $dados = array(
        'nome' => 'Nuno',
        'apelido' => 'Coelho Dos Santos',
        'idade' => 39
    );

    // Encriptar cookie com JSON
    setcookie('dados', json_encode($dados, 128), time() + 10000);

    // Desencriptar cookie com JSON
    $dados = json_decode($_COOKIE['dados'], 128);

    echo '<pre>';
    echo 'Olá, ' . $dados['nome'] . ' ' . $dados['apelido'] . ', você tem ' . $dados['idade'] . ' anos.';

    // Eliminar o cookie (validade)
    setcookie('dados', '', time() - 1);

?>