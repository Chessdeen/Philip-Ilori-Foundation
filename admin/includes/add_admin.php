<?php 

if(isset($_POST['add_admin'])) {

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$user_role = $_POST['user_role'];


if(!empty($username) && !empty($email) && !empty($password) && !empty($user_role)) {


$username      = mysqli_real_escape_string($connection, $username);
$email         = mysqli_real_escape_string($connection, $email); 
$password      = mysqli_real_escape_string($connection, $password);
$user_role     = mysqli_real_escape_string($connection, $user_role);

$query = "SELECT randsalt FROM admin";
$select_randsalt_query = mysqli_query($connection, $query);
if(!$select_randsalt_query) {
die ("QUERY FAILED" . mysqli_error($connection));


}

$row = mysqli_fetch_array($select_randsalt_query);
$salt = $row['randsalt'];
$password = crypt($password, $salt);
    
    

$query = "INSERT INTO admin (username, email, password, user_role) ";
$query .= "VALUES('{$username}', '{$email}', '{$password}', '{$user_role}')";
$register_admin_query = mysqli_query($connection, $query);
if(!$register_admin_query) {

die ("QUERY FAILED" . mysqli_error($connection) . ' ' . mysqli_errno($connection));
}

$message = "Your Admin Registration is successful";
} else {
        
        $message = "Fields cannot be empty";
        
    }


}  else {
    
    
    $message = " ";
}



?>
 
 
 
 
  <form role="form" action="admin_reg.php" method="post" autocomplete="off">
<h6 class="text-center"><?php echo $message; ?></h6>
  
    <div class="form-group">
      <label for="post_category">Username</label>
       <input type="text" class="form-control" name="username" placeholder="Enter Username">
    </div>
   
    <div class="form-group">
      <label for="title">Email</label>
       <input type="text" class="form-control" name="email" placeholder="Enter Email">
    </div>
    
    <div class="form-group">
      <label for="post_author">Password</label>
       <input type="text" class="form-control" name="password" placeholder="Enter Password">
    </div>
    <div class="form-group">
      <label for="post_tags">User Role</label>
       <input type="text" class="form-control" name="user_role" placeholder="Enter User Role">
    </div>
    
    
    
     
    
    <div class="form-group">
       <input class="btn btn-primary"  type="submit" name="add_admin" value="Add Admin">
    </div>
    
</form>