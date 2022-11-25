<?php
include('verifica_login.php');
include('conexao.php');
    if(isset($_POST['submit']))
    {
        $tag = $_POST['tag'];
        $usuario = $_POST['usuario'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $result = mysqli_query($conexao, "INSERT INTO acessoadm(tag,usuario,email,senha)
        VALUES ('{$tag}','{$usuario}','{$email}','{$senha}')");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
         <meta charset="UTF-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" href="style-dark.css">
         <link rel="icon" href="img/lista.png">
        <title>Cadastro Refeitório • ADM</title>
    </head>
    <body>
        <header>
            <nav>
                <a class="bemvindo">Olá, <?php echo $_SESSION['usuario'];?>👋</a>
                <ul class="nav-list">
                    <li><a href="cadastro.php">Cadastrar Aluno</a></li>
                    <li><a href="cadastroadm.php">Cadastrar Administrador</a></li>
                    <li><a href="lista.php">Lista Alunos</a></li>
                </ul>
                <h2><a class = "btn-sair" href="logout.php">Sair</a><h2>
            </nav>
        </header>

         <div class="main-cadastro">
            <div class="left-cadastro">
                
                <img src="img/mobile-login.svg" class="left-img-cadastro" alt="cadastro imagem">

            </div>
            <form action="cadastroadm.php" method="POST">
                <div class="right-cadastro">
                    <div class="card-cadastro">
                        <h1>Cadastro de Administrador</h1>
                        
                            <div class="textfield">
                                <label for="tag">Tag</label>
                                <input type="text" name="tag" class="turma" placeholder="xxxxxxxx" maxlength="8"/>

                                <label for="usuario">Usuário</label>
                                <input type="text" name="usuario" placeholder="Digite seu usuário">
                            
                                <label for="email">E-mail</label>
                                <input type="email" name="email" placeholder="exemplo@dominio.com">
                            
                                <label for="senha">Senha</label>
                                <input type="text" name="senha" placeholder="Crie uma senha" >
                            </div>
                            <input type="submit" name="submit" id="submit"class="btn-confirmar"></input>
                        
                    </div>
                </div>
            </form>
         </div>
    </body>
</html>