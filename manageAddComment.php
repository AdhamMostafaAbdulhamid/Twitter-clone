<!DOCTYPE html>
<html lang="en">
<style>



</style>
<head>
<script src="assets/js/color-modes.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="d-flex align-items-center py-4 bg-body-tertiary">
    
</body>
</html>
<?php
require 'config.php';
$content=$_POST["content"];
$content=htmlspecialchars($content);

$currentPost=$_POST["currentPost"];
$currentPost=trim($currentPost);
$currentPost=htmlspecialchars($currentPost);

$currentUser=$_POST["currentUser"];
$currentUser=trim($currentUser);
$currentUser=htmlspecialchars($currentUser);


$currentDate=date("Y-m-d H:i:s");

$query="INSERT INTO `comments`(`user_id`, `post_id`, `content`, `updated_at`) VALUES ('$currentUser','$currentPost','$content','$currentDate')";
mysqli_query($conn, $query);
$_POST = array();
$target="Location: "."view.php?currentPost=".$currentPost;
header($target);
?>

    
      