<?php

    $username = $_POST['usuario'];
    $senha = $_POST['senha'];

    if(strlen($username) > 0 && strlen($senha) > 0) {

        include('../private/configDb.php');
        
        $username = $_POST['usuario'];
        $senha = $_POST['senha'];

        $query_select = mysqli_query($mysqli, "SELECT * FROM users WHERE nome = '$username' AND senha = '$senha'");
        $qtd_rows = $query_select->num_rows;
        if($qtd_rows >= 1) {
            
            $regData = $query_select->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            };

            $_SESSION['username'] = $regData['nome']; 
            $_SESSION['apelido'] = $regData['apelido'];

            // Redirect
            header('LOCATION: /app_chat/front_end/app/public/index.php');  

        } else {
            header('LOCATION: /app_chat/front_end/app/public/components/create_and_enter_account/login.html');  
        };

    };

?>