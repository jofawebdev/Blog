<?php
//connection
$host = "localhost";
$username = "jofaweb2_admin";
$password = "R%6TPM6SdWS*";
$database="jofaweb2_jofawebdev";
// Create connection
$conn = mysqli_connect($host, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}else
{
	//echo "Success";
}
// Create database
$sql = "CREATE DATABASE if not exists jofaweb2_jofawebdev";
$Result=mysqli_query($conn, $sql);

if ($Result) {
    //echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

mysqli_select_db($conn,$database)

	

?>