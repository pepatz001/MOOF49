<?php
	session_start();
	include('conn.php');
	if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $tablename = "user";
		$sql = "SELECT * FROM ".$tablename." WHERE username = '$username' and password = '$password'";
		$result = $conn->query($sql);
		//echo $result->num_rows;
		//exit();
		if($result->num_rows == 1){
			$_SESSION['moof49'] = "4D69YBDS";
			header('Location: ../main.php'); 
		} elseif ($result->num_rows == 0){
			header('Location: ../index.html'); 
		}
    } else {
    	header('../index.php'); 
    }
?>