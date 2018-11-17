<?php
class database{
	public $conn;
		function __construct(){ 
			$this->conn = mysqli_connect('localhost','root','','teacherstudent_db');
			if(!$this->conn){
				
				echo die("Database  Connection error: " . mysqli_connect_error());
			}
		}


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

	function select(){
		$select_query = mysqli_query($this->conn,"SELECT * FROM users");
		$result = mysqli_fetch_array($select_query);
		while($result = mysqli_fetch_array){
			echo $result['user_email'].$result['user_password'];
		}
	}

}

$call = new database();
$call->insert();
$call->select();

?>