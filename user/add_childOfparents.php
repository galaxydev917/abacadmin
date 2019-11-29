<?php 
    $id = $_POST['id'];
    require '../FirebaseCls.php';
    $firebase = new FirebaseCls("parents");
    $result = $firebase->addChild($removeId);   
    // $firebase = new FirebaseCls("categories");
    // $firebase->delete($removeId);
    echo 1;
?>