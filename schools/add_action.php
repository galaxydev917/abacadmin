<?php 
    $name = $_POST["name"];
    $address = $_POST["address"];
    $director = $_POST["director"];
  


    require '../FirebaseCls.php';
    $firebase = new FirebaseCls("schools");
    $result = $firebase->addSchool($name, $address, $director);    

    header("location:schools.php");
?>