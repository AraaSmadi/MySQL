<?php require 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<head>
    <title>Index</title>
</head>
<body>
<h1  style=" color :#f4b7b4 ;font:bold;"> Add Product form </h1>
    <form action="Add.php" method="get" style=" color: #f4b7b4;">
        <fieldset>
            <br><br><br>
            <legend> Courses </legend>
            <label for="ID" style=" color: #f4b7b4;">ID :</label>
            <input type="number" id="ID" placeholder="Enter ID" name="ID" Required>
            <br><br>
            <label for="name"> Name :</label>
            <input type="text" id="name" placeholder="Enter Course Name" name="name" Required>
            <br><br>
<?php $sql = 'SELECT * FROM catogry order by Catogry_id';
$stat = $con->query($sql);
$category = $stat->fetchAll(); ?>

    <label for="category"><b> Category: </b></label>
    <select name="category" Required >
        <option>Select Category</option>
        <?php foreach ($category as $value) : ?>
            <option value="<?php echo $value['Catogry_name']; ?>"><?php echo $value['Catogry_name']; ?></option>
        <?php endforeach ?>
    </select>   <br><br>   
            <input type="submit" name="button1" value="Add Courses" style="background-color: #f4b7b4;  color: white; border: none; height: 30px">
            <br><br><br>
        </fieldset>
    </form>
</body>

</html>