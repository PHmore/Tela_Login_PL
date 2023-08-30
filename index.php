<?php
//ENCAMINHAMENTO PELA URL

$url = $_SERVER ('REQUEST_URI');

switch($url)
{
    case '/':
        echo ("home");
        break;
    case '/login':
        include ("src/view/pages/Homepage.html");
        break;
    case '/subscribe':
        include ("src/view/pages/Subspage.html");
    default:
        echo 'Rota não tratada';
        break;
}

?>