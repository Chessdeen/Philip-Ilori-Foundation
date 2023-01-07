
<?php 



function redirect($location){
    
    return header("Location:" . $location);
    
    
}

//===== isLoggedIn FUNCTION =====//



function isLoggedIn(){
    if(isset($_SESSION['user_role'])){
        return true;
    }
   return false;
}


//===== END isLoggedIn FUNCTION =====//
    
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
    
    



?>

<?php
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

?>

<?php 
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




function confirmQuery($result) {
    global $connection;
       if(!$result ) {
         
         die("QUERY FAILED ." . mysqli_error($connection));
         
     }

    
    
}

?>

<!--

<?php

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









function is_admin($username = ''){
    global $connection;
        
        $query = "SELECT user_role FROM users WHERE username = '$username' ";
    
        $result = mysqli_query($connection, $query);
    confirmQuery($result);
    $row = mysqli_fetch_array($result);
    
    if($row['user_role'] == 'admin'){
        return true;
        
                
    }else {
        return false;
        
    }
    
    
}


//====== ifItIsMethod FUNCTION =====//

function ifItIsMethod($method=null){

    if($_SERVER['REQUEST_METHOD'] == strtoupper($method)){

        return true;

    }

    return false;

}

//====== END ifItIsMethod FUNCTION =====//

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


//===== USER REGISTRATION FUNCTION =====//

function register_user($username, $email, $password){
    global $connection;




    if(username_exists($username)){

    $message = "user exists";  


    }


    if(!empty($username) && !empty($email) && !empty($password)) {



        $username = mysqli_real_escape_string($connection, $username);
        $email    = mysqli_real_escape_string($connection, $email);
        $password = mysqli_real_escape_string($connection, $password);


        $password = password_hash($password, PASSWORD_BCRYPT, array('cost' => 12));  



        $query = "INSERT INTO users (username, user_email, user_password, user_role) ";
        $query .= "VALUES('{$username}','{$email}', '{$password}', 'subscriber' )";
        $register_user_query = mysqli_query($connection, $query);
      
        
        confirmQuery($register_user_query);

    } 


}



//===== END USER REGISTRATION FUNCTION =====//






?>-->
