<?php
session_start();
include_once('conexao.php');

$nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);

//echo "Nome: $nome <br>";
//echo "E-MAIL: $email";

$create_user = "INSERT INTO usuarios (nome, email,created) VALUES('$nome','$email',NOW())";
$created_user = mysqli_query($conn,$create_user);

if(mysqli_insert_id($conn)){
    $_SESSION['msg'] = "<p style = 'color:green;'>usuario cadastrado com suscesso</p>";
    header("Location: cadastro.php");
    }else{
        $_SESSION['msg'] = "<p style = 'color:red;'>usuario Näo foi cadastrado com suscesso</p>";
        header("Location: cadastro.php");
}