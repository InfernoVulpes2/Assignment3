<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Monsters Database</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <h1>Movie Monsters Database</h1>
    
    <p><a href="index.php">Back to index page</a></p>
    
    <?php
    include "connection.php";
    $id = $_GET['update'];
    $record = $connection->query("SELECT * FROM scp WHERE id=$id");
    $row = $record->fetch_assoc();
    ?>
    
    <form method="post" action="connection.php">
        <label>Update subject Number</label>
        <br>
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <br><br>
        
        <label>Update subject Name</label>
        <br>
        <input type="text" name="name" value="<?php echo $row['name']; ?>">
        <br><br>
        
        <label>Update Image:</label>
        <br>
        <input type="text" name="image" value="<?php echo $row['image']; ?>">
        <br><br>
        
        <label>Update subject Class:</label>
        <br>
        <input type="text" name="class" value="<?php echo $row['class']; ?>">
        <br><br>
        
        <label>Update subject containment Information:</label>
        <br>
        <input type="text" name="containment" value="<?php echo $row['containment']; ?>">
        <br><br>
        
        <label>Update subject description:</label>
        <br>
        <input type="text" name="description" value="<?php echo $row['description']; ?>">
        <br><br>
        
        <label>Update subject other information:</label>
        <br>
        <input type="text" name="other" value="<?php echo $row['other']; ?>">
        <br><br>
        
        <input type="submit" name="update" value="Update SCP">
    </form>
    
</body>
</html>
