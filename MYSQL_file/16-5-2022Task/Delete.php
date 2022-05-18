<?php
require 'config.php';
try {
$ID = $_GET['ID'];
$sql = "DELETE FROM course WHERE  ID = '$ID' ;";
$con->exec($sql)  ;
echo "Delete";
header('location:Show.php');
}
catch (PDOException $e){
    echo "cannot delete ". $e->getMessage();
}


?>