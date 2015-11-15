<html>
	<head>
		<title>Home | Azure Workshop</title>
		<?php
			if(!empty($_POST)){
				$name  = $_POST["txtName"];
				$email = $_POST["txtEmail"]; 
			}
		?>
	</head>
	
	<body>
		<fieldset>
			<legend>Data</legend>
				<form action="" method="POST">
					<table>
						<tr>
							<td>Name</td>
							<td>:</td>
							<td>
								<?php
									if(!empty($_POST)){
										echo $name;
									}
									else {
										echo "<input type='text' name='txtName' required/>";
									}
								?>
							</td>
						</tr>
						<tr>
							<td>Email</td>
							<td>:</td>
							<td>
								<?php
									if(!empty($_POST)){
										echo $email;
									}
									else {
										echo "<input type='text' name='txtEmail' required/>";
									}
								?>
							</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
						</tr>
						<tr>
							<td colspan="3">
								<?php
									if(!empty($_POST)){
										echo "<a href='index.php'>[ Back ]</a>";
									}
									else {
										echo "	<input type='reset' value='Reset'/>
												<input type='submit' value='Submit'/>";
									}
								?>
							</td>
						</tr>
					</table>
				</form>
		</fieldset>
	</body>
</html>