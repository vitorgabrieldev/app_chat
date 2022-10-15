<?php

    if(!isset($_SESSION)) {
        session_start();
    };

    include('../private/configDb.php');

    $query = mysqli_query($mysqli, "SELECT * FROM msg;");
    $qtd_rows = $query->num_rows;
    if($qtd_rows >= 150) {
        $query = mysqli_query($mysqli, "DELETE FROM msg;");
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