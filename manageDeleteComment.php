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

$currentComment=$_POST["currentComment"];
$currentComment=trim($currentComment);
$currentComment=htmlspecialchars($currentComment);

$currentPost=$_POST["currentPost"];
$currentPost=trim($currentPost);
$currentPost=htmlspecialchars($currentPost);

$query="DELETE FROM `comments` WHERE `id`='$currentComment'";
   mysqli_query($conn, $query);
    $target="Location: view.php?currentPost=".$currentPost;
   header($target);

      
      $_POST = array();
