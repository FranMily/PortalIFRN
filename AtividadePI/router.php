<?php

/**
 * Este arquivo contém as rotas registradas para a aplicação.
 * A variável $rotas guarda pares de valores que representam
 * a rota e o script php ou arquivo html correspondente.
 * 
 * Além disso, uma função chamada rotear () é utilizada para
 * implementar o algoritmo de roteamento base da aplicação.
 */


$rotas = [
    '/' => '/pages/home.html',
    '/create' => '/pages/create.html',
    '/store' => '/pages/cadastro.php',
    '/dashboard' => '/dashboard.php',
    '/logout' => '/logout.php',
    '/login' => '/pages/login.html',
    '/logiin' => '/pages/logiin.php',
];

/**
 * Função rotear utilizada para 
 * procurar os arquivos correpondentes da aplicação
 * referentes as rotas desejadas.
 */
function rotear ($uri, $rotas) {   

    if (array_key_exists($uri, $rotas)) {
        include __DIR__ . $rotas[$uri];
    } else {
        header("Location: /");
    }

}