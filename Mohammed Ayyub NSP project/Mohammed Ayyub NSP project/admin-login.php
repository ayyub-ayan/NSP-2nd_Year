<?php
include "config.php";

if (isset($_REQUEST["submit"])) {
    
    $id = $_REQUEST["user"];
    $name = $_REQUEST["pass"];
    // $date = $_REQUEST["date"];
    // $amount = $_REQUEST["amount"];

    

    $ins = "INSERT INTO sign (user,pass) VALUES ('$user','$pass')";
        $query1 = mysqli_query($connection, $ins);
}
?>
 