<?php

 // Database credentials - remember to fill in your own details
    $user = "a30031037_user";
    $pw = "Toiohomai1234";
    $db = "a30031037_scp";
    
    // Database connection
    $connection = new mysqli('localhost', $user, $pw, $db);
    
    // variable that returns all records in the database - input the name of your DB Table
    $result = $connection->query("select * from scp");
    
    // data from form.php (create a record)
    
    if(isset($_POST['submit']))
    {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $image = $_POST['image'];
        $class = $_POST['class'];
        $containment = $_POST['containment'];
        $description = $_POST['description'];
        $other = $_POST['other'];
        
        // create an SQL insert command
        $insert = "insert into scp (id, name, image, class, containment, description, other) 
        values ('$id', '$name', '$image', '$class', '$containment', '$description', '$other')";
        
        if($connection->query($insert) === TRUE)
        {
            echo "
                <h1>Record added successfully</h1>
                <p><a href='index.php'>Return to index page</a></p>
            ";
        }
        else
        {
            echo "
                <h1>Error submitting data</h1>
                <p>{$connection->error}</p>
                <p><a href='form.php'>Return to form</a></p>
            ";
        }
    }
    
    // Delete record
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    // Delete SQL command
    $delete = "DELETE FROM scp WHERE id=$id";

    if ($connection->query($delete) === TRUE) {
        echo "
            <style>
                body { font-family: sans-serif; }
                a {
                    background-color: black;
                    border: none;
                    color: white;
                    padding: 16px 32px;
                    text-align: center;
                    text-decoration: none;
                    display: inline-block;
                    font-size: 16px;
                }
            </style>
            <h1>Record Deleted</h1>
            <p><a href='index.php'>Back to the index page</a></p>
        ";
    } else {
        echo "
            <style>
                body { font-family: sans-serif; }
                a {
                    background-color: red;
                    border: none;
                    color: white;
                    padding: 16px 32px;
                    text-align: center;
                    text-decoration: none;
                    display: inline-block;
                    font-size: 16px;
                }
            </style>
            <h1>Error deleting record</h1>
            <p>{$connection->error}</p>
            <p><a href='index.php'>Back to the index page</a></p>
        ";
    }
}
    
    // Update record
if (isset($_POST['update'])) {
    // Create variables from the form post data
    $id = $_POST['id'];
    $name = $_POST['name'];
    $image = $_POST['image'];
    $class = $_POST['class'];
    $containment = $_POST['containment'];
    $description = $_POST['description'];
    $other = $_POST['other'];

    // Create an SQL update command
    $update = "UPDATE scp SET id='$id', name='$name', image='$image', class='$class', containment='$containment', description='$description', other='$other' WHERE id=$id";

    if ($connection->query($update) === TRUE) {
        echo "
            <style>
                body { font-family: sans-serif; }
                a {
                    background-color: black;
                    border: none;
                    color: white;
                    padding: 15px 32px;
                    text-align: center;
                    text-decoration: none;
                    display: inline-block;
                    font-size: 16px;
                }
            </style>
            <h1>Record updated successfully</h1>
            <p><a href='index.php'>Return to the index page</a></p>
        ";
    } else {
        echo "
            <style>
                body { font-family: sans-serif; }
                a {
                    background-color: red;
                    border: none;
                    color: white;
                    padding: 15px 32px;
                    text-align: center;
                    text-decoration: none;
                    display: inline-block;
                    font-size: 16px;
                }
            </style>
            <h1>Error updating data</h1>
            <p>{$connection->error}</p>
            <p><a href='update.php?update=$id'>Return to the update form</a></p>
        ";
    }
}

?>
