<html>
	<head>
		<title>Home | Azure Workshop</title>
	</head>
	
	<body>
		<fieldset>
			<legend>Input Data</legend>
				<form action="" method="POST">
					<table>
						<tr>
							<td>Name</td>
							<td>:</td>
							<td>
								<input type="text" name="txtName" required/>
							</td>
						</tr>
						<tr>
							<td>Email</td>
							<td>:</td>
							<td><input type="text" name="txtEmail" required/></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
						</tr>
						<tr>
							<td colspan="3">
								<input type="reset" value="Reset"/>
								<input type="submit" name="btnSubmit" value="Submit"/>
							</td>
						</tr>
					</table>
				</form>
				
				<?php
					include("connection.php");
					if(!empty($_POST)){
						$name  = $_POST["txtName"];
						$email = $_POST["txtEmail"]; 
						$date = date("Y-m-d");
						
						$sql_insert = "INSERT INTO tblsimplepost (name, email, date) VALUES ('$name', '$email', '$date')";
						mysql_query($sql_insert) or die (mysql_error());
						
						echo "
							<h3>Registered User</h3>
							
							<table border='1'>
								<tr>
									<th>No</th>
									<th>Nama</th>
									<th>Email</th>
									<th>Tanggal</th>
								</tr>
								";
						
						$sql_select = "SELECT*FROM tblsimplepost";
						$result = mysql_query($sql_select) or die(mysql_error());
						$i=1;
						while($row=mysql_fetch_array($result)){
							echo "
									<tr>
										<td>$i</td>
										<td>".$row['name']."</td>
										<td>".$row['email']."</td>
										<td>".$row['date']."</td>
									</tr>
							
							";
							$i=$i+1;
						}
							
							echo "</table>";
					}
				?>
				
		</fieldset>
	</body>
</html>