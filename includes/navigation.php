<?php 
$pg = basename(substr($_SERVER['PHP_SELF'],0,strrpos($_SERVER['PHP_SELF'],'.'))); // get file name from url and strip extension
?>

 <header data-brackets-id='834' data-brackets-id='467'>
  <div data-brackets-id='835' data-brackets-id='468' class="collapse bg-dark" id="navbarHeader">
    <div data-brackets-id='836' data-brackets-id='469' class="container">
      <div data-brackets-id='837' data-brackets-id='470' class="row">
        <div data-brackets-id='838' data-brackets-id='471' class="col-sm-8 col-md-7 py-4">
          <h4 data-brackets-id='839' data-brackets-id='472' class="text-white"><?php echo $title;?></h4>
          <p data-brackets-id='840' data-brackets-id='473' class="text-muted">We promote the well being of youths, aged, widows, children through health, education, community, facilitation of empowerment scheme and training to reduce poverty.</p>
          
        </div>
        <div data-brackets-id='841' data-brackets-id='474' class="col-sm-4 offset-md-1 py-4">
          <h4 data-brackets-id='842' data-brackets-id='475' class="text-white"><a href="index.php">Home</a></h4>
          <ul data-brackets-id='843' data-brackets-id='476' class="list-unstyled">
            <li class="<?php if($pg=='about_us.php'){?>current<?php }?>" data-brackets-id='844' data-brackets-id='477'><a data-brackets-id='845' data-brackets-id='478' href="about_us.php" class="text-white">About Us</a></li>
            <li data-brackets-id='846' data-brackets-id='479'><a data-brackets-id='847' data-brackets-id='480' href="contact.php" class="text-white">Contact</a></li>
            <li data-brackets-id='848' data-brackets-id='481'><a data-brackets-id='849' data-brackets-id='482' href="media.php" class="text-white">Media</a></li>
            <li data-brackets-id='848' data-brackets-id='481'><a data-brackets-id='849' data-brackets-id='482' href="volunteer.php" class="text-white">Volunteer</a></li>
            <?php
            
              if(isset($_SESSION['user_role'])) {
                  
                  if(isset($_GET['p_id'])) {
                      
                      $the_post_id = $_GET['p_id'];
                      
                      
                      
                      
                      echo "<li><a href='admin/posts.php?source=edit_post&p_id={$the_post_id}'>Edit Post</a></li>";
                      
                      
                      
                  }
                  
                  
              }
              
              
             ?>
             
            <li data-brackets-id='848' data-brackets-id='481'><a data-brackets-id='849' data-brackets-id='482' href="login.php" class="text-white">Login</a></li>
            
            
   
             <li data-brackets-id='848' data-brackets-id='481'><a data-brackets-id='849' data-brackets-id='482' href="registration.php" class="text-white">Register</a></li>
            
            
            
             
            <li data-brackets-id='848' data-brackets-id='481'><?php  include "includes/languages.php"; ?> </li>
            
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div data-brackets-id='850' data-brackets-id='483' class="navbar navbar-dark bg-dark shadow-sm">
    <div data-brackets-id='851' data-brackets-id='484' class="container d-flex justify-content-between">
      <a data-brackets-id='852' data-brackets-id='485' href="index.php" class="navbar-brand d-flex align-items-center">
        <strong data-brackets-id='856' data-brackets-id='489'><img width="50px" src="images/logo.png">Philip Ilori Foundation</strong>
      </a>
      <button data-brackets-id='857' data-brackets-id='490' class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span data-brackets-id='858' data-brackets-id='491' class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>