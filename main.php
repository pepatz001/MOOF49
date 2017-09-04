<?php
	session_start();
	if(isset($_SESSION['moof49'])){
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<!--<script src='js/index.js'></script>-->
		<link rel="stylesheet" type="text/css" href="css/index.css" />
	</head>
	<body>
	<div class="box">
		<div class="container">
			<h1 align="center">MOOF49</h1>
			<button onclick="location.href='register.php'" type="button">กรอกข้อมูลสมาชิก</button>
			<button onclick="location.href='member.php'" type="button">ดูข้อมูลสมาชิกทั้งหมด</button>
		</div>
	</div>

	</body>
</html>
<?php
	} else {
		header('Location: index.html'); 
	}
?>