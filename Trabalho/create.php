<?php

require_once 'conexao.php';

    if(isset($_POST['btn btn-second']));
    $nome = mysqli_escape_string($conn, $_POST['nome']);
    $email = mysqli_escape_string($conn, $_POST['email']);
    $num = mysqli_escape_string($conn, $_POST['num']);

    $sql = "INSERT INTO user (nome, email, num) VALUES ('$nome', '$email', '$num')";

    if(mysqli_query($conn, $sql)){
        $_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso!</p>";
    header("Location: index.php");
    }else{
        $_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado com sucesso!</p>";
        header("Location: index.php");
    }

?>