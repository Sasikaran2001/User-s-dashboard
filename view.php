<?php 
require('db.php');
include('auth.php');
?>
<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>View Record</title>
		<link  rel="stylesheet" href="css/style.css"/>

	</head>
	<body>
		<div class="form">
			<p><a href="index.php">Home</a>|<a href="insert.php">Insert New Record</a>|<a href="logout.php">Logout</a></p>
        <h2>View Records</h2>
		<table width="100%" border="1" style="border-collapse: collapse;">
		<thead>
			<tr><th><strong>S.No</strong></th><th><strong>Name</strong></th><th><strong>Age</strong></th><th><strong>Edit</strong></th><th><strong>Delete</strong></th></tr>
		</thead>
		<tbody>
            <?php $count=1;
            $sel_query="SELECT * FROM detail ORDER BY id DESC;";
            $result=mysqli_query($con,$sel_query);
            while($row = mysqli_fetch_assoc($result)) {?>
			<tr><td align="center"><?php echo $count;?></td><td align="center"><?php echo $row["name"];?></td><td align="center"><?php echo $row["age"] ?></td><td align="center"><a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</td><td align="center"><a href="delete.php?id=<?php echo $row["id"];?>">Delete</td></tr>
        <?php $count++;} ?>
        </tbody>
		</table>
		</div>
	</body>
	</html>