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
    $filePath = "https://abacadmin.herokuapp.com/assets/images/activity/" .$filename;

    $data = ['name'=> $name, 'categoryId'=> $categoryId, 'schoolId'=> $school, 'price'=> $price, 'duration_hrs'=> $duration, 'description'=> $description, 'start_date'=> $startdate, 'end_date'=> $enddate, 'isMeal'=> $meal, 'image'=> $filePath,];
    require '../FirebaseCls.php';
    $firebase = new FirebaseCls("activities");
    $result = $firebase->addActivity($data);    
   header("location:list.php");
//    require '../vendor/autoload.php';

//    use Google\Cloud\Storage\StorageClient;

   
//    $storage = new StorageClient(['projectId' => 'abac-fdef3', 'keyFilePath' => '../abac-fdef3-firebase-adminsdk-i5ufd-52d8bd98af.json',]);
//    $bucket = $storage->bucket('images');
//    $bucket->upload(
//     file_get_contents($_FILES['fileToUpload']['tmp_name']),
//     [
//         'name' => $_FILES['fileToUpload']['name']
//     ]
//);
?>