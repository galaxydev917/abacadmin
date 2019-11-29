<?php 
    $categoryId = $_POST["category"];
    $name = $_POST["name"];
    $school = $_POST["school"];
    $price = $_POST["price"];
    $duration = $_POST["duration"];   
    $description = $_POST["description"];
    $startdate = $_POST["startdate"];   
    $enddate = $_POST["enddate"];   
    $meal = isset($_POST['meal']) != '' ? $_POST['meal'] : '';
    if(empty($meal))
         $meal = "false";
    else
        $meal = "true";     

    $target_dir = "../assets/images/activity/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    $filename = basename($_FILES["fileToUpload"]["name"]);
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
    $data = ['name'=> $name, 'categoryId'=> $categoryId, 'school'=> $school, 'price'=> $price, 'duration'=> $duration, 'description'=> $description, 'start_date'=> $startdate, 'end_date'=> $enddate, 'isMeal'=> $meal, 'image'=> $filename,];

    require '../FirebaseCls.php';
    $firebase = new FirebaseCls("activities");
    $result = $firebase->addActivity($data);    
    header("location:list.php");
?>