<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title> Brave Warrior || Registations </title>
	<link rel="stylesheet" href="css/reg.css" type="text/css" />
</head>
<body>
<?php
		include("social_link.php");
	?>
<?php
		include("header.php");
	?>
	<?php
		include("menubar.php");
	?>

	<div class="reg">
		<form action="" method="post">
			<fieldset>
				<h1 class="reg_title">Registation Informations Here</h1>
				
				<table>
					<tr>
						<td>
							<label for="">
								Name:
							</label>
						</td>
						<td>
							<input type="text" name="name" />
						</td>
					</tr>
					<tr>
						<td>
							<label for="">
								E-Mail:
							</label>
						</td>
						<td>
							<input type="email" name="email" />
						</td>
					</tr>
					<tr>
						<td>
							<label for="">
								password:
							</label>
						</td>
						<td>
							<input type="password" name="password" />
						</td>
					</tr>
					<tr>
						<td>
							<label for="">
								Gender:
							</label>
						</td>
						<td>
							<input type="radio" checked name="gender" value="m"/> Male 
							<input type="radio" name="gender" value="f" />  Female
						</td>
					</tr>
					<tr>
						<td>
							<label for="">
								Country:
							</label>
						</td>
						<td >
							<select class="ctr" name="" id="">
								<option value="">Bangladesh</option>
								<option value="">America</option>
								<option value="">China</option>
								<option value="">India</option>
								<option value="">Pakistan</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>
							<label for="">
								Address
							</label>
						</td>
						<td>
							<textarea name="text" id="" cols="20" rows="10"></textarea>
						</td>
					</tr>
					<tr>
						<td></td>
						<td class="agr">
							<input  type="checkbox" name="check" required />   I Agree With This Informations.
						</td>
					</tr>
					<tr>
					<td></td>
						<td>
							<input class="reg_btn" type="submit" name="submit" value="Register" />
						</td>
					</tr>
					
				</table>
				
			</fieldset>
		</form>
	</div>
	<?php
		include("footer.php");
	?>
</body>
</html>