
<?php
require 'config.php';
if(empty($_SESSION["id"]))
{
  header("Location: sessionless.php");
}
$currentDate=date("Y-m-d H:i:s");
require 'navbar.php';

?>
<!doctype html>
<title>Home</title>
<html lang="en" data-bs-theme="auto">
  <head><script src="assets/js/color-modes.js"></script>

  <style>
.hideme
{
    display:none;
    visibility:hidden;
}
.showme
{
    display:inline;
    visibility:visible;
}
</style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.115.4">
    <title>List groups · Bootstrap v5.3</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/list-groups/">

    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

<link href="bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }
      .bd-mode-toggle {
        z-index: 1500;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="list-groups.css" rel="stylesheet">
  </head>
  <body>
 

    

    
<?php
$currentPost=$_GET['currentPost'];
$currentUser=$_SESSION["id"];
$ARRAY=array();
$query="SELECT * FROM `comments` WHERE `post_id`=$currentPost";
$result = mysqli_query($conn,$query);
$counter=0;
while($row = mysqli_fetch_assoc($result))
{        
$ARRAY[$counter]= $row;
$counter=$counter+1;
}
$limit=$counter;
$counter=0;
$ARRAY=array_reverse($ARRAY);
$result = mysqli_query($conn, "SELECT * FROM `posts` WHERE `post_id`=$currentPost;");
$row = mysqli_fetch_assoc($result)

?>



<div class="container">
  <div class="col-8 offset-2 my-5">
<div class="card shadow-sm">
            <div class="card-body">
              <h1><?PHP echo $row['title'] ?></h1>
            <img src="<?php echo $row['image'];?>" style="width: 100%;" >
              <p class="card-text"> <?php echo $row['content']?></p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="d-flex justify-content-center" > 
                    </div>
</div>
</div>
</div>
</div>







<div class="d-flex flex-column flex-md-row p-4 gap-4 py-md-5 align-items-center justify-content-center">

<div class="list-group">
    
<?php while($counter<$limit)
{
    $datetime_1=$ARRAY[$counter]['updated_at'];
    $datetime_2=$currentDate;
    $currentComment=$ARRAY[$counter]['id'];
    $start_datetime = new DateTime($datetime_1);
    $diff = $start_datetime->diff(new DateTime($datetime_2));
    $commenter=$ARRAY[$counter]['user_id'];
    $query="SELECT `fName`, `lName`,`ProfilePicture` FROM `users` WHERE `id`=$commenter";
    $result = mysqli_query($conn, $query);
    $data = mysqli_fetch_assoc($result);
    $fName=$data['fName'];
    $lName=$data['lName'];
    $profilePicture=$data['ProfilePicture'];
    ?>
    <div>
    <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
      <img src="<?php echo $profilePicture?>" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">
      <div class="d-flex gap-2 w-100 justify-content-between">
        <div>
          <h6 class="mb-0"><?php echo $fName." ".$lName ?></h6>
          <p class="mb-0 opacity-75"><?php echo $ARRAY[$counter]['content'] ?></p>


          <?php

if($_SESSION["id"]==$commenter)
{?>    

       <form action="manageDeleteComment.php" method="post" enctype="multipart/form-data">
        <div class="btn-group">
        </div>
        <button type="submit" class="btn btn-sm btn-outline-secondary">Delete Comment</button>
        <input type="text" id="currentComment" name="currentComment" class="hideme" value="<?php echo $currentComment?>">
        <input type="text" id="currentPost" name="currentPost" class="hideme" value="<?php echo $currentPost?>">
      </form>
  <?php
}
?>
     
        </div>
        <small class="opacity-50 text-nowrap"><?php  echo $diff->days." D ".$diff->h." H ".$diff->i." M ago"?></small>
        
      </div>
    </a>
  
  </div>
<?php
    $counter=$counter+1;
}
?>
</div>
</div>



<div class="col-8 offset-2 my-5">
<form action="manageAddComment.php" method="post" enctype="multipart/form-data">
        
            <div class="mb-3">
              <textarea class="form-control" name="content" id="" rows="3" placeholder="Join the discussion" required=true autocomplete="off"></textarea>
            </div>
            <input type="submit" class="btn btn-primary" value="comment">
            <input type="text" id="currentPost" name="currentPost" class="hideme" value="<?php echo $currentPost?>">
        <input type="text" id="currentUser" name="currentUser" class="hideme" value="<?php echo $currentUser?>">
          </form>
          </div>  

</div>


<script src="bootstrap.bundle.min.js"></script>

    </body>
</html>
<?php
require 'footer.php';
?>