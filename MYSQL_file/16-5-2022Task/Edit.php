<?php
require 'config.php';
try {
$ID = $_GET['ID'];

// $sql = 'SELECT * FROM catogry order by Catogry_id';
// $stat = $con->query($sql);
// $category = $stat->fetchAll();
// foreach ($category as $value) {
echo' <h1  style=" color :#f4b7b4 ;font:bold;"> Edit Product form </h1>
    <form action="Add.php" method="get" style=" color: #f4b7b4;">
        <fieldset>
            <br><br><br>
            <legend> Courses </legend>
            <label for="ID" style=" color: #f4b7b4;">ID :</label>
            <input type="number" id="ID" placeholder="Enter ID" name="ID" Required value ='..'" >
            <br><br>
            <label for="name"> Name :</label>
            <input type="text" id="name" placeholder="Enter Course Name" name="name" Required>
            <br><br>';
 $sql = 'SELECT * FROM catogry order by Catogry_id';
$stat = $con->query($sql);
$category = $stat->fetchAll(); 
 echo '<label for="category"><b> Category: </b></label>
<select name="category" Required >
 <option>Select Category</option>';
     foreach ($category as $value) {
        echo   '<option>'. $value['Catogry_name']; '</option>';
    }
    echo  '</select>   <br><br>   
            <input type="submit" name="button1" value="Edit Courses" style="background-color: #f4b7b4;  color: white; border: none; height: 30px">
            <br><br><br>
        </fieldset>
    </form>';
}
catch (PDOException $e){
    echo "Faild"  . $e->getMessage() . "<br/>";
}

// $sql = 'SELECT * FROM course WHERE  ID = '$ID'';
// $sql ="UPDATE `course` SET `Name` = '$n' WHERE `course`.`ID` = '$ID' ";
// $con->exec($sql)  ;
// echo "Delete";
// header('location:Show.php');
// }
// catch (PDOException $e){
//     echo "cannot delete ". $e->getMessage();
// }
?>