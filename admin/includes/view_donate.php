<table class="table table-bordered table-hover">
                      <thead>
                          <tr>
                              <th>Id</th>
                              <th>First Name</th>
                              <th>Last Name</th>
                              <th>Email Address</th>
                              <th>Phone Number</th>
                              <th>Message</th>
<!--
                              <th>Image</th>
                              <th>Tags</th>
                              <th>Content</th>
                              <th>Date</th>
                              <th>Edit</th>
                              <th>Delete</th>
-->
                          </tr>
                      </thead>
                      <tbody>
<?php                    
     $query = "SELECT * FROM donate_details";
    $select_posts = mysqli_query($connection,$query);

    while($row = mysqli_fetch_assoc($select_posts)) {
        $id = $row['id'];
        $firstName = $row['firstName'];  
        $lastName = $row['lastName'];
        $emailAddress = $row['emailAddress'];
        $phoneNumber = $row['phoneNumber'];
        $message = $row['message'];

        echo "<tr>";
            echo "<td>$id</td>";
            echo "<td>$firstName</td>";
            echo "<td>$lastName</td>";
            echo "<td>$emailAddress</td>";
            echo "<td>$phoneNumber</td>";

            echo "<td>$message</td>";          
    
            
        echo "</tr>";
        
    }
                          

?>

                              
                      </tbody>
                  </table>
                  
                 
                
               
              
    <?php 
if(isset($_GET['delete'])) {
    
    $the_post_id = $_GET['delete'];
    $query = "DELETE FROM donate_detals WHERE post_id = {$the_post_id} ";
    $delete_query = mysqli_query($connection, $query);
    
}

?>