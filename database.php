<?php

    $db_server = "localhost:3307"; // as i changed my port number, you need to add it there.
    $db_user = "root";
    $db_pass = "";
    $db_name = "phptutorial";
    $conn = "";

    try {
        $conn = mysqli_connect($db_server , $db_user , $db_pass , $db_name);
    } catch (mysqli_sql_exception) {
        echo "Can't Connect to The Database <br>";
    }
?>