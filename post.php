<?php  include "includes/db.php"; ?>
<?php session_start(); ?>
<?php include "admin/functions.php"; ?>

<?php

$page = isset($_GET['menu'])?$_GET['menu']:'media';

  switch($page){
    case 'home':
        $title = ' Welcome to PIF';
        $content = 'index.php';
        break;
    case 'about':
        $title = 'About us';
        $content = 'about_us.php';
        break;
    case 'contact':
        $title = 'Get in touch';
        $content = 'contact.php';
        break;
        case 'admin_login':
        $title = 'Admin Login';
        $content = 'admin_login.php';
        break;
        case 'donate':
        $title = 'Support Us';
        $content = 'donate.php';
        break;
        case 'volunteer':
        $title = 'Volunteer';
        $content = 'volunteer.php';
        break;
        case 'media':
        $title = 'Media &amp; News';
        $content = 'media.php';
        break;
}
?>
<!doctype html>
<html data-brackets-id='821' data-brackets-id='454' lang="en">
  <head data-brackets-id='822' data-brackets-id='455'>
    <meta data-brackets-id='823' data-brackets-id='456' charset="utf-8">
    <meta data-brackets-id='824' data-brackets-id='457' name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta data-brackets-id='825' data-brackets-id='458' name="description" content="">
    <meta data-brackets-id='826' data-brackets-id='459' name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta data-brackets-id='827' data-brackets-id='460' name="generator" content="Jekyll v3.8.5">
    <title data-brackets-id='828' data-brackets-id='461'><?php echo $title;?></title>

    <link data-brackets-id='829' data-brackets-id='462' rel="canonical" href="grids.php">
    

    <!-- Bootstrap core CSS -->
<link data-brackets-id='830' data-brackets-id='463' href="/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.css" crossorigin="anonymous">
     <link rel="stylesheet" href="css/bootstrap-grid.css" crossorigin="anonymous">
      <link rel="stylesheet" href="css/bootstrap-grid.css.map" crossorigin="anonymous">
       <link rel="stylesheet" href="css/bootstrap-grid.min.css" crossorigin="anonymous">
        <link rel="stylesheet" href="css/bootstrap-grid.min.css.map" crossorigin="anonymous">
         <link rel="stylesheet" href="css/bootstrap-reboot.css" crossorigin="anonymous">
          <link rel="stylesheet" href="css/bootstrap-reboot.css.map" crossorigin="anonymous">
           <link rel="stylesheet" href="css/bootstrap-reboot.min.css" crossorigin="anonymous">
            <link rel="stylesheet" href="css/bootstrap-reboot.min.css.map" crossorigin="anonymous">
            <link rel="stylesheet" href="css/bootstrap.css.map" crossorigin="anonymous">
            <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
            <link rel="stylesheet" href="css/bootstrap.min.css.map" crossorigin="anonymous">
            
             <!--Font-->
    <link href="https://fonts.googleapis.com/css?family=Oxanium" rel="stylesheet">
    
    <!-- Place your kit's code here -->
    <script src="https://kit.fontawesome.com/eebc17dedd.js" crossorigin="anonymous"></script>
            
            <!--Favicon-->
    <link rel="shortcut icon" href="images/logo.png" >


    <style data-brackets-id='831' data-brackets-id='464'>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
        
         body, html, p, a {
    font-family: 'Oxanium', serif;
    font-size: 15px;
    color: #00a651; 
    
    margin: 0;
    }
    
    .nav-masthead .nav-link  {
    color: #00a651; 

    }
    masthead-brand {

    font-family: 'Oxanium', serif;
    color: #00a651;
    font-size: 10px;

    }
    
        i {
            color: red;
        }
    </style>
    <!-- Custom styles for this template -->
    <link data-brackets-id='832' data-brackets-id='465' href="css/grid.css" rel="stylesheet">
  </head>
  <body data-brackets-id='833' data-brackets-id='466'>
<?php  include "includes/navigation.php"; ?>

   

<main data-brackets-id='859' data-brackets-id='492' role="main">

  <section data-brackets-id='860' data-brackets-id='493' class="jumbotron text-center">
    <div data-brackets-id='861' data-brackets-id='494' class="container">
      <h1 data-brackets-id='862' data-brackets-id='495' class="jumbotron-heading">News &amp; Media</h1>
      <p data-brackets-id='863' data-brackets-id='496' class="lead text-muted">Stories of Philip Ilori Foundation service from around the world</p>
      <p data-brackets-id='864' data-brackets-id='497'>
        <a data-brackets-id='865' data-brackets-id='498' href="donate.php" class="btn btn-primary my-2">Donate</a>
        
      </p>
    </div>
  </section>

  <div data-brackets-id='867' data-brackets-id='500' class="album py-5 bg-light">
    <div data-brackets-id='868' data-brackets-id='501' class="container">
    
        <div class="row">

            <!-- Blog Entries Column -->

            
            <div class="col-md-8">
                
