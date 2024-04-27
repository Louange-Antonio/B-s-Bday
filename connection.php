<?php
    $dbsevername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "db_birthday";

    $conn = mysqli_connect($dbsevername, $dbusername, $dbpassword, $dbname);

    if ($conn === false ){
        die("ERROR, couldn't connect to database" . mysqli_connect_error());
    }
?>