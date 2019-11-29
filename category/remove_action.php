<?php 
    $removeId = $_POST['id'];
    require '../FirebaseCls.php';
    $firebase = new FirebaseCls("categories");
    $result = $firebase->removeCategory($removeId);   
    // $firebase = new FirebaseCls("categories");
    // $firebase->delete($removeId);
    echo 1;
?>