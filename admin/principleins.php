<?php
 $con=mysqli_connect('localhost','root','','id20532735_gptplpt2');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            margin:auto;
            width:30%;
        }
    </style>
</head>
<body>
    <form method="POST" enctype="multipart/form-data">
        <label >Name:</label>
         <input type="text" name="name"><br>
         <label>Message:</label><br>
        <textarea name="about" style="width:200px; height:200px;"></textarea><br>
         <label>Image</label>
        <input type="file" name="image[]"><br><br>
        <input type="submit" name="subimtt" value="upload">
    </form>
</body>
</html>
<?php
   if(isset($_POST['subimtt'])){
    $name=$_POST['name'];
    $text=$_POST['about'];
    $img_name=$_FILES['image']['name'][0];
    $img_type=$_FILES['image']['type'][0];
    $img_size=$_FILES['image']['size'][0];
    $img_temp_name=$_FILES['image']['tmp_name'][0];
    $targetpath="images/".$img_name;
    move_uploaded_file($img_temp_name,$targetpath);

     $co="SELECT COUNT(*) as count from `principlemsg`";
     $sql=mysqli_query($con,$co);
     $row=mysqli_fetch_assoc($sql);
     if($row["count"]==0){
       $de="INSERT INTO  `principlemsg`(`id`,`name`,`message`,`image`) VALUES('56','$name','$text','$targetpath')";
         $cf=mysqli_query($con,$de);
       }
       else{
         $dx="UPDATE `principlemsg` SET `name`='$name',`message`='$text',`image`='$targetpath' WHERE id='56'";
         $fn=mysqli_query($con,$dx);
        }
 }
 else{
    echo "as";
 }

?>