<?php

require_once ("src\controller\UserController.php");

if($_POST) {

    $name = $_POST ["name"];

    $user = new UserController ();

    if ($user -> verifyLogin ($name)) {
        echo ("<script> console.log ('usuario'); </script>");
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel = "stylesheet" href="http://localhost:8000/src/view/css/style_hp.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Paid4Luck</title>

    <link rel = "stylesheet" type="text/css" href="../css/style_hp.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@900&family=Roboto:ital@1&display=swap" rel="stylesheet">

</head>
<body>
    <main>
        <div class= "main--container">
            <div class = "main--description">
                <h1>Paid 4Luck</h1>
                <p>Site de apostas 100% confiável e seguro. <dd>"As vezes você paga pela sorte, as vezes ela paga pra você"</p>
            </div>
            <div class = "main--login">
                <div class = "main--card">
                    <form method="post">
                        <div>
                            <input type="email" name = "email" placeholder="Email"required>
                        </div>
                        <div>
                            <input type="password" name = "password" placeholder="Senha"required>
                        </div>
                        <button type="submit">Entrar</button>
                        <div class ="main--link">
                            <a href="">Esqueceu a senha?</a>
                        </div>
                        <hr>

                        <div class="main--btn">
                            <a href="#">Criar uma nova conta</a>
                        </div>
                    </form>
                </div>
                <div class = "main--footer">
                    <a href="#">Link</a> a ser implementado para levar a outra página
                </div>
            </div>
        </div>
    </main>
    <footer>
        ...
    </footer>
</body>
</html>