<?php


//===== DATABASE HELPER FUNCTIONS =====//
function redirect($location){
    
    header("Location:" . $location);
    exit;
}


function query($query){
    global $connection;
    $result = mysqli_query($connection, $query);
    confirmQuery($result);
    return $result;
    
}

function fetchRecords($result){ 
    return mysqli_fetch_array($result);
}


function count_records($result){
    return mysqli_num_rows($result);  
}


//===== END DATABASE HELPERS =====//

//===== isLoggedIn FUNCTION =====//



function isLoggedIn(){
    if(isset($_SESSION['user_role'])){
        return true;
    }
   return false;
}


//===== END isLoggedIn FUNCTION =====//



//===== LOGGED IN USER ID HELPERS =====//


function loggedInUserId(){
    if(isLoggedIn()){
        $result = query("SELECT * FROM users WHERE username='" . $_SESSION['username'] ."'");
        confirmQuery($result);
        $user = mysqli_fetch_array($result);
        return mysqli_num_rows($result) >= 1 ? $user['user_id'] : false;
    }
    return false;

}

//===== END LOGGED IN USER ID HELPERS =====//


//===== USER AUTHENTICATION HELPER =====//


function is_admin(){
    if(isLoggedIn()){
        $result = query("SELECT user_role FROM users WHERE user_id=".$_SESSION['user_id']."");
        $row = fetchRecords($result);
    if($row['user_role'] == 'admin'){
        return true;        
    }else {
        return false;
    }
    }
    
    return false;
}


    
//===== END AUTHENTICATION FUNCTIONS =====//






//===== GENERAL HELPERS =====//

function get_user_name(){
    
   return isset($_SESSION['username']) ? $_SESSION['username'] : null; 
    
}


//===== END GENERAL HELPERS =====//


//===== USER SPECIFIC HELPERS =====//
function is_the_logged_in_user_owner($post_id){
    $result = query("SELECT user_id FROM posts WHERE post_id={$post_id} AND user_id=".loggedInUserId()."");
    return count_records($result) >= 1 ? true : false;
}


function get_all_user_posts(){
    
return query("SELECT * FROM posts WHERE user_id=".loggedInUserId()."");
    
}


