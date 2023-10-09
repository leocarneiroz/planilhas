<?php
    include('config.php');

    if(isset($_POST['email']) || isset($_POST['password'])) {

        
        if(strlen($_POST['email']) == 0) {
            echo "Preencha seu email";
        }
        else if(strlen($_POST['password']) == 0) {
            echo "Preencha sua senha";
        }
        else{

       $email = $myslqli->real_escape_string($_POST['email']);
       $password = $myslqli->real_escape_string($_POST['password']);
       
       $sql_code = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";
       $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL:". $mysqli->error);

       $quantidade = $sql_query->num_rows;

       if($quantidade == 1){
            $usuario = $sql_query->fetch_assoc();
                if(!isset($_SESSION)){
                    session_start();
                }
                $_SESSION['email']=$usuario['email'];
                $_SESSION['first_name']=$usuario['first_name'];

                header('Location:homepage.html');
       }
       else{
        echo "Falha ao logar! Email ou senha incorretos";
       }
        
    }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="login.css">
    <link rel="shortcut icon" type="imagex/png" href="imagens df/df assessoria icon-PhotoRoom.png-PhotoRoom.png">

<body>
    <header>
        <h1>PLANILHAS DF ASSESSORIA</h1>
    </header>
    <div class="login">
        <h1>Login</h1>
        <form action="" method="POST">
            <input type="email" name="email" id="input_email" placeholder="Digite seu email"><br/>
            <input type="password" name="senha" placeholder="Digite sua senha"><br/>
            <button type="submit">Entrar</button>
        </form>
    </div>


</body>

</html>