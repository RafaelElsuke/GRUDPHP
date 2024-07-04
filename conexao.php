<?php
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome',FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);

//echo "Nome:$nome <br>";
//echo "Email:$email";
?>

<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "arthut";

//cria conexäo
$conn = mysqli_connect("$servidor","$usuario","$senha","$dbname");
