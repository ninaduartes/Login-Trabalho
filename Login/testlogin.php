<?php
//Teste de login válido.

//Acessa
if(isset($_POST['submit']) && !empty($_POST['username']) && !empty($_POST['password'])){
    
    include_once('config.php');

    $username = $_POST['username'];
    $password = $_POST['password']; 

    $sql = "SELECT * FROM users WHERE username = '$username' and password = '$password'";

    $result = $conexao->query($sql);

    if(mysqli_num_rows($result) < 1){
        //Entrada inválida
        header('Location: login.php');
    }

    else{
        //Entrada válida e ligação com as páginas
        header('Location: ../sistema/sistema.php');
    }
}

//Não acessa
else{
    header('Location: login.php');
}
?>