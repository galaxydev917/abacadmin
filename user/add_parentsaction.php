<?php 
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phonenumber = $_POST["phonenumber"];

    require '../FirebaseCls.php';
    $firebase = new FirebaseCls("parents");
    $result = $firebase->addParents($name, $email, $phonenumber);    

    header("location:parents.php");
?>