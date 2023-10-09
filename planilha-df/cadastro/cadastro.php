<?php
    if(isset($_POST['submit']))
    {
        // print_r($_POST['first_name']);
        // print_r('<br>');
        // print_r($_POST["secound_name"]);
        // print_r('<br>');
        // print_r($_POST["email"]);
        // print_r('<br>');
        // print_r($_POST["password"]);
        // print_r('<br>');
        // print_r($_POST["birth_date"]);
        // print_r('<br>');
        // print_r($_POST["gender"]);
        // print_r('<br>');
        // print_r($_POST["status"]);

        include_once('config.php');
        
        $first_name = $_POST['first_name'];
        $second_name=  $_POST['secound_name'] ;
        $email=$_POST['email'];
        $password=$_POST['password'];
        $birth_date=$_POST['birth_date'];
        $phone_number=$_POST["phone_number"];
        $gender=$_POST['gender'];
        $status=$_POST['status'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(first_name,secound_name,email,password,birth_date,phone_number,gender,status) 
        VALUES ('$first_name','$second_name','$email','$password','$birth_date','$phone_number','$gender','$status')");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <header>
        <h1>CADASTRO</h1>
    </header>
    <div class="cadastro">
        <form action='cadastro.php' method="POST">
            <input type="text" name="first_name" id="first_name" placeholder="Primeiro Nome">
            <input type="text" name="secound_name" id="secound_name" placeholder="Ultimo Nome">
            <input type="email" name="email" id= "email" placeholder="Email">
            <input type="password" name="password" id="password" placeholder="Senha">
            <input type="date" name="birth_date" id="birth_date" placeholder="Data de Nascimento">
            <input type="tel" name="phone_number" id="phone_number" placeholder="Celular">
            <select name="gender" id="gender">
                <option value="masc">Masculino</option>
                <option value="fem">Feminino</option>
            </select>
            <select name="status" id="status">
                <option value="prof">Professor</option>
                <option value="aluno">Aluno</option>
            </select>
            <input type="submit" name="submit" id="submit">
        </form>


    </div>
    
</body>
</html>