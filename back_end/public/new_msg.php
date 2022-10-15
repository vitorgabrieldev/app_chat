<?php

    if(!isset($_SESSION)) {
        session_start();
    };

    $msg = $_POST['msg'];

    if(strlen($msg) > 0) {

        include('../private/configDb.php');

        $msg = $_SESSION['username'] . " --> " .  $_POST['msg'];
        
        

        $query = mysqli_query($mysqli, "INSERT INTO msg (msg) VALUES ('$msg');");

       header('LOCATION: ../../front_end/app/public/index.php');

    } else {
        header('LOCATION: ../../front_end/app/public/index.php');
    };

?>