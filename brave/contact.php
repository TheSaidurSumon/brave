<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title> Brave Warrior || Contact </title>
	<link rel="stylesheet" href="css/contact.css" type="text/css"/>
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
	<div class="cntc">
		<form action="" method="post">
		<fieldset>
		<h1 class="cnt_title">Contact Informations Here</h1>
			<table >
				<tr>
					<td>
						<label for="">
							Your Name:
						</label>
					</td>
					<td>
						<input type="text" name="name" placeholder="Brave" />
					</td>
				</tr>
				<tr>
					<td>
						<label for="">
							Your Email:
						</label>
					</td>
					<td>
						<input type="email" name="mail" placeholder="Warrior@mail.com" />
					</td>
				</tr>
				<tr>
					<td>
						<label for="">
							Write Something:
						</label>
					</td>
					<td>
						<textarea name="text" id="" cols="30" rows="10"placeholder="Say Something."></textarea>
					</td>
				</tr>
				<tr>
				<td></td>
					<td>
						<input class="send_btn" type="submit" name="submit" value="SEND" />
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