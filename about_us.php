<?php  include "includes/db.php"; ?>
<?php

$page = isset($_GET['menu'])?$_GET['menu']:'about';
 
    switch($page){
    case 'home':
        $title = ' Welcome to PIF';
        $content = 'index.php';
        break;
    case 'about':
        $title = 'About PIF';
        $content = 'about_us.php';
        break;
    case 'contact':
        $title = 'Get in touch';
        $content = 'contact.php';
        break;
        case 'login':
        $title = 'PIF | Login';
        $content = 'login.php';
        break;
        case 'donate':
        $title = 'Support PIF';
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
      <h1 data-brackets-id='862' data-brackets-id='495' class="jumbotron-heading">About Us</h1>
      <p data-brackets-id='863' data-brackets-id='496' class="lead text-muted">We promote the well being of youths, aged, widows, children through health, education, community, facilitation of empowerment scheme and training to reduce poverty.</p>
      <p data-brackets-id='864' data-brackets-id='497'>
        <a data-brackets-id='865' data-brackets-id='498' href="donate.php" class="btn btn-primary my-2">Donate</a>
        <a data-brackets-id='866' data-brackets-id='499' href="contact.php" class="btn btn-secondary my-2">Contact Us</a>
      </p>
    </div>
  </section>

  <div data-brackets-id='867' data-brackets-id='500' class="album py-5 bg-light">
    <div data-brackets-id='868' data-brackets-id='501' class="container">
      <div class="row mb-5 justify-content-center">
          <div class="col-md-6 text-center mb-5">
            <h2 class="text-cursive">Our Team</h2>
          </div>
        </div>

      <div data-brackets-id='869' data-brackets-id='502' class="row">
        <div data-brackets-id='870' data-brackets-id='503' class="col-md-3 card_thumb">
          <div data-brackets-id='871' data-brackets-id='504' class="card mb-3 shadow-sm">
           <a href="#" class="d-inline-block">
                <img src="images/ceo_thumb.png" alt="Image"
                 class="img-fluid">
              </a>
            
            <div data-brackets-id='876' data-brackets-id='509' class="card-body">
             <span class="meta">CEO</span>
              <p data-brackets-id='877' data-brackets-id='510' class="card-text">Mr. Ilori Oladele Philip</p>
              <div data-brackets-id='878' data-brackets-id='511' class="d-flex justify-content-between align-items-center">
                <div data-brackets-id='879' data-brackets-id='512' class="btn-group">
                  <button data-brackets-id='880' data-brackets-id='513' type="button" class="btn btn-sm btn-outline-secondary"><a href="https://wa.me/46738932553" target="_blank">Contact me</a></button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div data-brackets-id='870' data-brackets-id='503' class="col-md-3 card_thumb">
          <div data-brackets-id='871' data-brackets-id='504' class="card mb-3 shadow-sm">
           <a href="#" class="">
                <img  src="images/person_assist_thumb.png" alt="Image"
                 class="img-fluid">
              </a>
            
            <div data-brackets-id='876' data-brackets-id='509' class="card-body">
             <span class="meta">Personal Assistant</span>
              <p data-brackets-id='877' data-brackets-id='510' class="card-text">Mr. Olabode Kehinde</p>
              <div data-brackets-id='878' data-brackets-id='511' class="d-flex justify-content-between align-items-center">
                <div data-brackets-id='879' data-brackets-id='512' class="btn-group">
                  <button data-brackets-id='880' data-brackets-id='513' type="button" class="btn btn-sm btn-outline-secondary"><a href="https://wa.me/2348032004568" target="_blank">Contact me</a></button>
                </div>
              </div>
            </div>
          </div>
        </div>
          <div data-brackets-id='870' data-brackets-id='503' class="col-md-3 card_thumb">
          <div data-brackets-id='871' data-brackets-id='504' class="card mb-3 shadow-sm">
           <a href="#" class="d-inline-block">
                <img src="images/procure_officer.jpg" alt="Image"
                 class="img-fluid">
              </a>
            
            <div data-brackets-id='876' data-brackets-id='509' class="card-body">
             <span class="meta">Procurement Officer</span>
              <p data-brackets-id='877' data-brackets-id='510' class="card-text">Mrs Fabamigbe Olabisi</p>
              <div data-brackets-id='878' data-brackets-id='511' class="d-flex justify-content-between align-items-center">
                <div data-brackets-id='879' data-brackets-id='512' class="btn-group">
                    <button data-brackets-id='880' data-brackets-id='513' type="button" class="btn btn-sm btn-outline-secondary"><a href="https://wa.me/2348058358782" target="_blank">Contact me</a></button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div data-brackets-id='870' data-brackets-id='503' class="col-md-3 card_thumb">
          <div data-brackets-id='871' data-brackets-id='504' class="card mb-3 shadow-sm">
           <a href="#" class="d-inline-block">
                <img src="images/secretary.jpg" alt="Image"
                 class="img-fluid">
              </a>
            
            <div data-brackets-id='876' data-brackets-id='509' class="card-body">
             <span class="meta">Secretary</span>
              <p data-brackets-id='877' data-brackets-id='510' class="card-text">Sofia Eriksson</p>
              <div data-brackets-id='878' data-brackets-id='511' class="d-flex justify-content-between align-items-center">
                <div data-brackets-id='879' data-brackets-id='512' class="btn-group">
                    <button data-brackets-id='880' data-brackets-id='513' type="button" class="btn btn-sm btn-outline-secondary"><a href="https://wa.me/46763235394" target="_blank">Contact me</a></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</main>

<?php  include "includes/footer.php"; ?>

