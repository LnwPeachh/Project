<?php 

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "register_db";

    $conn = mysqli_connect($servername,$username,$password,$dbname);

    if(!$conn){
        die("Connect failed". mysqli_connect_error());
    }

?>