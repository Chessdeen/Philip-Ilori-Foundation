<?php session_start(); ?>
<?php include "db.php"; ?>
<?php include "../admin/functions.php"; ?>



<?php
//if(isset($_POST['login'])) {
//    login_user($_POST['username'], $_POST['password']);
//
//    
//}
//

?>




<?php

		checkIfUserIsLoggedInAndRedirect('/philipilori/admin');


		if(ifItIsMethod('post')){

			if(isset($_POST['username']) && isset($_POST['password'])){

				login_user($_POST['username'], $_POST['password']);


			}else {


				redirect('/philipilori/index.php');
			}

		}






?>