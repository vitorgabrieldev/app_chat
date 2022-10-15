<?php

    // Connection Import Database -->
    include('../private/configDb.php');

    $usernamePost = $_POST['usuario'];
    $passwordPost = $_POST['senha'];
    $surnamePost = $_POST['apelido'];
    
    // Validation account info
    if(strlen($usernamePost) >= 3 && strlen($passwordPost) >= 3 && strlen($surnamePost) >= 3) {
        
        $query_select = mysqli_query($mysqli, "SELECT * FROM users WHERE nome = '$usernamePost'");
        $qtd_users = $query_select->num_rows;
        if($qtd_users == 1) {
            header('LOCATION: ../../');  
        } else {
            registerAccount();
        };


    } else {
        header('LOCATION: ../../front_end/app/public/components/create_and_enter_account/create.html'); 
    };

    function registerAccount() {

        include('../private/configDb.php');

        $usernamePost = $_POST['usuario'];
        $passwordPost = $_POST['senha'];
        $surnamePost = $_POST['apelido'];

        $query_insert = mysqli_query($mysqli,"INSERT INTO users(nome, senha, apelido) VALUES('$usernamePost', '$passwordPost', '$surnamePost');");

        if(!isset($_SESSION)) {
            session_start();
        };

        $_SESSION['username'] = $_POST['usuario'];
        $_SESSION['apelido'] = $_POST['apelido'];

        header('LOCATION: ../../front_end/app/public/index.php');

    };
?>