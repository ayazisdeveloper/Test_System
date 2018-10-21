<?php
	require('includes/autoload.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php 
if(isset($_REQUEST['page'])	){
	echo '<title>'.ucwords($_REQUEST['page']).' | '.site_title.'</title>';
	}
?>
</head>

<body>
