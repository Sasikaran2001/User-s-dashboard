<?php 
require('db.php');
include('auth.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard-secured Page</title>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
<div class="form">
		<p>Welcome to Dashboard</p>
		<p><a href="index.php">Home</a></p>
		<p><a href="insert.php">Insert New Records</a></p>
		<p><a href="view.php">View Records</a></p>
		<p><a href="logout.php">Logout</a></p>
	</div>

</body>
</html>