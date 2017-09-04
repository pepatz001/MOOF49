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
	<div class="register">
		<form action="php/register.php" method="post">
			<div class="container">
				<h1 align="center">สมาชิก MOOF49</h1>
				<p>คำนำหน้า : 
					<select name="title" id="title">
						<option value="Mr.">นาย</option>
						<option value="Mrs.">นาง</option>
						<option value="Ms.">นางสาว</option>
					</select>
				</p>
				<p>ชื่อ : <input type="text" name="surname"></p>
				<p>นามสกุล : <input type="text" name="lastname"></p>
				<p>อายุ : <input type="number" name="age"></p>
				<p>วันเกิด : <input type="date" name="birthday"></p>
				<p>E-mail : <input type="text" name="email"></p>
				<p>เบอร์โทร : <input type="text" name="phone"></p>
				<p>ที่อยู่ : <input type="text" name="address"></p>
				<input type="submit" name="submit" value="Submit" style="width: 49.5%">
				<input type="reset" name="reset" value="Reset" style="width: 49.5%">
			</div>
		</form>
	</div>
	</body>
</html>
<?php
	} else {
		header('Location: index.html'); 
	}
?>