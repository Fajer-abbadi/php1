<?php
session_start();
include 'connection.php';

$user_name = $_SESSION['user_name'];
echo "Hello ". $user_name;


$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
</head>
<body>
 
    <form action="signup.php" method="post" enctype="multipart/form-data">
       
    </form>
</body>
</html>
