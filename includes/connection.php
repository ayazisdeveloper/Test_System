<?php
class database{
	
	public $conn;
	
	function __construct(){ 
		$this->conn = mysqli_connect('localhost','root','','teacherstudent_db');
		if(!$this->conn){
			
			echo die("Database  Connection error: " . mysqli_connect_error());
		}
	}

}
$call = new database();
?>