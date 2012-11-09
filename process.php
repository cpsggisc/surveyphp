<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<title>Super Form Results</title>
	</head>
	<body>
		<h1>Super Form Results</h1>
		
		Welcome <?php echo $_POST["username"]; ?>!<br />
		Your password is <?php echo $_POST["password"]; ?> hahaha!<br /><br />
		
		You have given us the following info:<br />
		
		Gender: <?php echo $_POST["gender"]; ?><br />
		Phone: 	<?php 
					if (!empty($_POST['phone'])) 
						foreach ($_POST["phone"] as $mobile) 
							echo $mobile . " "; 
				?>
				<br />
		Browser: <?php echo $_POST["browser"]; ?><br />
		Comments: <?php echo $_POST["comment"]; ?><br />
	</body>
</html>