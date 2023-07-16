<?php 
//Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   //Include database
   require_once 'config/Database.php';
   //Prepare the sql statements to insert data into a table
   $stmt = $conn->prepare("INSERT INTO emails_list (your-name, your-email, your-phone, your-message) VALUES (?, ?, ?, ?)");
   
   //Retrieve form data
   $name    = $_POST['your-name'];
   $email   = $_POST['your-email'];
   $phone   = $_POST['your-phone'];
   $message = $_POST['your-message'];
   
   $stmt->bind_param("ssis", $name, $email, $phone, $message);
   
   //Close statements and connections
   $stmt->close();
   $conn->close();

   //Redirection to acknowledgement page
   header("Location: index.php");
   exit();
}

?>
<h1 style=""> Message submitted successfuly</h1>