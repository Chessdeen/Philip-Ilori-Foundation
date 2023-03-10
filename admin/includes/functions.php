<?php
//===== GENERAL HELPERS =====//

function get_user_name(){
    
   return isset($_SESSION['username']) ? $_SESSION['username'] : null; 
    
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
//===== END GENERAL HELPERS =====//



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
//===== isLoggedIn FUNCTION =====//


function isLoggedIn(){
    if(isset($_SESSION['user_role'])){
        return true;
        
    }
    return false;
    
}




//===== END isLoggedIn FUNCTION =====//






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
       $send_query = mysqli_query($connection, $query);
       $count = mysqli_num_rows($send_query);
        
       if($count == NULL) {
           
           mysqli_query($connection, "INSERT INTO users_online(session, time) VALUES('$session','$time')");
           
           
       } else {
           
           
           mysqli_query($connection, "UPDATE users_online SET time '$time' WHERE session = '$session'");
           
       }
       
       $users_online_query = mysqli_query($connection, "SELECT * FROM users_online WHERE time > '$time_out'");
       echo $count_user = mysqli_num_rows($users_online_query); 
          
          
          
      }  
    
        
        
    
    
    
    
    } //get request isset()
    
}

//===== USERS ONLINE FUNCTION =====//




function confirmQuery($result) {
    global $connection;
       if(!$result ) {
         
         die("QUERY FAILED ." . mysqli_error($connection));
         
     }

    
    
}


   

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






/***** Delete Categories Function *****/


function deleteCategories() {
global $connection;

    if(isset($_GET['delete'])) {
    $the_cat_id = $_GET['delete'];
    $query = "DELETE FROM categories WHERE cat_id = {$the_cat_id} ";
    $delete_query = mysqli_query($connection,$query);
    header("Location: categories.php");

    }




}






/***** Record Count Function *****/



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



function checkUserRole($table, $column, $role){
    global $connection;
    $query = "SELECT * FROM $table WHERE $column = '$role'";
     $select_all_subscribers = mysqli_query($connection,$query);
    
    return mysqli_num_rows($select_all_subscribers);
    
}







//
//function is_admin($username = ''){
//    global $connection;
//        
//        $query = "SELECT user_role FROM users WHERE username = '$username' ";
//    
//        $result = mysqli_query($connection, $query);
//    confirmQuery($result);
//    $row = mysqli_fetch_array($result);
//    
//    if($row['user_role'] == 'admin'){
//        return true;
//        
//                
//    }else {
//        return false;
//        
//    }
//    
//    
//}

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



?>


