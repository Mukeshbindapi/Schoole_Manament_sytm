<?php

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    if($email == 'mukeshbindra@gmail.com' && $password == 'mukesh1234'){
        session_start();
        $_SESSION['login'] = true;
        header('Location:../index.php');
    }else{
        echo 'Invalid Password Please try again';
    }
}