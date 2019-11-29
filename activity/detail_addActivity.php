<?php 
    $worker = $_POST["worker"];

    $startdate = $_POST["startdate"];
    $starttime = $_POST["starttime"];
    $duration = $_POST["duration"];
    $report = $_POST["report"];
    $duration = $_POST["duration"];   
    $selected_id = $_POST["selected_id"];   
    $target_dir = "../assets/images/activity/detail/";
    $photoarray = [];
    foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name) {
        $file_name=$_FILES["files"]["name"][$key];
        $file_tmp=$_FILES["files"]["tmp_name"][$key];
        $target_file = $target_dir.$file_name;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        if (move_uploaded_file($file_tmp, $target_file)) {
            echo "The file ". basename( $file_name). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }

        $photoarray['filename'.$key] = $file_name; 
    }
    // $uploadOk = 1;

    // $filename = basename($_FILES["fileToUpload"]["name"]);

     $data['detail'] = ['workerid'=> $worker, 'startdate'=> $startdate, 'starttime'=> $starttime, 'duration'=> $duration, 'report'=> $report, 'duration'=> $duration, 'image'=>$photoarray];
    require '../FirebaseCls.php';
    $firebase = new FirebaseCls("activities");
    $result = $firebase->addActivityDetail($data, $selected_id);    
    header("location:detail_activity.php");
?>