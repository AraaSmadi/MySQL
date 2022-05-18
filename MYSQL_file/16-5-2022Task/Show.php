
<?php
require 'config.php';
try {
$sql = 'SELECT * FROM course order by ID';
$stat = $con->query($sql);
$course = $stat->fetchAll(); 


echo  ' <table style="border: solid 2px ; width:50%">
<thead>
  <tr>
    <th>ID </th>
    <th>Name</th>
    <th >Catogery</th>
    <th> </th>
  </tr>
</thead>
<tbody> ';

    foreach ($course as $value){
    echo " <tr> <td>".  $value['ID'] ."</td> <td> ".$value['Name']  ."</td> <td> ". $value['Catogry']."</td> <td> ". 
    '<form action="Delete.php" method="get" style=" color: #f4b7b4;">
    <input type="hidden"  name="ID" value ="'.$value['ID']. '">
    <input type="submit" name="Delete" value="Delete " style="background-color: #f4b7b4;  color: white; border: none; height: 30px">
    </form><form action="Edit.php" method="get" style=" color: #f4b7b4;">
    <input type="submit" name="Edit" value="Edit " style="background-color: #f4b7b4;  color: white; border: none; height: 30px">
    <input type="hidden"  name="ID" value ="'.$value['ID'] .'">
    </form>'
    ."</td></tr>  ";}


echo '</tbody>
</table> ';
echo "<br> success";
}
catch (PDOException $e){
    echo "cannot insert ". $e->getMessage();
}

?>