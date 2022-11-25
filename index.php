<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style-dark.css">
        <link rel="icon" href="img/user-group-296.svg">
        <title>Login</title>
    </head>
    <body>
        <div class="main-login">
            <div class="left-login">
            </div>
            <form action="login.php" method="POST">
                <div class="right-login">
                    <div class="card-login">
                        <h1>Acesso Administrativo</h1>
                        <?php
                            if(isset($_SESSION['nao_autenticado'])):
                        ?>
                            <div class="aviso">
                                <p>ERRO: Usuário ou senha inválidos.</p>
                            </div>
                        <?php
                            endif;
                            unset($_SESSION['nao_autenticado']);
                        ?>
                        <div class="textfield">
                            <label  for="usuario">Usuário</label>
                            <input type="text" name="usuario" class="usuario" placeholder="Digite o usuário">

                            <label for="senha">Senha</label>
                            <input type="password" name="senha" placeholder="Digite a senha">
                        </div>
                        <input type="submit" value="logar" class="btn-confirmar"></input>
                    </div>     
                </div>
            </form>
        </div>
    </body>
</html>