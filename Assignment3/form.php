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
    <h1>SCP Database</h1>
    
    <p><a href="index.php">Back to index page</a></p>
    
    <form method="post" action="connection.php">
        <label>Enter subject Number</label>
        <br>
        <input type="text" name="id" placeholder="SCP ID">
        <br><br>
        
        <label>Enter subject Name</label>
        <br>
        <input type="text" name="name" placeholder="SCP Name">
        <br><br>
        
        <label>Enter Image:</label>
        <br>
        <input type="text" name="image" placeholder="e.g. image/blah.png">
        <br><br>
        
        <label>Enter subject Class:</label>
        <br>
        <input type="text" name="class" placeholder="SCP Class">
        <br><br>
        
        <label>Enter subject containment Information:</label>
        <br>
        <input type="text" name="containment" placeholder="Containment Information">
        <br><br>
        
        <label>Enter subject description:</label>
        <br>
        <input type="text" name="description" placeholder="Description">
        <br><br>
        
        <label>Enter subject other information:</label>
        <br>
        <input type="text" name="other" placeholder="Other Information">
        <br><br>
        
        <input type="submit" name="submit" value="Submit New SCP">
    </form>
    
</body>
</html>
