<?php

        if(ifItIsMethod('post')){


                if(isset($_POST['login'])){


                    if(isset($_POST['username']) && isset($_POST['password'])){

                        login_user($_POST['username'], $_POST['password']);


                    }else {


                        redirect('index');
                    }


                }

        }

?>

             
                          
                                       
                                                                 
<!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">
               
               
                <!-- Blog Search Well -->
<!--
                <div class="well">
                    <h4>Search</h4>
                    <form action="search.php" method="post">
                    <div class="input-group">
                        <input name="search" type="text" class="form-control">
                        <span class="input-group-btn">
                            <button name="submit" class="btn btn-primary" type="submit">
                                <span class="glyphicon glyphicon-search">Search</span>
                        </button>
                        </span>
                    </div>
                    </form>  search
                     /.input-group 
                </div>
-->
                <hr>

<!-- Login -->
<div class="well">
   
   <?php if(isset($_SESSION['user_role'])): ?>
   
   
   
       <h4>Logged in as <?php echo $_SESSION['username'] ?></h4>
       
       <a href="logout.php" class="btn btn-primary">Logout</a>
   
   
   <?php else: ?>
   
         <h4>Login</h4>
        <form action="includes/login.php" method="post">
            <div class="form-group">
                <input name="username" type="text" class="form-control" placeholder="Enter Username">
            </div>   
            
            <div class="input-group">
                <input name="password" type="password" class="form-control" placeholder="Enter Password">
            <span class="input-group-btn">
                <button class="btn btn-primary" name="login" type="submit">Login</button>
            </span>


            </div>
        </form>  <!--login-->
    <!-- /.input-group -->    
   
   
   <?php endif; ?>
    
    
   
   
   
</div>  
                
                
          <hr>      


                <!-- Blog Categories Well -->
                <div class="well">
                   
                   
                   <?php
                    $query = "SELECT * FROM categories";
                    $select_categories_sidebar = mysqli_query($connection,$query);
                    ?>
                    
                    <h4>Foundation Categories</h4>
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="list-unstyled">
            
                               
                <?php
                while($row = mysqli_fetch_assoc($select_categories_sidebar)) {

                $cat_title = $row['cat_title'];
                $cat_id = $row['cat_id'];

                echo "<li><a href='category.php?category=$cat_id'>{$cat_title}</a></li>";

                }


                ?>   
                            
                            </ul>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
               <hr>
               
                <!-- Side Widget Well -->
                <?php include "widget.php"; ?>

            </div>