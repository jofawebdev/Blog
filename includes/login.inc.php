<?php
require_once'dbh.inc.php';
	session_start();

	if(isset($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		
		//set login attempt if not set
		if(!isset($_SESSION['attempt'])){
			$_SESSION['attempt'] = 0;
			$_SESSION['username'] =$username;
		}

		//get the user with the username
		 $sql= "SELECT * FROM registration WHERE username='".$username."' and password='".$password."'";
         $query=mysqli_query($conn,$sql);
         $result=mysqli_num_rows($query);

if($result>0){
					header("location:../index.php");
					exit();
				}else{
				
			//verify password
			if(password_verify($_POST['password'], $row['password'])){
				//action after a successful login
				//for now just message a successful login
				$_SESSION['success'] = 'Login successful';
				//unset our attempt
				unset($_SESSION['attempt']);
			}
			else{
				$_SESSION['error'] = 'Password incorrect';
				//this is where we put our 3 attempt limit
				$_SESSION['attempt'] += 1;
                
				//set the time to allow login if third attempt is reach
                
				if($_SESSION['attempt'] == 3){
					$_SESSION['attempt_again'] = time() + (1*60);
                }
				
			}
		}
	
	
	}
		
		 

		
	

	

	header('location: ../login.php');


?>