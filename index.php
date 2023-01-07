<?php session_start(); ?>
<?php include "admin/functions.php"; ?>
<?php  include "includes/db.php"; ?>
<?php  include "includes/index_header.php"; ?>
   <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <?php  include "includes/languages.php"; ?>
      <header class="masthead mb-auto">
         <div class="inner">
            <h3 class="masthead-brand"><a href="index.php"><img src="images/logo.png">Philip Ilori Foundation</a></h3>
            <nav class="nav nav-masthead justify-content-center">
                <a class="nav-link active" href="index.php">Home</a>
                <a class="nav-link" href="about_us.php">About Us</a>
                <a class="nav-link" href="contact.php">Contact</a>
                <a class="nav-link" href="media.php">Media</a>
                <a class="nav-link" href="login.php">Login</a>
                 <a class="nav-link" href="registration.php">Register</a>
            </nav>   
         </div>
      </header>
      <main role="main" class="inner cover">
          <?php  include "includes/index_head.php"; ?>
          
      </main>
      
      
      <?php  include "includes/index_footer.php"; ?>