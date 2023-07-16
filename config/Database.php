<?php
session_start();
class Database{
	
	private $host  = 'localhost';
    private $user  = 'root';
    private $password   = "";
    private $database  = "airfiber_db"; 
	private $conn = null;
    
	public function __construct(){
		$this->conn = new mysqli($this->host, $this->user, $this->password);

		if(mysqli_connect_error()){
			die("Unable to connect to database");
		}

		if(!$this->conn->select_db($this->database)){
			$this->create_db();
		}
	}
    public function getConnection(){		
		return $this->conn;
    }

	public function select_db(){
		if($this->conn){
			if(!$this->conn->select_db($this->database)){
				// die("Database does not exist");

				// create database
				$this->create_db();
			
			}

		}
	}
	public function create_db(){
		if($this->conn){

			mysqli_report(MYSQLI_REPORT_ALL);
			$this->conn->begin_transaction();

			try {
					
				// sql to create database
				if(!mysqli_query($this->conn, "CREATE DATABASE ".$this->database." ;")){
					die("Unable to create database ".$this->database);
				}
				$this->conn->select_db($this->database);

				$emails_list = "CREATE TABLE IF NOT EXISTS `emails_list` (
					`id` int UNSIGNED AUTO_INCREMENT PRIMARY KEY,
					`name` varchar(255) NOT NULL,
					`email` varchar(255) UNIQUE,
					`phone` varchar(50) NOT NULL,
					`messages` varchar(50) NOT NULL
				); ";
				mysqli_query($this->conn, $emails_list);

				$conn_requests = "CREATE TABLE IF NOT EXISTS `connection_requests` (
					`id` int unsigned AUTO_INCREMENT primary key,
					`name` varchar(30) NOT NULL,
					`email` varchar(50) UNIQUE,
					`phone` int(11) NOT NULL,
                    `package` varchar(50) NOT NULL,
					`town` varchar(50) NOT NULL,
                    `message` varchar(255) NOT NULL
				);
				";
				mysqli_query($this->conn, $conn_requests);
					
				$this->conn->commit();
			} catch (\Throwable $th) {
				$this->conn->rollback();
				echo $th;
			}
			mysqli_report(MYSQLI_REPORT_OFF);
			
		}
	}
	
}
	$db = new Database();
	
?>