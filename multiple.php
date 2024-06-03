<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
     $con= mysqli_connect('localhost','root','', 'multi');
     if(!$con) {
        echo "connecion failed";
     }
     ?>
     <?php
    if(isset($_POST['submit'])) {
        $imagesCount= count($_FILES['image']['name']);
            for($i=0;$i < $imagesCount;$i++) {
                $imageName=$_FILES['image']['name'][$i];
                $imageTempName=$_FILES['image']['tmp_name'][$i];
                $targetPath="upload/".$imageName;
                if(move_uploaded_file($imageTempName, $targetPath)) {
                    $sql="INSERT INTO images(image)VALUES('$imageName')";
                    $result=mysqli_query($con,$sql);
                                    }
                                    // echo $sql;
                                    // echo die;
            }

            if($result) {
                header('Location:multiple.php?msg=ins');
            }
        }else{
 ?>
    <form action="multiple.php" method="post" enctype="multipart/form-data">
        <?php 
        if(isset($_GET['msg']) AND $_GET['msg']=='ins') {
            echo "Images added successfully";
        }
            ?>
        <input type="file" name="image[]" multiple>
        <br>
        <input type="submit" value="Upload" name="submit"> 
    </form>
    <?php }
    
     $sql="SELECT * FROM images ORDER BY id DESC";
    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0) {
        while($fetch= mysqli_fetch_assoc($result)) {
            ?>
            <img src="upload/<?php echo $fetch['image']; ?>">
            <?php
        }
    }
    ?>

</body>
</html>