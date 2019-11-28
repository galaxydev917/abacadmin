<?php 
    $removeId = $_POST['id'];
    require_once '../Firestore.php';
    $fs = new Firestore('activities');
    $fs->dropDocument($removeId);
    echo 1;
?>