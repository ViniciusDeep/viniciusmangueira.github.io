<?php
    $email      = $_POST['email'];
    $servidor   = 'localhost';
    $banco      = 'ipcria';
    $usuario    = 'root';
    $senha      = '';

    $con        = mysql_connect($servidor, $usuario, $senha);
    mysql_select_db("ipcria", $con);
    mysql_query("INSERT INTO news (id, email) VALUES ('','$email')");
    mysql_close($con);
?>