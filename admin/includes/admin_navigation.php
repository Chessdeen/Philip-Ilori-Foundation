<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img width="50px" src="../images/logo.png"></a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
<!--              <li><a href="">Users Online: <?php echo users_online(); ?></a></li>-->
             
             
              <li><a href="">Users Online: <span class="usersonline"></span></a></li>
               
               <li><a href="../index.php">HOME SITE</a></li>
     
              
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i><small> 
                            <?php 

                            if(isset($_SESSION['username'])) {

                            echo $_SESSION['username'];

                            }

                            ?>
                            </small><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="profile.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="../logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            
            
            
            
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> PIF Data </a>
                    </li>
                    
                    
                    <?php if(is_admin()): ?>
                    
                    <li>
                        <a href="dashboard.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard </a>
                    </li>
                    
                    <?php endif ?>
                    
                    <li>
                       
                        <a href="javascript:;" data-toggle="collapse" data-target="#posts_dropdown"><i class="fa fa-fw fa-arrows-v"></i> Posts <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="posts_dropdown" class="collapse">
                          
                           <?php if(is_admin()): ?>
                            <li>
                                <a href="posts.php"><i class="fa fa-paste"></i> View All Posts</a>
                            </li>
                            <?php endif ?>
                            
                            <li>
                                <a href="posts.php?source=add_post"><i class="fa fa-edit"></i> Add Posts</a>
                            </li>
                        </ul>
                    </li>
                    
                    <?php if(is_admin()): ?>
                     <li>
                        <a href="comments.php"><i class="fa fa-fw fa-comments"></i> Comments</a>
                    </li>
                    <?php endif ?>
                    
                    
                    <?php if(is_admin()): ?>
                    <li>
                        <a href="categories.php"><i class="fa fa-fw fa-wrench"></i> Categories</a>
                    </li>
                    <?php endif ?>
                    
                    
                    <?php if(is_admin()): ?>
                     <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#comments"><i class="fa fa-fw fa-comments"></i> Feedbacks <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="comments" class="collapse">
                            <li class="">
                        <a href="voluteer_details.php"><i class="fa fa-fw fa-globe"></i> Volunteer Details </a>
                    </li>
                            <li class="">
                        <a href="donation_details.php"><i class="fa fa-fw fa-exchange"></i> Donation Details </a>
                    </li>
                        <li class="">
                        <a href="contact_details.php"><i class="fa fa-fw fa-phone"></i> Contact Details</a>
                    </li>
                        </ul>
                    </li>
                    <?php endif ?>
<!--
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#admin"><i class="fa fa-fw fa-user"></i> Admin Area<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="admin" class="collapse">
                            <li class="">
                        <a href="admin_details.php"><i class="fa fa-user"></i> Aministrators </a>
                    </li>
                            <li class="">
                        <a href="admin_reg.php"><i class="fa fa-fw fa-certificate"></i> Admin Registration </a>
                    </li>
                        
                        </ul>
                    </li>
-->
                   <?php if(is_admin()): ?>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#user"><i class="fa fa-fw fa-user"></i> User Area<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="user" class="collapse">
                            <li class="">
                        <a href="users.php"><i class="fa fa-user"></i> View All Users </a>
                    </li>
                            <li class="">
                        <a href="users.php?source=add_user"><i class="fa fa-fw fa-certificate"></i> Add User  </a>
                    </li>
                        
                        </ul>
                    </li>
                    <?php endif ?>
                     <li>
                        <a href="profile.php"><i class="fa fa-fw fa-dashboard"></i> Profile</a>
                    </li>
                    <li class="">
                        <?php include "includes/languages.php"; ?>
                    </li>
                    
                    
                    
                    
                </ul>
            </div>
            
            
            
            
            
            
            <!-- /.navbar-collapse -->
        </nav>