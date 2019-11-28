<?php
    use Google\Cloud\Firestore\FirestoreClient;
    $db = new FirestoreClient([
        'projectId' => 'abac-fdef3'
    ]);

    $db->collection("activities")->document($_POST['id']).set({
        "scheduleTime" : $_POST['id']
    });
//print_r($_POST['id']);

?>