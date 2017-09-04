<?php
	session_start();
	if(isset($_SESSION['moof49'])){
		$title = "";
		if($_SESSION['title'] == "Mr."){
			$title = "นาย";
		} elseif ($_SESSION['title'] == "Ms."){
			$title = "นางสาว";
		} elseif ($_SESSION['title'] == "Mrs."){
			$title = "นาง";
		}
		
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<!--<script src='js/index.js'></script>-->
		<link rel="stylesheet" type="text/css" href="css/index.css" />
	</head>
	<body>
	<div class="register">
		<div class="container">
			<h1 align="center">สมาชิก MOOF49</h1>
			<p>คำนำหน้า : <?= $title ?></p>
			<p>ชื่อ : <?= $_SESSION['surname'] ?></p>
			<p>นามสกุล : <?= $_SESSION['lastname'] ?></p>
			<p>อายุ : <?= $_SESSION['age'] ?></p>
			<p>วันเกิด : <?= $_SESSION['birthday'] ?></p>
			<p>E-mail : <?= $_SESSION['email'] ?></p>
			<p>เบอร์โทร : <?= $_SESSION['phone'] ?></p>
			<p>ที่อยู่ : <?= $_SESSION['address'] ?></p>
			<button onclick="location.href='edit.php'" type="button">แก้ไข</button>
			<button onclick="location.href='main.php'" type="button">ยืนยัน</button>
		</div>
	</div>
	</body>
</html>
<?php
	} else {
		header('Location: index.html'); 
	}
?>