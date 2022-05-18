<?php
require 'config.php';
try {
$name = $_GET['name'];
$ID = $_GET['ID'];
$category = $_GET['category'];
$sql = 'INSERT INTO course  (ID , Name , Catogry) VALUES(  :ID, :name , :category)';
$stat = $con->prepare($sql);
$stat->execute([':ID'=>$ID ,':name'=>$name  ,':category'=>$category]) ;
echo "Add  ";
header('location:Show.php');
}
catch (PDOException $e){
    echo "cannot insert ". $e->getMessage();
}


// if ($con)
// {echo "connected with database<br>";}
// else {echo "connected with database <br>";
// echo mysqli_connect_error();
// }

// if(isset($_GET['button1'])) { 
//     $sql = "INSERT INTO course SET 
// ID = ' $ID ' ,
// Name = '$name ', 
// Discribtion = '$Describtion',
// Teacher = '$Tech',
// Number_students = '$NUM_ST';";
//     $result =  mysqli_query($con , $sql);
// if ($result)
// {echo "done<br>";}
// else {echo "faild<br>";
// echo mysqli_error($con);
// }
// }

// }
// $n= 'HTML' ;
// if(isset($_GET['button3'])) {
//     $sql ="UPDATE `course` SET `Name` = '$n' WHERE `course`.`ID` = '$ID' ";
//     $result =  mysqli_query($con , $sql);
//     if ($result)
//     {echo "done<br>";}
//     else {echo "faild<br>";
//     echo mysqli_error($con);
//     }
// }



?>
