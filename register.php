<?php
if ($_POST["submit"]) {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $username = $_POST["username"];
    $email = $_POST["email"];

    $db = new mysqli('localhost', 'root', '', 'techone');
    $sql = "INSERT INTO users(firstname, lastname, username, email) VALUES('$firstname', '$lastname','$username','$email')";
        

    $db -> query($sql);
}






?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Document</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <form action="" method ="post">
            <input type="text" placeholder ="enter firstname" name ="firstname">
            <br>
            <br>
            
            <input type="text" placeholder ="enter lastname"  name ="lastname">
            <br>
            <br>
            <input type="text" placeholder ="enter username"  name ="username">
            <br>
            <br>
            <input type="email" placeholder ="enter email"  name = "email">
            <br>
            <br>
            <input type="submit" value="submit" name ="submit">
            <br>
            <br>


        </form>
     
    
    </body>
</html>