

<?php

try {
    $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
    
    $imageId = $_GET["id"];

    // var_dump($imageId);

if(!empty($imageId)){
    $deleteRecord = $pdo->query("DELETE FROM gs_bm_table2 WHERE id = " .$imageId);
    if($deleteRecord){
        header("Location:" . "./cart.php", true, 303);
        exit();
    }
}
}

catch (PDOException $e) {
    exit('DBConnectError:'.$e->getMesßage());
}




?>