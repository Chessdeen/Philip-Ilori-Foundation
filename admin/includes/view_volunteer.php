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
     $query = "SELECT * FROM volunteer";
    $select_posts = mysqli_query($connection,$query);

    while($row = mysqli_fetch_assoc($select_posts)) {
        $id = $row['id'];
        $firstName = $row['firstName'];  
        $lastName = $row['lastName'];
        $emailAddress = $row['emailAddress'];
        $phoneNumber = $row['phoneNumber'];
        $message = $row['message'];
//        $post_tags = $row['post_tags'];
//        $post_content = $row['post_content'];
//        $post_date = $row['post_date'];
//        $post_comment_count = $row['post_comment_count'];
        
        echo "<tr>";
            echo "<td>$id</td>";
            echo "<td>$firstName</td>";
            echo "<td>$lastName</td>";
            echo "<td>$emailAddress</td>";
            echo "<td>$phoneNumber</td>";
//            echo "<td><img width='100'  src='../images/$post_image' alt='image'></td>";
            echo "<td>$message</td>";
//            echo "<td>$post_content</td>";
//            echo "<td>$post_date</td>";
//            
            
       
            
        echo "</tr>";
        
    }
                          

?>

                              
                      </tbody>
                  </table>
                  
                 
                
               
              
    <?php 
if(isset($_GET['delete'])) {
    
    $the_post_id = $_GET['delete'];
    $query = "DELETE FROM volunteer WHERE post_id = {$the_post_id} ";
    $delete_query = mysqli_query($connection, $query);
    
}

?>