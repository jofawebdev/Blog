<?php
require_once"dbh.inc.php";
// Create Table Contact
$sql = "CREATE TABLE if not exists contact (
id INT(6)  AUTO_INCREMENT PRIMARY KEY, 
name VARCHAR(30) NOT NULL,
email VARCHAR(30),
message TEXT
)";
$result=mysqli_query($conn, $sql);
if($result)
{
    // "<p>contact table created</p>";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}



if (isset($_POST['submit'])){
require_once('dbh.inc.php');
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];	
	
$sql = "INSERT INTO contact (name, email, message ) VALUES('$name', '$email', '$message')";
	if (mysqli_query($conn, $sql)) {
      header("location:../Contact.php");
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
mysqli_close($conn);
	
	      

 
?>