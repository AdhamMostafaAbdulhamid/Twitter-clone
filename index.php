<title>Home</title>
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
<html lang="en" data-bs-theme="auto">
  <head><script src="bootstrap.bundle.min.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.115.4">
    <title>Home</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/album/">
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

    
  </head>
  <body>















  
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
      <symbol id="check2" viewBox="0 0 16 16">
        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
      </symbol>
      <symbol id="circle-half" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
      </symbol>
      <symbol id="moon-stars-fill" viewBox="0 0 16 16">
        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
        <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
      </symbol>
      <symbol id="sun-fill" viewBox="0 0 16 16">
        <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
      </symbol>
    </svg>

   

    


<main>

<?php

$currentUser=$_SESSION["id"];
$ARRAY=array();
$result = mysqli_query($conn, "SELECT * FROM posts");
$counter=0;
while($row = mysqli_fetch_assoc($result))
{        
#echo $row['post_id'];
$ARRAY[$counter]= $row;
$counter=$counter+1;
}
$limit=$counter;
$counter=0;
$ARRAY=array_reverse($ARRAY);
?>


<div class="container">
  
<div class="col-8 offset-2 my-5">
<form action="manageAddPost.php" method="post" enctype="multipart/form-data">
          <div class="mb-3">
              <input type="text" name="title" id="" class="form-control" placeholder="title" required=true autocomplete="off">
            </div>
            <div class="mb-3">
              <textarea class="form-control" name="content" id="" rows="3" placeholder="ex: share your ideas" required=true autocomplete="off"></textarea>
            </div>
            <div class="mb-3">
              <input type="file" class="form-control" name="fileToUpload" id="" placeholder="" aria-describedby="fileHelpId" required=true>
            </div>
          

            <input type="submit" class="btn btn-primary" value="Add">
          </form>
          </div>  

</div>
<?php while($counter<$limit)
{

 $datetime_1=$ARRAY[$counter]['updated at'];
 $datetime_2=$currentDate;
 $start_datetime = new DateTime($datetime_1);
 $diff = $start_datetime->diff(new DateTime($datetime_2));
 $userNo=$ARRAY[$counter]['user_id'];
 $result = mysqli_query($conn, "SELECT `fName`, `lName` FROM `users` WHERE `id`=$userNo;");
 $row = mysqli_fetch_assoc($result);
 $fName=$row['fName'];
 $lName=$row['lName'];
  ?>
  <div class="container">
  <div class="col-8 offset-2 my-5">
          <div class="card shadow-sm">
            <div class="card-body">
              <h1><?PHP echo $ARRAY[$counter]['title'] ?></h1>
            <img src="<?php echo $ARRAY[$counter]['image'];?>" style="width: 100%;" >
              <p class="card-text"> <?php echo $ARRAY[$counter]['content']?></p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="d-flex justify-content-center" > 
                      <p> <?php echo "Posted by ".$fName." ",$lName?></p>
                    </div>
                <div class="btn-group">


                  <form action="view.php" method="get" enctype="multipart/form-data">
                  <input type="text" id="currentPost" name="currentPost" class="hideme" value="<?php echo $ARRAY[$counter]['post_id']?>" >
                  <button type="submit" class="btn btn-sm btn-outline-secondary">Comment</button>
                  </form>

                  <?php  if($ARRAY[$counter]['user_id']==$currentUser)
                  { ?>

                  <form action="edit.php" method="get" enctype="multipart/form-data">
                   <?php  $temp=$ARRAY[0]['post_id']; ?>
                  <input type="text" id="limit" name="limit" class="hideme" value="<?php echo $temp?>"> 
                  <input type="text" id="currentPost" name="currentPost" class="hideme" value="<?php echo $ARRAY[$counter]['post_id']?>" >
                  <button type="submit" class="btn btn-sm btn-outline-secondary">Edit</button>
                  </form>

                  <form action="delete.php" method="get" enctype="multipart/form-data">
                  <input type="text" id="currentPost" name="currentPost" class="hideme" value="<?php echo $ARRAY[$counter]['post_id']?>" >
                  <button type="submit" class="btn btn-sm btn-outline-secondary">Delete</button>
                  </form>

                  <?php
                  }
                  ?>


                  
              
                 
                </div>
                <small class="text-body-secondary"><?php  echo $diff->days." Days ".$diff->h." Hours ".$diff->i." Mins ".$diff->s." Seconds ago"?></small>
              </div>
            </div>
          </div>
        </div>  

  </div>
  <?php $counter=$counter+1;
}

?>



  

</main>


<script src="bootstrap.bundle.min.js"></script>

    </body>
</html>



<?php
require 'footer.php';
?>