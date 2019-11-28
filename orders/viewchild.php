<?php 
    $parentId = $_POST['id'];
    require_once '../Firestore.php';
    use Google\Cloud\Firestore\FirestoreClient;

    $fs = new Firestore('parents');
    $db = new FirestoreClient([
        'projectId' => 'abac-fdef3'
    ]);
    $documents = $db->collection("parents")->document("F4T7wzT7JKh2NSHUX09hRE36oeg2")->collection("childrens")->document("tQopr15RRE8se3ToWJLT");
    print_r($documents->snapshot()->data());
    // foreach ($documents as $document) {
    //     $doc = $document->data();
    //     $id = $document->id();
    //     print_r($doc);

    // }
    // foreach ($documents as $document) {
    //     $doc = $document->data();
    //     $id = $document->id();
    //     print_r($doc);
    // }
    
  //  echo 1;
?>