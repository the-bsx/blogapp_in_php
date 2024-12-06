<?php
session_start();
include('../../config/database.php');
   

    // fetch all blogs
    $sql = "SELECT *FROM blogs 
        JOIN users ON blogs.user_id = users.id 
        ORDER BY blogs.created_at DESC";

        $result = $connection->query($sql);

        $blogs = [];

        if($result){    
            while( $row = $result->fetch_assoc()) {
                $blogs[] = (object)$row;
            }
        }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">      
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs</title>
    <link rel="stylesheet" href="../../assests/css/styles.css"> 

</head>
<body>
<h2>All Blogs</h2>
    <a href="create_blog.php">Create New Blog</a>
    <ul>
        <?php foreach ($blogs as $blog): ?>
            <li>
                <h3><?php echo htmlspecialchars($blog->title); ?></h3>
                <p><?php echo nl2br(htmlspecialchars(substr($blog->content, 0, 100))); ?>...</p>
                <small>By <?php echo htmlspecialchars($blog->username); ?> on <?php echo $blog->created_at; ?></small>
                <br>
                <a href="view.php?id=<?php echo $blog->id; ?>">Read More</a>
                <?php if (isset($_SESSION['user_id']) && $_SESSION['user_id'] == $blog->user_id): ?>
                    <a href="update.php?id=<?php echo $blog->id; ?>">Edit</a>
                    <a href="delete.php?id=<?php echo $blog->id; ?>" onclick="return confirm('Are you sure?')">Delete</a>
                <?php endif; ?>
            </li>
            <hr>
        <?php endforeach; ?>
    </ul>
</body>
</html>