<?php
class db{
	function insert(){
		
		if(isset($_REQUEST['register'])){
			$email = $_REQUEST['user_email'];
			$password = $_REQUEST['user_password'];
			$query = mysqli_query($this->Conn,"INSERT INTO users(user_email,user_password) VALUES ('$email','$password')");
			
			
			if($query){
				echo '<h3>'.'database inserted'.'</h4>';
			}
		}
		
	}
}
$call = new db();
$call->insert();
?>


<h1>Register</h1>
<form action="" method="post">
	<fieldset>
    	<input type="text" name="user_email" placeholder="Email"/><br />
        <input type="password" name="user_password" placeholder="Password"/><br />
        <input type="submit" name="register" value="Register" />
    </fieldset>
</form>