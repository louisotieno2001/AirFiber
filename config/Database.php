<?php
class Database {

    private $host = 'localhost';
    private $user = 'root';
    private $password = "";
    private $database = "airfiber_db"; 
    private $conn = null;
    
    public function __construct(){
        $this->conn = new mysqli($this->host, $this->user, $this->password);

        if(mysqli_connect_error()){
            die("Unable to connect to database");
        }

        // Call the select_db method to select the database
        $this->select_db();
    }

    public function getConnection() {        
        return $this->conn;
    }

    public function select_db() {
        if ($this->conn) {
            if (!$this->conn->select_db($this->database)) {
                // Database does not exist, so create one
                $this->create_db();
            }
        }
    }

    public function create_db() {
        if ($this->conn) {

            // sql to create database
            if (!mysqli_query($this->conn, "CREATE DATABASE ".$this->database." ;")) {
                die("Unable to create database ".$this->database);
            }
            $this->conn->select_db($this->database);

            // Table for emails list
            $emails_list = "CREATE TABLE IF NOT EXISTS `emails_list` (
                `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                `name` varchar(255) NOT NULL,
                `email` varchar(255) UNIQUE,
                `phone` int(11) NOT NULL,
                `message` varchar(255) NOT NULL
            ); ";
            mysqli_query($this->conn, $emails_list);

            // Table for connection requests
            $connection_requests = "CREATE TABLE IF NOT EXISTS `connection_requests` (
                `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                `name` varchar(30) NOT NULL,
                `email` varchar(30) NOT NULL,
                `phone` int(11) NOT NULL,
                `package` varchar(200) NOT NULL,
                `town` varchar(30) NOT NULL,
                `message` varchar(255) NOT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
            ";
            mysqli_query($this->conn, $connection_requests);

            $sql_insert = "INSERT INTO `connection_requests` (`id`, `name`, `email`, `phone`, `package`, `town`, `message`) VALUES
            (1, 'Mark Cooper', 'mcooper@mail.com', 0723897653, 'Home', 'Nairobi', 'I need a connection as soon as possible');";
            mysqli_query($this->conn, $sql_insert);

            $sql_insert = "INSERT INTO `emails_list` (`id`, `name`, `email`, `phone`, `message`) VALUES
            (1, 'Marc Cooper', 'mcooper@gmail.com', 0724798426, 'Hello, can I get a connection this weekend');";
            mysqli_query($this->conn, $sql_insert);

        }
    }

}
$db = new Database();
?>
