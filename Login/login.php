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
            <form action="testlogin.php" method="POST">
                <h1>Login</h1>
                <div class="textfield">
                    <br>
                    <input type ="text" name="username" placeholder="Nome de Usuário" autofocus> 
                    <br>
                    <input type ="password" name="password" placeholder="Senha" autofocus> 
                    <br>
                    <p>Ainda não tem um login?<a href="cadastro.php">Cadastre-se aqui.</a></p>
                </div>
                <input class="btn-login" type="submit" name="submit" id="submit">
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>