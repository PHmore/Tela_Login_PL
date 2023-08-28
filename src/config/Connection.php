<?php
//ARQUIVO DE CONEXÃO 

class Connection
{
function getConnection ()
{
    $host = "localhost";
    $dbName = "mvc-PL";
    $userName = "postgres";
    $password = "1234";
    $port = "5432";

    $pdo = new PDO ("pgsql:host=$host;port=$port;dbname=$dbName",$userName,$password);
    //$pdo = new PDO ("pgsql:dbname=$dbName; host=$host;port=$port;",$userName,$password);
    return $pdo;
}
}
?>