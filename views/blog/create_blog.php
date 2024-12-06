<?php
session_start();
include('../../config/database.php');

        // check if user is authenticated or not
     if(!isset($_SESSION['user_id'])) {
        header("Location: ../auth/login.php");
        exit();
    }
    //  handle the blog creation
    if(isset($_POST['submit'])){
        $user_id = $_SESSION['user_id'];
        $title = htmlspecialchars($_POST['title']);
        $content = htmlspecialchars($_POST['content']);
        $sql = "INSERT INTO blogs (user_id, title, content) VALUES ( '$user_id','$title', '$content')";
        if($connection->query($sql) === TRUE){
            echo "Blog created successfully";
            header("Location:read_blog.php");
            exit();
        } else {
            echo "error occoured!"  ;
        }
        }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Blog</title>
    <link rel="stylesheet" href="../../assests/css/styles.css"> 

</head>
<body>
    <h2>Create Blog</h2>
    <form method="POST" action="">
        <label>Title</label>
        <input type="text" name="title" required>
        <br>
        <label>Content</label>
        <textarea name="content" rows="5" required></textarea>
        <br>
        <button type="submit" name="submit">Create Blog</button>
    </form>
    <a href="read.php">Back to Blogs</a>
</body>
</html>