<?php  include "includes/db.php"; ?>
<?php include "includes/functions.php";  ?>
<?php if(isset($_POST['submit'])) {
    
    
  volunteer(); 
    

}


?>


<?php

$page = isset($_GET['menu'])?$_GET['menu']:'volunteer';

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
      <h1 data-brackets-id='862' data-brackets-id='495' class="jumbotron-heading">People of Action</h1>
      <p data-brackets-id='863' data-brackets-id='496' class="lead text-muted">Philip Ilori Foundation is where neighbors, friends, and problem-solvers share ideas, join leaders, and take action to create lasting change. Join Us, Share your story.</p>
      <p data-brackets-id='864' data-brackets-id='497'>
        <a data-brackets-id='865' data-brackets-id='498' href="donate.php" class="btn btn-primary my-2">Donate</a>
        
      </p>
    </div>
  </section>

  <div data-brackets-id='867' data-brackets-id='500' class="album py-5 bg-light">
    <div data-brackets-id='868' data-brackets-id='501' class="container">

      <div data-brackets-id='869' data-brackets-id='502' class="row">
       <div class="col-lg-12 mb-5" >
          
            <form action="#" method="post">
              <div class="form-group row">
                <div class="col-md-6 mb-4 mb-lg-0">
                  <input type="text" name="firstName" class="form-control" placeholder="First name">
                </div>
                <div class="col-md-6">
                  <input type="text" name="lastName" class="form-control" placeholder="Last name">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-6">
                  <input type="text" name="emailAddress" class="form-control" placeholder="Email address">
                </div>
                <div class="col-md-6">
                  <input type="text" name="phoneNumber" class="form-control" placeholder="Phone Number">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <textarea name="message" id="" class="form-control" placeholder="Write your message." cols="30" rows="10"></textarea>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12 mr-auto">
                  <input type="submit" name="submit" class="btn btn-block btn-primary text-white py-3 px-5 rounded-0" value="Send Message">
                </div>
              </div>
            </form>
          </div>
      </div>
    </div>
  </div>
</main>

<?php  include "includes/footer.php"; ?>

