<?php

require_once ("src/model/UserModel.php");

class UserController {


    function verifyLogin ($name)
    {
        $user = new UserModel ();
        $user = $user -> Login ($name);

        if(isset ($user[0]))
        {
            $data = $user [0];
            
            if($data["nome"] == $name)
            {
                return 1;
            } else
            {
                echo "O usuário não existe";
                echo "<br>";
                return 0;
            }
        }
        else
        {
            return 0;
        }
    }
}

$user = new UserModel ();
$user = $user -> Login ("ana");
$nome = $user [0];
print_r ($nome ["nome"]);

?>