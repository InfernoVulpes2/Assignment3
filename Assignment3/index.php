<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCP Directory</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    
     include "connection.php";
            
    ?>
    
    <h1>SCP Database</h1>
    
    <nav>
            <a href="index.php">Home</a>
        <?php foreach($result as $link): ?>
            <a href="index.php?link=<?php echo $link['id']; ?>'"><?php echo $link['id']; ?></a>
        <?php endforeach; ?>
        <br><br>
        <a href="form.php">Enter New SCP</a>
            
    </nav>
    
    <div>
        <?php
        if(isset($_GET['link']))
        {
        
        
        $id=trim($_GET['link'], "'");
        
        $record = $connection->query("select * from scp where id='$id'");
        
        $array = $record->fetch_assoc();
        
        
        $id=$array['id'];
        $update = "update.php?update=" .  $id;
        $delete = "connection.php?delete=" . $id;
        
        
        echo "
            <h1>SCP-{$array['id']}<h1>
            <h2>Name: {$array['name']}</h2>
            <p><img src='{$array['image']}' class='image'></p>
            <h2>Class: {$array['class']}</h2>
            <h3>Containment Procedures:</h3> 
            <p> " . nl2br($array['containment']) . "</p>
            <h3>Description: </h3>
            <p>" . nl2br($array['description']) . "</p>
            <h3>Other Information:</h3> 
            <p>" . nl2br($array['other']) . "</p>
            
            <p>
            <a href='{$update}'>Update record</a>
            <a href='{$delete}'>Delete record</a>
            </p>
            
            
        
        ";
        
        }
        
        else {
            echo "
                <h2>Welcome to the SCP Database</h2>
                <p>Click on the links above to view or create a Subject</p>
                <p><img src='images/logo.png'</p>
                
                ";
                
        }
        
        ?>
        
    </div>
    
</body>
</html>