<?php

require('elements/mysql.php');

$uri = $_SERVER['REQUEST_URI'];

switch ($uri) {
    case '/':
        require('public/index.html');
        break;
    case '/game':
        require('elements/actionsFormUser.php');
        require('pages/game.php');
        break; 
    default:
        http_response_code(404);
        require('elements/404.php');
}