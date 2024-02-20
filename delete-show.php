<?php
// read the showId from the url parameter using $_GET   
$foods = $_GET['foodId'];

if (($foods)) {
    // connect to db
    include('shared/db.php');

    // prepare SQL DELETE
    $sql = "DELETE FROM foods WHERE foodId = :foodId";
    $cmd = $db->prepare($sql);
    $cmd->bindParam(':foodId', $foods, PDO::PARAM_INT);

    // execute the delete
    $cmd->execute();

    // disconnect
    $db = null;

    
    echo 'Food Deleted';

    header('location:select-cuisine.php');

}
?>