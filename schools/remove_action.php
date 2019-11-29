<?php 
    $removeId = $_POST['id'];
    require '../FirebaseCls.php';
    $firebase = new FirebaseCls("schools");
    $result = $firebase->removeSchools($removeId);   
    // $firebase = new FirebaseCls("categories");
    // $firebase->delete($removeId);
    echo 1;
?>