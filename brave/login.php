<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title> Brave Warrior || Log In </title>
	<link rel="stylesheet" href="css/login.css" type="text/css" />
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
	
	<div class="login">
		<form action="" method="post">
			<fieldset>
				<h1 class="log_title">Log In Informations Here</h1>
				<table>
					<tr>
						<td>
							<input type="text" name="username" placeholder="Username" />
						</td>
					</tr>
					<tr>
						<td>
							<input type="password" name="password" placeholder="Password" />
						</td>
					</tr>
					<tr>
						<td>
							<input class="sumbmit_btn" type="submit" name="submit" value="SUBMIT" />
								<a href="#"> Forgot Password</a>
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