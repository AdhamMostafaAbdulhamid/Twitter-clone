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

$title=$_POST["title"];
$title=trim($title);
$title=htmlspecialchars($title);




$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    $uploadOk = 1;
  } else {
    echo "<script> alert('File is not an image.'); 
    window.location.href='index.php';</script>";
    $uploadOk = 0;
  }

  
  // Check file size
  if ($_FILES["fileToUpload"]["size"] > 5000000000) {
    echo "<script> alert('Sorry, your file is too large.');
    window.location.href='index.php'; </script>";
    $uploadOk = 0;
  }
  
  // Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" ) {
    echo "<script> alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.');
    window.location.href='index.php'; </script>";
    $uploadOk = 0;
  }
  
  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
    echo "<script> alert('Sorry, your post was not uploaded.'); 
    window.location.href='index.php';</script>";
  // if everything is ok, try to upload file
  } else {
    if (!move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
    { 
      echo "<script> alert('Sorry, there was an error posting your Post.');
      window.location.href='index.php'; </script>";
      
    }
  
  }

  $fileName= "./images/".$_FILES["fileToUpload"]["name"];
  $currentUser=$_SESSION["id"];
  $currentDate=date("Y-m-d H:i:s");
  if($uploadOk==1){
   
        $query="INSERT INTO `posts`(`title`, `content`, `image`,`updated at`, `user_id`) VALUES ('$title','$content','$fileName','$currentDate','$currentUser')";
    
      mysqli_query($conn, $query);
      echo
      "<script> alert('Post is added Successfully');
      window.location.href='index.php'; </script>";
      $_POST = array();
}
  