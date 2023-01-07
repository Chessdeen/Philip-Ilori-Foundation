<?php include "includes/admin_header.php"; ?>


<?php

if(isset($_SESSION['username'])) {
    
    $username = $_SESSION['username'];

    $query = "SELECT * FROM users WHERE username = '{$username}' ";

    $select_user_profile_query = mysqli_query($connection, $query);

    while($row = mysqli_fetch_array($select_user_profile_query)) {

    $user_id = $row['user_id'];
    $username = $row['username'];
    $user_password = $row['user_password'];
    $user_firstname = $row['user_firstname'];
    $user_lastname = $row['user_lastname'];
    $user_email = $row['user_email'];
    $user_image = $row['user_image'];
    $user_role = $row['user_role'];
  } 
    
    
  
    
}
  
?>



<?php

if(isset($_POST['edit_user'])) {

    $user_firstname = $_POST['user_firstname'];
    $user_lastname = $_POST['user_lastname'];  
    $username = $_POST['username'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    
    
    
     if(!empty($username)) {
     $query_username = "SELECT user_password FROM users WHERE username = '{$username}' ";
         $get_user_query = mysqli_query($connection, $query_username);
         confirmQuery($get_user_query);
         
         
         $row = mysqli_fetch_array($get_user_query);
         
         
         $db_user_password = $row['user_password'];
         
         
         
         
         if($db_user_password != $user_password) {
        
        $hashed_password = password_hash($user_password, PASSWORD_BCRYPT, array('cost' => 10)); 
        
        
    }
    
    
        $query = "UPDATE users SET ";
        $query .="user_firstname  = '{$user_firstname}', ";
        $query .="user_lastname = '{$user_lastname}', ";
        $query .="username = '{$username}', ";
        $query .="user_email = '{$user_email}', ";
        $query .="user_password   = '{$hashed_password}' ";
        $query .= "WHERE username = '{$username}' ";

   
     $edit_user_query = mysqli_query($connection,$query);
     
     confirmQuery($edit_user_query);
         
          
         } 
     
}



?>
   
   
   
   
   
   
    <div id="wrapper">


       
        <!-- Navigation -->

        <?php include "includes/admin_navigation.php"; ?>


        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
<h1 class="page-header">
                           <small>Edit Your Profile Details</small>
                             <?php echo strtoupper(get_user_name()); ?>
                            
                        </h1>
                        
                           <form action="" method="post" enctype="multipart/form-data">
<!--
    <div class="form-group">
      <label for="post_category">Id</label>
       <input type="text" class="form-control" name="post_id">
    </div>
-->
  
  <div class="form-group">
      <label for="user_firstname">Firstname</label>
       <input type="text" value="<?php echo $user_firstname; ?>" class="form-control" name="user_firstname">
    </div>
     <div class="form-group">
      <label for="user_lastname">Lastname</label>
      <input type="text" value="<?php echo $user_lastname; ?>"  class="form-control" name="user_lastname">
    </div>
  
    <div class="form-group">
      <label for="username">Username</label>
       <input type="text" value="<?php echo $username; ?>"  class="form-control" name="username">
    </div>
    <div class="form-group">
      <label for="user_email">Email</label>
       <input type="email" value="<?php echo $user_email; ?>"  class="form-control" name="user_email">
    </div>
    <div class="form-group">
      <label for="user_password">Password</label>
       <input autocomplete="off" type="password"  class="form-control" name="user_password">
    </div>
    
    
    
     
    
    <div class="form-group">
       <input class="btn btn-primary"  type="submit" name="edit_user" value="Update Profile">
    </div>
    
</form>
                                 
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        
        
        
        <!-- /#page-wrapper -->
        
        
        
  <?php include "includes/admin_footer.php"; ?>