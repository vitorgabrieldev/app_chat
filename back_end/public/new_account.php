<?php

    // Connection Import Database -->
    include('../private/configDb.php');

    $usernamePost = $_POST['username'];
    $passwordPost = $_POST['password'];
    $surnamePost = $_POST['surname'];
    
    // Validation account info
    if(strlen($usernamePost) >= 3 && strlen($passwordPost) >= 3 && $surnamePost >= 3) {
        
        $query_select = mysqli_query($mysqli, "SELECT * FROM users WHERE nome = $usernamePost");
        $qtd_users = $query_select->num_rows;
        if($qtd_users > 1) {
            header('LOCATION: ../../');  
        } else {
            registerAccount();
        };


    } else {
        header('LOCATION: ../../');  
    };

    function registerAccount() {
        
    };

?>