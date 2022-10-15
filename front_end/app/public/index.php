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

        };
        
    ?>

    <fieldset>
        <legend>Digite a mensagem abaixo</legend>
        <form action="../../../back_end/public/new_msg.php" method="post">
            <input type="text" placeholder="Mensagem" name="msg" id="msg">
            <button type="submit">Enviar</button>
        </form>
        <fieldset>
            <legend>Setings Chat</legend>
            <form action="../../../back_end/public/settings_chat.php" method="post">
                <button name="clean" type="submit">Limpar chat</button>
                <button name="logout" type="submit">Deslogar</button>
            </form>
        </fieldset>
    </fieldset>
</body>
</html>