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
                            Welcome to admin
                            <small> <?php 

                            if(isset($_SESSION['username'])) {

                            echo $_SESSION['username'];




                            }


                            // if(is_admin($_SESSION['username'])){

                            //     echo " -- is admin too";

                            // } else {

                            //     echo " ---is not";

                            // }





                            ?></small>
                        </h1>

<?php

if(isset($_GET['source'])){
    
$source = $_GET['source'];
    
    
} else {
$source = '';
    
    
}

switch($source) {
        
case 'add_post'; 
include "includes/add_admin.php";
        
break;
case 'edit_post'; 
include "includes/edit_admin.php";
        
break;
case '200'; 
echo "NICE 200";
break;
        
        
default;
    
include "includes/view_admin.php";  
break;
        
        
}

?>
                      
                      
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        
        
        
        <!-- /#page-wrapper -->
        
        
        
  <?php include "includes/admin_footer.php"; ?>