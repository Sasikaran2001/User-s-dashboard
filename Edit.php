<?php
require('db.php');
include("auth.php");
$id=$_REQUEST['id'];
$query= "SELECT * from detail where id='".$id."'";
$result=mysqli_query($con,$query) or die  (mysqli_error());
$row=mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>
		<link rel="stylesheet" href='css/style.css'/>
	</head>
	<body>
		<div class="form">
			<p> <a href="dashboard.php">Dashboard</a>|<a href="insert.php">Insert New Record</a>|<a href="logout.php">Logout</a></p>
		<h1>Uptate Record</h1>
        <?php 
        $status="";
        if(isset($_POST['new']) && $_POST['new']==1) {
            $id=$_REQUEST['id'];
            $trn_date=date("Y-m-d H:i:s");
            $name=$_REQUEST['name'];
            $age=$_REQUEST['age'];
            $submittedby=$_SESSION['username'];
            $update="update detail set trn_date='".$trn_date."',name='".$name."',age='".$age."',submittedby='".$submittedby."' where id='".$id."'";
            mysqli_query($con,$update) or die(mysqli_error());
            $status="Record Updated Successfully.<br><a href='view.php'>View Updated Record</a>";
            echo '<p style="color:FF0000;">'.$status.'</p>';
}else{
    ?>
    <div>
    	<form name="form" method="post" action="">
			<input type="hidden" name="new" value="1">
			<input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
			<p><input type="text" name="name" placeholder="Enter Name" required  value="<?php echo $row['name']; ?>"</p>
			<p><input type="text" name="age" placeholder="Enter Age" required  value="<?php echo $row['age']; ?>"</p>
		    <p><input type="submit" type="submit" value="Update"></p>
		</form>
	</div>
	
     <?php }
        ?>
	</div>
	</body>
	</html>
