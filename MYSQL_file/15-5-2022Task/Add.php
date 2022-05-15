<?php 
$name = $_GET['name'];
$ID = $_GET['ID'];
$Describtion = $_GET['Describtion'];
$Tech = $_GET['tech'];
$NUM_ST = $_GET['NUM_ST'];
$con = mysqli_connect("localhost" , "root","", "courses");
if ($con)
{echo "connected with database<br>";}
else {echo "connected with database <br>";
echo mysqli_connect_error();
}

if(isset($_GET['button1'])) { 
    $sql = "INSERT INTO course SET 
ID = ' $ID ' ,
Name = '$name ', 
Discribtion = '$Describtion',
Teacher = '$Tech',
Number_students = '$NUM_ST';";
    $result =  mysqli_query($con , $sql);
if ($result)
{echo "done<br>";}
else {echo "faild<br>";
echo mysqli_error($con);
}
}

echo  ' <table style="border: solid 2px ; width:50%">
<thead>
  <tr>
    <th>ID </th>
    <th>Name</th>
    <th >Describtion</th>
    <th >Teacher</th>
    <th >Number_students</th>
  </tr>
</thead>
<tbody> ';
if(isset($_GET['button2'])) { 
      echo " <tr> <td>". $ID
      ."</td> <td> ".$name ."</td> <td>". $Describtion.
  "</td> <td> ". $Tech ."</td> 
  </td> <td> ". $NUM_ST ."</td> </tr> ";
  echo '</tbody>
  </table> ';
  }
 $n= 'HTML' ;
  if(isset($_GET['button3'])) {
    $sql ="UPDATE `course` SET `Name` = '$n' WHERE `course`.`ID` = '$ID' ";
    $result =  mysqli_query($con , $sql);
    if ($result)
    {echo "done<br>";}
    else {echo "faild<br>";
    echo mysqli_error($con);
    }
}
if(isset($_GET['button4'])) {
$sql = "DELETE FROM course WHERE  ID = '$ID' ;";
$result =  mysqli_query($con , $sql);
if ($result)
{echo "done<br>";}
else {echo "faild<br>";
echo mysqli_error($con);
}
}


?>
