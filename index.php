<?php
include("auth.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>welcome Home</title>
    <link rel="stylesheet" href='css/style.css'/>
</head>
<body>
 <div class="form">
 <p>Welcome
	<?php echo $_SESSION['username']; ?>
	!</p>
 <p>This is secure area.</p>
 <p><a href="dashboard.php">Dashboard</a></p>
 <a href="logout.php">Logout</a>
 </div>	

</body>
</html>