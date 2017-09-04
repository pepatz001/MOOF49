<?php
	include('conn.php');
	function checkTitle($title){
		switch ($title) {
			case 'Mr.':
				return "นาย";
				break;
			case 'Mrs.':
				return "นาง";
				break;
			case 'Ms.':
				return "นางสาว";
				break;
		}
	}
	$tablename = "member";
	$sql = "SELECT * FROM ".$tablename."";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
		    ?>
		    <tr>
				<td><?=checkTitle($row['title'])?></td>
				<td><?=$row['surname']." ".$row['lastname']?></td>
				<td><?=$row['phone']?></td>
				<td><?=$row['age']?></td>
				<td><?=$row['birthday']?></td>
				<td><?=$row['email']?></td>
			</tr>
		    <?php
		}
	} else {
		?>
		<tr>
			<td colspan="6" style="text-align: center">ไม่พบข้อมูล</td>
		</tr>
		<?php
	}

	
?>