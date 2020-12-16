<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post" action="">
	<center>
		<table>
			<tr>
				<td>customer Name</td>
				<td><input type="text" name="custame" placeholder="Customer name"></td>
			</tr>
			<tr>
				<td>customer Number</td>
				<td><input type="text" name="custnumber" placeholder="Customer number"></td>
			</tr>
			<tr>
				<td>mobile</td>
				<td><input type="number" name="custmobile" placeholder="Customer mobile"></td>
			</tr>
			<tr>
				<td>bill amount</td>
				<td><input type="number" name="billamount" placeholder="bill amount"></td>
			</tr>
			<tr>
				<td>bill date</td>
				<td><input type="date" name="billdate" value="<?php echo date('Y-m-d');?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="" value="save value details"></td>
			</tr>
		</table>
	</center>
</form>
</body>
</html>