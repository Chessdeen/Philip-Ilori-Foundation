<div class="well">
                    <h4>Support Our Course</h4>
                    <p>Thank you for your interest in the work of the Foundation. If you wish to support the work of the Philip Ilori Foundation, you can donate to our cause or signup as a user to follow our showcases.</p>
                    <p><a href="donate.php" class="btn btn-primary py-3 px-4 rounded-0">Donate Now</a></p>
                </div>
                <hr>
            <div class="well">
                    <h4>Total PIF Volunteers</h4>
                    
                        <?php 

                        $query = "SELECT * FROM posts";
                        $select_all_post = mysqli_query($connection,$query);
                        $post_count = mysqli_num_rows($select_all_post);


                        echo "<div class='huge'>{$post_count}</div>";           

                        ?>
                    <p><a href="register.php" class="btn btn-primary py-3 px-4 rounded-0">Register Now</a></p>
                </div>