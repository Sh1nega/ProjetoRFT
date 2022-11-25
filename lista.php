<?php
    include('verifica_login.php');
    include_once('conexao.php');
    $sql = "SELECT * FROM alunoscadastro ORDER BY situação DESC";

    $result = $conexao->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-dark.css">
    <link rel="icon" href="img/lista.png">
    <title>Lista • ALUNO</title>
</head>
<body class="main">
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

    <div class="">
        <table class="tabela">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Tag</th>
                <th scope="col">Nome</th>
                <th scope="col">Curso</th>
                <th scope="col">Turma</th>
                <th scope="col">Matrícula</th>
                <th scope="col">Turno</th>
                <th scope="col">situação</th>
                </tr>
            </thead>
            <tbody class="tabela">
                <?php
                    while($user_data = mysqli_fetch_assoc($result)){
                        echo "<tr>";
                        echo "<td>".$user_data['id']."</td>";
                        echo "<td>".$user_data['tag']."</td>";
                        echo "<td>".$user_data['nome']."</td>";
                        echo "<td>".$user_data['curso']."</td>";
                        echo "<td>".$user_data['turma']."</td>";
                        echo "<td>".$user_data['matricula']."</td>";
                        echo "<td>".$user_data['turno']."</td>";
                        echo "<td>".$user_data['situação']."</td>";
                        echo "<td>Ações</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>   
</body>
</html>