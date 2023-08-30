<?php

use FTP\Connection;

//requisição do arquivo de conexão
require_once ("src\config\Connection.php");

//Ações do usuário estão em UserModel
class UserModel
{
    function Login ($name)
    {
        $connect = new Connection ();
        $sql = $connect -> getConnection() -> query ("SELECT * FROM user WHERE email = '$name'");
        $sql = $sql -> fetchAll (PDO::FETCH_ASSOC);
        return $sql;
    }
}

/* TESTE
$user = new UserModel ();
$user = $user -> Login ("ana");
$nome = $user [0];
print_r ($nome ["nome"]);

*/

?>