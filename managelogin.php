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
$result = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
$user = mysqli_fetch_assoc($result);

if(mysqli_num_rows($result) > 0){
    if($password == $user['password']){
     $_SESSION["login"] = true;
    $_SESSION["id"] = $user["id"];
      header("Location: index.php"); 
    }
    else{
        echo
          "<script> alert('Wrong Password/Wrong Email');
          window.location.href='sign-in.php'; </script>";
    }

}
else{
    echo
      "<script> alert('Wrong Password/Wrong Email');
      window.location.href='sign-in.php'; </script>";
}

?>