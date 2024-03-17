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

$currentPost=$_POST["currentPost"];

   $query="DELETE FROM `comments` WHERE `post_id`='$currentPost'";
   mysqli_query($conn, $query);
    $query="DELETE FROM `posts` WHERE `post_id`='$currentPost'";
    mysqli_query($conn, $query);

      echo
      "<script> alert('Post is Deleted Successfully');
      window.location.href='index.php'; </script>";
      $_POST = array();
