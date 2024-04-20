<?php
require_once"dbh.inc.php";
// Create Table Registration
$sql = "CREATE TABLE if not exists registration (
regid INT(6)  AUTO_INCREMENT PRIMARY KEY, 
fname VARCHAR(100) NOT NULL,
lname VARCHAR(100) NOT NULL,
username VARCHAR(30) NOT NULL,
email VARCHAR(30),
dob DATE,
address VARCHAR(150),
post_code VARCHAR(70),
dor DATE,
password VARCHAR(255)
)";
$result=mysqli_query($conn, $sql);
if($result)
{
 "<p>comments table created</p>";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}



if(isset($_POST['submit'])){
   $fname = $_POST['fname'];
   $lname = $_POST['lname'];
   $username = $_POST['username'];
   $email = $_POST['email'];
   $dob = $_POST['dob'];
   $address = $_POST['address'];
   $post_code = $_POST['post_code'];
   $dor = date("Y-m-d");
   $password =$_POST['password'];
   $password2 = $_POST['password2'];
	
	 if (empty($username) || empty($email) || empty($password) || empty($password2)) {
        
        header("Location: ../reg.php?error=emptyfields&uid".$username,"&mail".$email);
        exit();
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username )){
         header("Location: ../reg.php?error=invalidmailuid");
        exit(); 
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
      header("Location: ../reg.php?error=invalidmail&uid=".$username);
        exit();  
    }
         
     elseif (!preg_match("/^[a-zA-Z0-9]*$/", $username )){  
      header("location: ../reg.php?error=invalidui&mail=".$email);
        exit();  
    }
     elseif ($password !== $password2) {
       header("location: ../reg.php?error=passwordCheck&uid=".$username,"&mail".$email);
        exit();   
     }       
        else{
   
   $sql= "INSERT INTO registration ( fname, lname, username, email, dob, address, post_code, dor, password) 
   VALUES ('$fname','$lname','$username','$email','$dob','$address','$post_code','$dor','$password')";
	if(mysqli_query($conn, $sql)) {
      header("location:../login.php");
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
}
}
mysqli_close($conn);

?>