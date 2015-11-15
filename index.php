<html>
	<head>
		<title>Home | Azure Workshop</title>
	</head>
	
	<body>
		<fieldset>
			<legend>Input Data</legend>
				<form action="result.php" method="POST">
					<table>
						<tr>
							<td>Name</td>
							<td>:</td>
							<td><input type="text" name="txtName"/></td>
						</tr>
						<tr>
							<td>Email</td>
							<td>:</td>
							<td><input type="text" name="txtEmail"/></td>
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
		</fieldset>
	</body>
</html>