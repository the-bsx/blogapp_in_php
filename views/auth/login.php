<?php
include('../../config/database.php');

if(isset($_POST['submit'])){
    $email = htmlspecialchars( $_POST['email']);
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $connection->query($sql);
    if($result){
        while($user = $result->fetch_assoc()){
            if($user && password_verify($password, $user["password"])){
                session_start();
                $_SESSION['user_id'] = $user['id'];
                header("Location: ../../index.php");
                exit();

            } else {
                echo "Invalid email or password";
            }
            }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../../assests/css/styles.css"> 
</head>
<body>
    <h2>Login</h2>
    <form method="POST" action="">
        <label>Email</label>
        <input type="email" name="email" required>
        <br>
        <label>Password</label>
        <input type="password" name="password" required>
        <br>
        <button type="submit" name="submit">Log In</button>
    </form>
</body>
</html>