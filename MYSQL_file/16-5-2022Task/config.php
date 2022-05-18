<?php
$user="root" ;
$pass= '' ;
try 
{
    $con = new PDO ('mysql:host=localhost;dbname=courses' , $user, $pass );
    echo "success connect" ;
}
catch (PDOException $e){
    echo "Faild"  . $e->getMessage() . "<br/>";
}
?>