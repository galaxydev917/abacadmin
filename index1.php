<?php
    require_once 'Firestore.php';
//phpinfo();
    $fs = new Firestore('parents');
    
    //print_r( $fs->getDocument('Fg3TgXJ6Z1ShkE914JXUpg22GEe2'));
    //print_r( $fs->getWhere('fullName', '=', 'Beni'));
    print_r( $fs->addDocument('galaxy917', ['fullName' => 'galaxy917']));
?>