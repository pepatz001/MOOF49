<?php
	session_start();
	include('conn.php');
	if(isset($_POST['submit'])){
        $title = $_POST['title'];
        $surname = $_POST['surname'];
        $lastname = $_POST['lastname'];
        $age = $_POST['age'];
        $birthday = $_POST['birthday'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];

        $_SESSION['title'] = $_POST['title'];
        $_SESSION['surname'] = $_POST['surname'];
        $_SESSION['lastname'] = $_POST['lastname'];
        $_SESSION['age'] = $_POST['age'];
        $_SESSION['birthday'] = $_POST['birthday'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['phone'] = $_POST['phone'];
        $_SESSION['address'] = $_POST['address'];

        $age = intval($age);

        $table_name = "member";
        $sql = "INSERT INTO ".$table_name." Set title = '$title' , surname = '$surname' , lastname = '$lastname' , phone = '$phone' , age = $age , birthday = $birthday , email = '$email' , address = '$address'";
        if ($conn->query($sql) === TRUE) {
		    header('Location: ../showMember.php');
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
        //header('Location: ../showMember.php'); 
    } else {
    	header('Location: ../index.php'); 
    }
?>