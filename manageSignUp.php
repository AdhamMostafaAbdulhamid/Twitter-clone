<!DOCTYPE html>
<html lang="en">

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
$email=$_POST["email"];
$email=trim($email);
$email=htmlspecialchars($email);

$password=$_POST["password"];
$password=trim($password);
$password=htmlspecialchars($password);

$fName=$_POST["fName"];
$fName=trim($fName);
$fName=htmlspecialchars($fName);

$lName=$_POST["lName"];
$lName=trim($lName);
$lName=htmlspecialchars($lName);



$copy=mysqli_query($conn, "SELECT * FROM users WHere email = '$email'");
if(mysqli_num_rows($copy) > 0){
    echo
    "<script> alert('Email Has BeenAlready Taken');
    window.location.href='sign-up.php'; </script>";
    }




$target_dir = "profiles/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    $uploadOk = 1;
  } else {
    echo "<script> alert('File is not an image.'); 
    window.location.href='sign-up.php';</script>";
    $uploadOk = 0;
  }
  // Check if file already exists
if (file_exists($target_file)) {
    echo "<script> alert('Sorry, file already exists.');
    window.location.href='sign-up.php'; </script>";
    $uploadOk = 0;
  }
  
  // Check file size
  if ($_FILES["fileToUpload"]["size"] > 5000000000) {
    echo "<script> alert('Sorry, your file is too large.');
    window.location.href='sign-up.php'; </script>";
    $uploadOk = 0;
  }
  
  // Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" ) {
    echo "<script> alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.');
    window.location.href='sign-up.php'; </script>";
    $uploadOk = 0;
  }
  
  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
    echo "<script> alert('Sorry, your file was not uploaded.'); 
    window.location.href='sign-up.php';</script>";
  // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "yeah";
    } else {
      echo "<script> alert('Sorry, there was an error uploading your file.');
      window.location.href='sign-up.php'; </script>";
      
    }
  }

  echo "<br>";
  $fileName= "./profiles/".$_FILES["fileToUpload"]["name"];
 
  $date=date('d/m/y');


if($uploadOk==1){
    $query = "INSERT INTO `users`(`fName`, `lName`, `email`, `password`, `ProfilePicture`) VALUES ('$fName','$lName','$email','$password','$fileName')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Registration Successful');
      window.location.href='sign-in.php'; </script>";
      $_POST = array();
}




?>