<?php

if(isset($_GET['p_id'])) {

$the_post_id = $_GET['p_id'];


$view_query = "UPDATE posts SET post_views_count = post_views_count + 1 WHERE post_id = $the_post_id ";
$send_query = mysqli_query($connection,$view_query);

if(!$send_query) {
    die("Query Failed");
    
} 


$query = "SELECT * FROM posts WHERE post_id = $the_post_id ";
$select_all_posts_query = mysqli_query($connection,$query);

while($row = mysqli_fetch_assoc($select_all_posts_query)) {

$post_title = $row['post_title'];
$post_user = $row['post_user'];
$post_date = $row['post_date'];
$post_image = $row['post_image'];
$post_content = $row['post_content'];

?>

<!--
                     <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>
-->

                <!-- First Blog Post -->
                <h2>
                    <a href="#"><?php echo $post_title ?></a>
                </h2>
                <p class="lead">
                    by <a href="index.php"><?php echo $post_user ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span><?php echo $post_date ?></p>
                <hr>
                <img width='300' class="img-responsive" src="images/<?php echo $post_image; ?>" alt="">
                <hr>
                <p><?php echo $post_content ?></p>
               

                <hr>   
                       
                  <?php }  
                
                
                
                
                
                } else {
                    
                    
                  header("Location: index.php");  
                    
                    
                    
                }
                
                
                
                
                
                
                
                ?>
                        
                        
                    
                    
                <!-- Blog Comments -->

<?php 

    if(isset($_POST['create_comment'])) {

        $the_post_id = $_GET['p_id'];
        $comment_author = $_POST['comment_author'];
        $comment_email = $_POST['comment_email'];
        $comment_content = $_POST['comment_content'];


        if (!empty($comment_author) && !empty($comment_email) && !empty($comment_content)) {


            $query = "INSERT INTO comments (comment_post_id, comment_author, comment_email, comment_content, comment_status,comment_date) ";

            $query .= "VALUES ($the_post_id ,'{$comment_author}', '{$comment_email}','{$comment_content}', 'unapproved',now())";

            $create_comment_query = mysqli_query($connection, $query);

            if (!$create_comment_query) {
                die('QUERY FAILED' . mysqli_error($connection));


            }
            
            
//$query = "UPDATE posts SET post_comment_count = post_comment_count + 1 ";
//$query .= "WHERE post_id = $the_post_id ";
//$update_comment_count = mysqli_query($connection,$query); 
//            
            


        } else {
            
            
         echo "<script>alert('Fields cannot be empty')</script> ";   
            
            
        }


    }




?> 


                <!-- Posted Comments -->



        <!-- Comments Form -->
        <div class="well">
           <h4>Leave a Comment:</h4>
            <form action="#" method="post" role="form">

                <div class="form-group">
                  <label for="Author">Author</label>
                   <input type="text" class="form-control" name="comment_author">
                </div>
                <div class="form-group">
                  <label for="Email">Email</label>
                   <input type="email" class="form-control" name="comment_email">
                </div>

                <div class="form-group">
                    <label for="comment">Your Comment</label>
                    <textarea name="comment_content" class="form-control" rows="3" id="body"></textarea>
                </div>
                <button type="submit" name="create_comment" class="btn btn-primary">Submit</button>
            </form>
        </div>

        <hr>
                
                 <?php 


            $query = "SELECT * FROM comments WHERE comment_post_id = {$the_post_id} ";
            $query .= "AND comment_status = 'approved' ";
            $query .= "ORDER BY comment_id DESC ";
            $select_comment_query = mysqli_query($connection, $query);
            if(!$select_comment_query) {

                die('Query Failed' . mysqli_error($connection));
             }
            while ($row = mysqli_fetch_array($select_comment_query)) {
            $comment_date   = $row['comment_date']; 
            $comment_content= $row['comment_content'];
            $comment_author = $row['comment_author'];
                
                ?>
                
                
                           <!-- Comment -->
                <div class="media">
                     
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading"><?php echo $comment_author;   ?>
                            <small><?php echo $comment_date;   ?></small>
                        </h4>
                        
                        <?php echo $comment_content;   ?>
 
                    </div>
                </div>
     
                
  

           <?php }     
                ?>
           
                
                
                
                
                
                
                
                

               

            </div>
            
            
            

            <!-- Blog Sidebar Widgets Column -->
             <?php include "includes/sidebar.php";  ?>
           

        </div>
        <!-- /.row -->
      
      
      
    </div>
  </div>

</main>

<?php  include "includes/footer.php"; ?>

