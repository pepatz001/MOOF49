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
	<div class="member">
		<form action="php/register.php" method="post">
			<div class="container">
				<h1 align="center">รายชื่อสมาชิก MOOF49</h1>
				<table>
				  	<tr>
				  		<th>Title</th>
					    <th>Fullname</th>
					    <th>Phone</th>
					    <th>Age</th>
					    <th>Birthday</th>
					    <th>Email</th>
				  	</tr>
				  	<?php include('php/member.php');?>
				</table>
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