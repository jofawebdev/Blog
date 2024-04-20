<?php
require_once"dbh.inc.php";
// Create Table Comments
$sql = "CREATE TABLE if not exists comments (
id INT(6)  AUTO_INCREMENT PRIMARY KEY, 
username VARCHAR(30) NOT NULL,
email VARCHAR(30),
review TEXT
)";
$result=mysqli_query($conn, $sql);
if($result)
{
    // "<p>comments table created</p>";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}



if (isset($_POST['submit'])){
require_once('dbh.inc.php');
$username=$_POST['username'];
$email=$_POST['email'];
$review=$_POST['review'];	
	
$sql = "INSERT INTO comments (username, email, review ) VALUES('$username', '$email', '$review')";
	if (mysqli_query($conn, $sql)) {
      header("location:../forum.php");
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
mysqli_close($conn);
	
	      

 
?>