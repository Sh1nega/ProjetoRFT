<?php
include('verifica_login.php');
include('conexao.php');
    if(isset($_POST['submit']))
    {
        $tag = $_POST['tag'];
        $nome = $_POST['nome'];
        $curso = $_POST['curso'];
        $turma = $_POST['turma'];
        $matricula = $_POST['matricula'];
        $turno = $_POST['turno'];

        $result = mysqli_query($conexao, "INSERT INTO alunoscadastro(tag,nome,curso,turma,matricula,turno)
        VALUES ('{$tag}','{$nome}','{$curso}','{$turma}','{$matricula}','{$turno}')");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
         <meta charset="UTF-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" href="style-dark.css">
         <link rel="icon" href="img/285655_user_icon.svg">
        <title>Cadastro Refeitório • ALUNO</title>
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
            <form action="cadastro.php" method="POST">
                <div class="right-cadastro">
                    <div class="card-cadastro">
                        <h1>Cadastro de Aluno</h1>
                        
                            <div class="textfield">
                                <label for="tag">Tag</label>
                                <input type="text" name="tag" placeholder="xxxxxxxx" maxlength="8"/>

                                <label for="nome">Nome</label>
                                <input type="text" name="nome" placeholder="Digite o nome">

                                <label>Curso</label>
                                <select name="curso" class="selecionar">
                                    <option value="N.A"> Selecione </option>
                                    <option value="Agropecuária"> Agropecuária </option>
                                    <option value="Edificações"> Edificações </option>
                                    <option value="Informática"> Informática </option>
                                    <option value="Nutrição"> Nutrição </option>
                                    <option value="Segurança do Trabalho"> Segurança do Trabalho </option>
                                </select>
                            
                                <label for="turma">Turma</label>
                                <input type="text" name="turma" placeholder="Digite a turma">
                            
                                <label for="matricula">Matrícula</label>
                                <input type="text" name="matricula" oninput="this.value = this.value.replace(/[^0-9.]/g, '')" placeholder="xxxxxxxx" maxlength="8"/>
                                
                                <label>Turno</label>
                                <select name="turno" class="selecionar">
                                    <option value="N.A"> Selecione </option>
                                    <option value="matutino"> Matutino </option>
                                    <option value="vespertino"> Vespertino </option>
                                    <option value="noturno"> Noturno </option>
                                </select>
                            </div>
                            
                            <input type="submit" name="submit" id="submit"class="btn-confirmar"></input>

                    </div>
                </div>
            </form>
         </div>
    </body>
</html>