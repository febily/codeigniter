
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table>
	<tr>
		<th>User Id</th>
		<th>Username</th>
		<th>Company</th>
	</tr>
	<?php
		foreach ($UserArray as $key => $value) {
			echo "<pre>";
			print_r($value);
			echo "</pre>";

			echo "<tr>
			<td>".$value['id']."</td>
			<td>".$value['username']. "</td>
			<td>".$value['company']. "</td>
			</tr>";
		}
	?>
	<!-- <tr>
		<td>1</td>
		<td><?=$UserArray['username'];?></td>
		<td><?=$UserArray['company'];?></td>
	</tr> -->
</table>
</body>
</html>
<!-- <?php
// echo "<pre>";
// print_r($UserArray);
// echo "/<pre>";
?> -->