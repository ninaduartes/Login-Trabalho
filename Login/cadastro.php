<?php
//Página de adastro de novo usuário

if(isset($_POST['submit'])){

    include_once('config.php');

    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $birthday = $_POST['birthday'];
    $cargo = $_POST['cargo'];
    $matricula = $_POST['matricula'];

 $result = mysqli_query($conexao, 
    "INSERT INTO users(username, password, name, email, birthday, cargo, matricula) 
    VALUES('$username', '$password', '$name', '$email', '$birthday', '$cargo', '$matricula')");
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <div class="main-login">
        <div class="left-login">
            <h1> Faça login <br> para acessar o sistema</h1>
            <img src="animate.svg" class="left-login-img" alt="Imagem">
        </div>

        <div class="right-login">
            <div class="card-login">
                <h1>Cadastre-se</h1>
                <form action="cadastro.php" method="POST">
                <div class="textfield-cadastro">
                    <label for="username">Crie um nome de usuário:</label>
                    <input type ="text" name="username" placeholder="Nome de Usuário" required autofocus> 
                    <br>
                    <label for="password">Crie uma senha:</label>
                    <input type ="password" name="password" placeholder="Senha" required autofocus> 
                    <br>
                    <label for="name">Nome Completo:</label>
                    <input type ="text" name="name" placeholder="Nome Completo" required autofocus> 
                    <br>
                    <label for="email">Digite o seu e-mail:</label>
                    <input type ="email" name="email" placeholder="E-mail" required autofocus> 
                    <br>
                    <label for="birthday">Data de nascimento:</label>
                    <input type ="date" name="birthday" required autofocus> 
                    <br>
                    <label for="cargo">Cargo na empresa:</label>
                    <input type ="text" name="cargo" placeholder="Cargo" required autofocus> 
                    <br>
                    <label for="matricula">Matrícula de funcionário:</label>
                    <input type ="text" name="matricula" placeholder="Matrícula" required autofocus> 
                    <br>
                    <p>Já possui um login?<a href="login.php">Entre aqui.</a></p>
                </div>
                <input class="btn-cadastro" type="submit" name="submit" id="submit">
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>