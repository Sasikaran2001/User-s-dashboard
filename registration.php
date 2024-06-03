<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<?php
        require('db.php');
        if(isset($_REQUEST['username'])) {
            $username=stripslashes($_REQUEST['username']);
            $username=mysqli_real_escape_string($con,$username);
            $email=stripcslashes($_REQUEST['email']);
            $email=mysqli_real_escape_string($con,$email);
			$password=stripcslashes($_REQUEST['password']);
			$password=mysqli_real_escape_string($con,$password);
            $trn_date=date("Y-m-d H:i:s");
            $query="INSERT into `click`(username,password,email,trn_date) VALUES('$username','".md5($password)."','$email','$trn_date')";
			// echo $query;
			// die;
            $result=mysqli_query($con,$query);
            if($result) {
                echo "<div class='form'><h3>You are registered successfully.</h3><br>Click here to<a href='login.php'>Login</a></div>";
			}else{
				echo "error";
			}
            }else{
             ?>   
             <div class="form">
		<h1>Registration</h1>
		<form name="registration" action="" method="post">
			<input type="text" name="username" placeholder="Username" required>
			<input type="email" name="email" placeholder="Email" required>
			<input type="password" name="password" placeholder="Password" required>
			<input type="submit" name="submit" value="Register">
		</form>
	</div>
    <?php }

        ?>

	</body>
	</html>
