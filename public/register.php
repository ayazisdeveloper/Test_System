<?php
/* Need autoload file which will give us connection and constant 
$Includes_Path = $_SERVER['DOCUMENT_ROOT'] . '/Test_System/includes';
require($Includes_Path . '/autoload.php');
*/
class register extends database{
	function insert(){
		
		if(isset($_REQUEST['register'])){
			$email = $_REQUEST['user_email'];
			$password = $_REQUEST['user_password'];
			$query = mysqli_query($this->conn,"INSERT INTO users(user_email,user_password) VALUES ('$email','$password')");
			
			
			if($query){
				echo '<h3>'.'data has been inserted'.'</h4>';
			}
		}
		
	}

	function delete(){

		if(isset($_REQUEST['id'])){
			$id = $_REQUEST['id'];

			mysqli_query($this->conn,"DELETE FROM users where id='$id'");
		}
	}

	function fetchRec(){
		
		$select_query = mysqli_query($this->conn,"SELECT * FROM users");
		$data_array = array();
		while($row = mysqli_fetch_array($select_query)){
			$data_array[] = $row;
		}
		return $data_array;
	}
}
$call = new register();
$call->insert();
$call->delete();
$call->fetchRec();

?>
<h1>Register</h1>
<form action="" method="post">
	<fieldset>
    	<input type="text" name="user_email" placeholder="Email"/><br />
        <input type="password" name="user_password" placeholder="Password"/><br />
        <input type="submit" name="register" value="Register" />
    </fieldset>

    <br />

	<table border="1">
		<thead>
			<tr>
				<th>ID</th>
				<th>E-Mail</th>
				<th>Password</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php
				foreach($dataFromFetchRecord as $singleRow){
			?>	
				<tr>
					<td><?php echo $singleRow['id']; ?></td>
					<td><?php echo $singleRow['email']; ?></td>
					<td><?php echo $singleRow['password']; ?></td>
					<td><a href="index.php?id=<?php echo $singleRow['id']; ?>">Delete</a></td>
				</tr>
			<?php 
				}
			?>
		</tbody>
	</table>
</form>