function get_all_posts_user_comments(){
    
    return query("SELECT * FROM posts INNER JOIN comments ON posts.post_id = comments.comment_post_id
    WHERE user_id=".loggedInUserId()."");
    
}

function get_all_user_categories(){
    
return query("SELECT * FROM categories WHERE user_id=".loggedInUserId()."");
    
}

function get_all_user_published_posts(){
    
return query("SELECT * FROM posts WHERE user_id=".loggedInUserId()." AND post_status='published'"); 
    
}

function get_all_user_draft_posts(){
    
return query("SELECT * FROM posts WHERE user_id=".loggedInUserId()." AND post_status='draft'"); 
    
}

function get_all_user_approved_posts_comments(){
    
  return query("SELECT * FROM posts INNER JOIN comments ON posts.post_id = comments.comment_post_id
    WHERE user_id=".loggedInUserId()." AND comment_status='approved'");
     
    
}

function get_all_user_unapproved_posts_comments(){
    
  return query("SELECT * FROM posts INNER JOIN comments ON posts.post_id = comments.comment_post_id
    WHERE user_id=".loggedInUserId()." AND comment_status='unapproved'");
}

//===== END USER SPECIFIC HELPERS =====//










//===== USERNAME EXISTENCE AUTHENTICATION FUNCTIONS =====//

function username_exists($username){
    
  global $connection;
    
    
     $query = "SELECT username FROM users WHERE username = '$username' ";
    
        $result = mysqli_query($connection, $query);
    confirmQuery($result);
    
    
    if(mysqli_num_rows($result) > 0){
        
        return true;
        
    } else {
        
        
        return false;
    }
    
}





//===== END USERNAME EXISTENCE AUTHENTICATION FUNCTIONS =====//


//===== USERS ONLINE FUNCTION =====//

function users_online() {
 
    
    if(isset($_GET['onlineusers'])) {
    
    global $connection;
        
      if(!$connection) {
          
          
          session_start();
          
          include("includes/db.php");
          
          
          
          
          
        $session = session_id();
       $time = time();
       $time_out_in_seconds = 05;
       $time_out = $time - $time_out_in_seconds;
       
       $query = "SELECT * FROM users_online WHERE session = '$session'";
       $send_query = mysqli_query($connection,$query);
       $count = mysqli_num_rows($send_query);
        
       if($count == NULL) {
           
           mysqli_query($connection, "INSERT INTO users_online(session, time) VALUES('$session','$time')");
           
           
       } else {
           
           
           mysqli_query($connection, "UPDATE users_online SET time = '$time' WHERE session = '$session'");
           
       }
       
       $users_online_query = mysqli_query($connection, "SELECT * FROM users_online WHERE time > '$time_out'");
       echo $count_user = mysqli_num_rows($users_online_query); 
          
          
          
      }  
    
        
        
    
    
    
    
    } //get request isset()
    
}

users_online();



//===== CONFIRM QUERY FUNCTION =====//
function confirmQuery($result) {
    global $connection;
       if(!$result ) {
         
         die("QUERY FAILED ." . mysqli_error($connection));
         
     }

    
    
}

//===== END CONFIRM QUERY FUNCTION =====//

//===== END USERS ONLINE FUNCTIONS =====//


function insert_categories() {
    global $connection;
     if(isset($_POST['submit'])) {

                    $cat_title = $_POST['cat_title'];

                    if($cat_title == "" || empty($cat_title)) {

                    echo "This field should not be empty";

                    } else {


                    $query = "INSERT INTO categories(cat_title) ";
                    $query .= "VALUE('{$cat_title}') ";

                    $create_category_query = mysqli_query($connection, $query);

                    if(!$create_category_query) {

                    die('QUERY FAILED' . mysqli_error($connection));

                    }

                    }

                    }

    
    
    
}



function findAllCategories()  {
global $connection;
    $query = "SELECT * FROM categories";
    $select_categories = mysqli_query($connection,$query);


    while($row = mysqli_fetch_assoc($select_categories)) {
    $cat_id = $row['cat_id'];
    $cat_title = $row['cat_title'];

    echo "<tr>";
    echo "<td>{$cat_id}</td>";
    echo "<td>{$cat_title}</td>";
    echo "<td><a href='categories.php?delete={$cat_id}'>Delete</a></td>";
    echo "<td><a href='categories.php?edit={$cat_id}'>Edit</a></td>";
    echo "</tr>";
    }

}









function deleteCategories() {
global $connection;

    if(isset($_GET['delete'])) {
    $the_cat_id = $_GET['delete'];
    $query = "DELETE FROM categories WHERE cat_id = {$the_cat_id} ";
    $delete_query = mysqli_query($connection,$query);
    header("Location: categories.php");

    }




}





    
    


//===== USER REGISTRATION FUNCTION =====//

function register_user($username, $email, $password){
    global $connection;
    
        $username = mysqli_real_escape_string($connection, $username);
        $email    = mysqli_real_escape_string($connection, $email);
        $password = mysqli_real_escape_string($connection, $password);


        $password = password_hash($password, PASSWORD_BCRYPT, array('cost' => 12));  



        $query = "INSERT INTO users (username, user_email, user_password, user_role) ";
        $query .= "VALUES('{$username}','{$email}', '{$password}', 'subscriber' )";
        $register_user_query = mysqli_query($connection, $query);
      
        
        confirmQuery($register_user_query);

    } 






//===== END USER REGISTRATION FUNCTION =====//


//===== USER LOGIN FUNCTION =====//




function login_user($username, $password) {
    global $connection;

    
$username = trim($username);
$password = trim($password);

$username = mysqli_real_escape_string($connection, $username);
$password = mysqli_real_escape_string($connection, $password);
    
$query = "SELECT * FROM users WHERE username = '{$username}' ";
$select_user_query = mysqli_query($connection, $query);
if(!$select_user_query) {
    
die("QUERY FAILED". mysqli_error($connection));

}

while ($row = mysqli_fetch_array($select_user_query)) {

$db_user_id = $row['user_id'];
$db_username = $row['username'];
$db_user_password = $row['user_password'];
$db_user_firstname = $row['user_firstname'];
$db_user_lastname = $row['user_lastname'];
$db_user_role = $row['user_role'];


    
    
 if (password_verify($password,$db_user_password)) {
$_SESSION['user_id'] = $db_user_id;
$_SESSION['username'] = $db_username;
$_SESSION['firstname'] = $db_user_firstname;
$_SESSION['lastname'] = $db_user_lastname;
$_SESSION['user_role'] = $db_user_role;
      
  
    redirect("/PhilipIlori/admin");

}  else {
    
//     return false;
     
   redirect("/PhilipIlori/index.php");
    
    }
  
 }
   
    return true;
    
}



//====== END LOGIN FUNCTION =====//


//====== checkIfUserIsLoggedInAndRedirect FUNCTION =====//

function checkIfUserIsLoggedInAndRedirect($redirectLocation=null){
    if(isLoggedIn()){
        redirect($redirectLocation);
    }
}

//====== END checkIfUserIsLoggedInAndRedirect FUNCTION =====//



//====== ESCAPE FUNCTION =====//

function escape($string) {

global $connection;

return mysqli_real_escape_string($connection, trim($string));


}

//====== END ESCAPE FUNCTION =====//


//====== ifItIsMethod FUNCTION =====//

function ifItIsMethod($method=null){

    if($_SERVER['REQUEST_METHOD'] == strtoupper($method)){

        return true;

    }

    return false;

}

//====== END ifItIsMethod FUNCTION =====//


//===== EMAIL EXISTENCE AUTHENTICATION FUNCTIONS =====//

function email_exists($email){
    
  global $connection;
    
    
     $query = "SELECT user_email FROM users WHERE user_email = '$email' ";
     $result = mysqli_query($connection, $query);
     confirmQuery($result);
    
    
    if(mysqli_num_rows($result) > 0){
        
        return true;
        
    } else {
        
        return false;
    }
    
}





//===== END EMAIL EXISTENCE AUTHENTICATION FUNCTIONS =====//




function recordCount($table){
    global $connection;
    
    

$query = "SELECT * FROM " . $table;
$select_all_post = mysqli_query($connection,$query);

$result = mysqli_num_rows($select_all_post);
    
confirmQuery($result);
    
return $result;
}





/***** Check Status Function *****/


function checkStatus($table,$column,$status){

global $connection;

$query = "SELECT * FROM $table posts WHERE $column = '$status'";
$result = mysqli_query($connection,$query); 
    
    confirmQuery($result);


return mysqli_num_rows($result);
}

/***** END Check Status Function *****/

/***** Check User Role  Function *****/
function checkUserRole($table, $column, $role){
    global $connection;
    $query = "SELECT * FROM $table WHERE $column = '$role'";
     $select_all_subscribers = mysqli_query($connection,$query);
    
    return mysqli_num_rows($select_all_subscribers);
    
}

/***** END Check User Role  Function *****/
















//*********************************//



    
    function createRecords()  {
    global $connection;
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $emailAddress = $_POST['emailAddress'];
    $message = $_POST['message'];
    $conection = mysqli_connect('localhost', 'root', '', 'philip_ilori');
//    if($connection) {  
//        echo "We are connected";
//    } else{       
//       die("Database connection failed");     
//    }
    
    
    $query = "INSERT INTO client_contact(firstName,lastName,emailAddress,message) ";
    $query .= "VALUES ('$firstName', '$lastName', '$emailAddress', '$message')";
        
        
        $result = mysqli_query($connection, $query);
    
    
    if(!$result) {
        
        die('QUERY FAILED' . mysqli_error());
    }
    
    
//    if($firstName && $lastName && $emailAddress && $message) {
//        
//        
//    echo "Hello" . $firstName;
//    echo "Your bank name is" . $lastName;
//    echo "Routing number" . $emailAddress;
//    echo $message;
//
//        
//    } else {
//        echo "this field cannot be blank";
//    }
    
    
    
   
}
    
    




    function donateRecords()  {
    global $connection;
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $phoneNumber = $_POST['phoneNumber'];
    $emailAddress = $_POST['emailAddress'];
    $message = $_POST['message'];
    $conection = mysqli_connect('localhost', 'root', '', 'philip_ilori');
 
    $query = "INSERT INTO donate_details(firstName,lastName,phoneNumber,emailAddress,message) ";
    $query .= "VALUES ('$firstName', '$lastName', '$phoneNumber', '$emailAddress', '$message')";
        
        
        $result = mysqli_query($connection, $query);
    
    
    if(!$result) {
        
        die('QUERY FAILED' . mysqli_error());
    }
   
   
}


    function volunteer()  {
    global $connection;
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $emailAddress = $_POST['emailAddress'];
    $phoneNumber = $_POST['phoneNumber'];
    $message = $_POST['message'];
    $conection = mysqli_connect('localhost', 'root', '', 'philip_ilori');
        
    $query = "INSERT INTO volunteer(firstName,lastName,emailAddress,phoneNumber,message) ";
    $query .= "VALUES ('$firstName', '$lastName', '$emailAddress', '$phoneNumber', '$message')";
        
        
        $result = mysqli_query($connection, $query);
    
    
    if(!$result) {
        
        die('QUERY FAILED' . mysqli_error());
    }
   
   
}








 function title()  {
    global $connection;
$page = isset($_GET['menu'])?$_GET['menu']:'about';
 
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
 }




























?>