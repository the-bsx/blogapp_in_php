<?php
// including the connectivity 
include('../../config/database.php');

// taking the usersignup data from users
if(isset($_POST['submit'])){
    $username = htmlspecialchars( $_POST["username"] );
    $email = htmlspecialchars( $_POST["email"]);
    $password = password_hash( $_POST["password"],PASSWORD_DEFAULT);

    //inserting  data into database
    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
    if ($connection->query($sql) === TRUE){
        echo "signup successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="../../assests/css/styles.css">
</head>
<body>
    <h2>Signup</h2>
    <form method="POST" action="">
        <label>Username</label>
        <input type="text" name="username" required>
        <br>
        <label>Email</label>
        <input type="email" name="email" required>
        <br>
        
        <label>Password</label>
        <input type="password" name="password" required>
        <br>
        <button type="submit" name="submit">Sign Up</button>
    </form>
</body>
</html>
