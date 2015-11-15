<html>
	<head>
		<title>Home | Azure Workshop</title>
	</head>
	
	<?php
		if(!empty($_POST)){
			$name  = $_POST["txtName"];
			$email = $_POST["txtEmail"]; 
		}
	?>
	
	<body>
		<fieldset>
			<legend>Your Data</legend>		
				<table>
					<tr>
						<td>Name</td>
						<td>:</td>
						<td><?php echo $name ?></td>
					</tr>
					<tr>
						<td>Email</td>
						<td>:</td>
						<td><?php echo $email ?></td>
					</tr>
				</table>
		</fieldset>
		
	</body>
</html>