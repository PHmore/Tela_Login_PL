<?php
//ARQUIVO DE CONEXÃO 
namespace FTP;
use PDO; // Certifique-se de que o namespace esteja correto
class Connection
{
function getConnection ()
{
    $host = "localhost";
    $dbName = "mvcpl";
    $userName = "phmore";
    $password = "1919";
    $port = "5432";

    $pdo = new PDO ("pgsql:host=$host;port=$port;dbname=$dbName",$userName,$password);
    //$pdo = new PDO ("pgsql:dbname=$dbName; host=$host;port=$port;",$userName,$password);
    return $pdo;
}
}
?>

