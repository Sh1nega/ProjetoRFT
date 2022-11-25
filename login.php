<?php
session_start();
include('conexao.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
    header('Location: index.php');
    exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select usuario from acessoadm where usuario = '{$usuario}' and senha = '{$senha}'";

//echo $query;exit(); //imprimir query
$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);
//echo $row;exit(); //Imprime quantidade de linhas

if($row == 1){
    $_SESSION['usuario'] = $usuario;
    header('Location: cadastro.php');
    exit();
}
else{
    $_SESSION['nao_autenticado'] = true;
    header('Location: index.php');
    exit();
}