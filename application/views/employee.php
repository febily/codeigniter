<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post" action="<?php echo base_url();?>employee/add_employee">
	<center>
		<table>
			<tr>
				<td>Name</td>
				<td><input type="text" name="txtname" placeholder="name"></td>
			</tr>
			<tr>
				<td>contact Number</td>
				<td><input type="number" name="txtmobile" placeholder="contact number"></td>
			</tr>
			<tr>
				<td>email</td>
				<td><input type="email" name="txtemail" placeholder="email address"></td>
			</tr>
			<tr>
				<td>address</td>
				<td><textarea name="txtaddress" placeholder="address"></textarea></td>
			</tr>
			
			<tr>
				<td></td>
				<td><input type="submit" name="" value="save details"></td>
			</tr>
		</table>
	</center>
</form>
<!-- <center>
	<table border="1px">
		<tr>
			<td>Customer id</td>
			<td>Customer name</td>
			<td>customer number</td>
			<td>mobile</td>
			<td>bill amount</td>
			<td>bill date</td>
		</tr>
		<?php
		//foreach ($emp as $e) 
		{ ?>
		<tr>
			<td>1</td>
			<td>febily</td>
			<td>11</td>
			<td>9605925708</td>
			<td>5000</td>
			<td>2020-05-05</td>
		</tr><?php } ?>
	</table>
</center> -->
</body>
</html>