<?php

    
    if(isset($_POST['clean'])) {
        include('../private/configDb.php');

        $query_delte = mysqli_query($mysqli, "DELETE FROM msg;");

        // Redirect
        header('LOCATION: ../../front_end/app/public/index.php');
    };

    if(isset($_POST['logout'])) {
        if(!isset($_SESSION)) {
            session_start();
        };

        session_destroy();

        header('LOCATION: ../../front_end/app/public/components/create_and_enter_account/create.html'); 
    };

?>