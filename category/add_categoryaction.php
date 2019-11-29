<?php 
    $name = $_POST["name"];
    $meal = isset($_POST['meal']) != '' ? $_POST['meal'] : '';
    if(empty($meal))
         $meal = "false";
    else
        $meal = "true";     

    $target_dir = "../assets/images/category/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    $filename = basename($_FILES["fileToUpload"]["name"]);
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

    require '../FirebaseCls.php';
    $firebase = new FirebaseCls("categories");
    $result = $firebase->addCategory($name, $meal, $filename);    

    header("location:category.php");
?>