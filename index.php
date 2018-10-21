 <?php
include('header.php');
?>



<?php

echo 'ahtesham shah';
	if(isset($_REQUEST['page'])){
			if(file_exists('public/'.$_REQUEST['page'].'.php')){
				include('public/'.$_REQUEST['page'].'.php');
	} 
	else{
		include('public/404.php');
			}
	}
  	else{header('location:?page=register');
	
	}


?>

<?php
include('footer.php');
?>
