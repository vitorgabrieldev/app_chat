<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Online !</title>

    <style>
        
    </style>

</head>
<body>
    <?php
        // Connection DATABASE 
        include('../../../back_end/private/configDb.php');

        $sql = mysqli_query($mysqli,"SELECT * FROM msg;");

        while($reg = mysqli_fetch_array($sql)) {

            $msg = $reg['msg'];

            echo "<li class=\"msg_item\">" . $msg . "</li>";

            // if(!isset($_SESSION)) {
            //     session_start();
            // };

            // session_destroy();

        };
        
    ?>

    <fieldset>
        <legend>Digite a mensagem abaixo</legend>
        <form action="../../../back_end/public/new_msg.php" method="post">
            <input type="text" placeholder="Mensagem" name="msg" id="msg">
            <button type="submit">Enviar</button>
        </form>
    </fieldset>
</body>
</html>