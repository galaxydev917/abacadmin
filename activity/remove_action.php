<?php 
    $removeId = $_POST['id'];
    require '../FirebaseCls.php';
    $firebase = new FirebaseCls("activities");
    $result = $firebase->removeActivities($removeId);   
    // $firebase = new FirebaseCls("categories");
    // $firebase->delete($removeId);
    echo 1;
?>