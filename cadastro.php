<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cadastrar usuario</h1>
    <?php
    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>
    <form action="processa.php" method="post">
        <label for="nome">Nome</label>
        <input type="text" name="nome" placeholder="digite seu nonme"><br><br> 
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="digite seu email"><br><br> 
        
        <input type="submit" value="cadastrar"> 
        <a href="listar.php"><input type='button' value="listar"</a>
    </form>
</body>
</html>