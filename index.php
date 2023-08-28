<?php
//ENCAMINHAMENTO PELA URL

$url = $_SERVER ('REQUEST_URI');

switch($url)
{
    case '/':
        echo ("home");
        break;
    case '/login':
        include ("src/view/pages/Homepage.php");
        break;
    case '/subscribe':
        include ("src/view/pages/Subspage.php");
    default:
        echo 'Rota não tratada';
        break;
}

?>