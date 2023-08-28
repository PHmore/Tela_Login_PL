<?php

use FTP\Connection;

require_once ("src\config\Connection.php");

class UserModel {


    function login ($name)
    {
        $connect = new Connection ();
        $sql = $connect -> getConnection () -> query ("SELECT * FROM usuario WHERE nome = '$name'");
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