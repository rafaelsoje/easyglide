<?php

// Define o tipo de conteúdo da página web como HTML com codificação UTF-8
header('Content-type: text/html; charset=utf-8');

// Redireciona para a versão segura (HTTPS)
// if ($_SERVER['HTTPS'] !== 'on') {
//     $redirectURL = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
//     header('Location: ' . $redirectURL);
//     exit();
// }

// session_set_cookie_params([
//     'secure' => true,  // Apenas transmitir cookies por conexões seguras (HTTPS)
//     'httponly' => true, // Apenas acessível via HTTP (não JavaScript)
//     'samesite' => 'Strict', // Restringe o envio do cookie a solicitações do mesmo site    
// ]);

session_start();
require '../vendor/autoload.php';
require '../src/routes.php';


$router->run( $router->routes );