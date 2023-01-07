<?php include "includes/admin_header.php"; ?>
 

    <div id="wrapper">  
       
        <!-- Navigation -->

        <?php include "includes/admin_navigation.php"; ?>
        
  

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12"> 
                        <h1 class="page-header">
                           <small>Role: Admin</small>
                            Welcome <?php echo strtoupper(get_user_name()); ?>
                            
                        </h1>
                        
                         
                    </div>
                </div>
                <!-- /.row -->
                
                       
                <!-- /.row -->
    
                
<div class="row">
    <div class="col-lg-4 col-md-8">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3"><img src="../images/users.svg" alt="Training and Support icon" class="grid-12" style="max-height: 54px;">
<!--                        <i class="fa fa-user fa-5x"></i>-->
                    </div>
                    <div class="col-xs-9 text-right">
                        <?php 

                        $query = "SELECT * FROM users";
                        $select_all_donations = mysqli_query($connection,$query);
                        $volunteer_count = mysqli_num_rows($select_all_donations);


                        echo "<div class='huge'>{$volunteer_count}</div>";           

                        ?>
                        <div>Total PIF Users</div>
                    </div>
                </div>
            </div>
            <a href="users.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
<!--
    <div class="col-lg-4 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-comments fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                      <?php //echo "<div class='huge'>".$comment_count."</div>" ?> 
                        <div>Comments</div>
                    </div>
                </div>
            </div>
            <a href="comments.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
-->
     
<!--
     
      <div class="col-lg-4 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-list fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                       <?php 
                    //echo "<div class='huge'>{$category_count}</div>" 
                        ?>
                         <div>Categories</div>
                    </div>
                </div>
            </div>
            <a href="categories.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
-->



    
</div>
<div class="row">

</div>
<hr>
                <!-- /.row -->
                
                
                
 <!-- /.row -->
    <div class="row">
          <div class="col-lg-4 col-md-8">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <img src="../images/personalpage.svg" alt="Training and Support icon" class="grid-12" style="max-height: 54px;">
<!--                         <i class="fa fa-user fa-5x"></i>-->
                    </div>
                    <div class="col-xs-9 text-right">
                        <h3 class="text-center">WHO IT'S FOR</h3>
                        <div></div>
                    </div>
                </div>
            </div>
            
                <div class="panel-footer">
                   <h4 class="text-center">Professional, Personalized User Pages</h4>
                    <span class=""><p>The PIF Accessibility app is useful for everyone who can volunteer and willing to tell your story in a clear and compelling way</p></span>
                    <span class=""><i class=""></i></span>
                    <div class="clearfix"></div>
                </div>
        </div>
    </div>
        <div class="col-lg-4 col-md-8">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                       <img src="../images/pifsupport.svg" alt="Training and Support icon" class="grid-12" style="max-height: 54px;">
<!--                        <i class="fa fa-user fa-5x"></i>-->
                    </div>
                    <div class="col-xs-9 text-right">
                        <h3 class="text-center">HOW IT WORKS</h3>
                        <div></div>
                    </div>
                </div>
            </div>
            
                <div class="panel-footer">
                   <h4 class="text-center">Training and Support For Your Level</h4>
                    <span class=""><p>Let us help you gain visibility and new donors through our credibility, throughout the Nation and beyond, we would reach any extent to make our outreaches a success!</p></span>
                    <span class=""><i class=""></i></span>
                    <div class="clearfix"></div>
                </div>
        </div>
    </div>
        <div class="col-lg-4 col-md-8">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                       <img src="../images/commitment.svg" alt="Training and Support icon" class="grid-12" style="max-height: 54px;">
<!--                        <i class="fa fa-user fa-5x"></i>-->
                    </div>
                    <div class="col-xs-9 text-right">
                        <h3 class="text-center">Commitment to Impact</h3>
                        <div></div>
                    </div>
                </div>
            </div>
            
                <div class="panel-footer">
                   <h4 class="text-center">Help When You Need It</h4>
                    <span class=""><p>Learn and grow with the support of your peers and the Philip Ilori team. Our teams are ready to support you whenever, wherever!</p></span>
                    <span class=""><i class=""></i></span>
                    <div class="clearfix"></div>
                </div>
        </div>
    </div>
                </div>
                


        
        
        
        <!-- /#page-wrapper -->
        
        
        
  <?php include "includes/admin_footer.php"; ?>