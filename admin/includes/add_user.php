<?php
 
 if(isset($_POST['create_user'])) {

   $user_firstname = $_POST['user_firstname'];
    $user_lastname = $_POST['user_lastname'];
    $user_role = $_POST['user_role'];

    $username = $_POST['username'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];

    
     
//     if(!empty($user_firstname) && !empty($user_lastname) && !empty($user_role) && !empty($username) && !empty($user_email) && !empty($user_password)) {
//         
//$username = mysqli_real_escape_string($connection, $username);
//$user_email    = mysqli_real_escape_string($connection, $user_email);
//$user_password = mysqli_real_escape_string($connection, $user_password);
//    
//  
//
//$query = "SELECT randSalt FROM users";
//$select_randsalt_query = mysqli_query($connection, $query);
//if(!$select_randsalt_query) {
//die("Query Failed" . mysqli_error($connection));
//}
//
//$row = mysqli_fetch_array($select_randsalt_query); 
//$salt = $row['randSalt'];
//$user_password = crypt($user_password, $salt);
     
     
     
     
     
//  }   
     
     $user_password = password_hash($user_password, PASSWORD_BCRYPT, array('cost' => 10));  
    
     
    $query = "INSERT INTO users(user_firstname, user_lastname, user_role, username, user_email, user_password) ";
     
     $query .= "VALUES('{$user_firstname}', '{$user_lastname}', '{$user_role}', '{$username}', '{$user_email}', '{$user_password}') ";
    
     
     $create_user_query = mysqli_query($connection, $query);
     
     
  confirmQuery($create_user_query);
     
     
     echo "User Created: " . " " . "<a href='users.php'>View Users</a> ";
     
     

 }
  
?>
  
  <form action="" method="post" enctype="multipart/form-data">
  
  <div class="form-group">
      <label for="user_firstname">Firstname</label>
       <input type="text" class="form-control" name="user_firstname">
    </div>
     <div class="form-group">
      <label for="user_lastname">Lastname</label>
      <input type="text" class="form-control" name="user_lastname">
    </div>
  
  
  
<div class="form-group">
      <select name="user_role" id="">
       <option value="subscriber">Select Options</option>
        <option value="admin">Admin</option>
        <option value="subscriber">Subscriber</option>
    
      </select>
 
    </div> 
   
   
    
    
    
    <div class="form-group">
      <label for="username">Username</label>
       <input type="text" class="form-control" name="username">
    </div>
    <div class="form-group">
      <label for="user_email">Email</label>
       <input type="email" class="form-control" name="user_email">
    </div>
    <div class="form-group">
      <label for="user_password">Password</label>
       <input type="password" class="form-control" name="user_password">
    </div>
    
    
    
     
    
    <div class="form-group">
       <input class="btn btn-primary"  type="submit" name="create_user" value="Add User">
    </div>
    
</form>