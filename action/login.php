<?php

    $username = $_POST['username'];
    $password = $_POST['password'];
    if($username == "admin" && $password == "admin")
        header("location: ../category/category.php");
?>