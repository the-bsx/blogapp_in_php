<?php
session_start();

if (isset($_SESSION['user_id'])) {
    echo "<h1>Welcome to the Blog App!</h1>";
    echo "<a href='views/blog/read_blog.php'>Go to Blogs</a>";
} else {
    echo "<h1>Welcome to the Blog App!</h1>";
    echo "<a href='views/auth/login.php'>Login</a>";
    echo " or ";
    echo "<a href='views/auth/signup.php'>Sign Up</a>";
}
?>
