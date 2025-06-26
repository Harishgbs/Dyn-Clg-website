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
    <!-- <style>
        body{
            height: 90vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        fieldset{
            border-radius: 9px;
            box-shadow: 5px 5px 15px rgb(0,0,0,.5),
                        -5px -5px 15px rgb(0,0,0,.15);
        }
        input{
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style> -->
</head>
<body>
<?php 
 if(isset($_GET['newrow']))
 {?>
 <fieldset>
     <form action="" method="post" enctype="multipart/form-data">
        Pin.No: <input type="text" name="pin">
        Student name:<input type="text" name="studentname">
        Department:<input type="text" name="department">
        Name of company: <input type="text" name="companyname">
        Recruited year:<input type="text" name="recruitedyear">
        Companylogo:<input type="file" name="companylogo[]">
        <input type="submit" value="submit" name="submit">
     </form>
 </fieldset>
 <?php
    if(isset($_POST['submit']))
    {
        $pin=$_POST['pin'];
        $name=$_POST['studentname'];
        $dep=$_POST['department'];
        $compname=$_POST['companyname'];
        $recyear=$_POST['recruitedyear'];
        $img=$_FILES['companylogo']['name'][0];
        $tmpimg=$_FILES['companylogo']['tmp_name'][0];
        $targetpath ="../images/".$img;
        move_uploaded_file($tmpimg,$targetpath);
        $sql="INSERT INTO placement VALUES ('$pin','$name','$dep','$compname','$recyear','$targetpath')";
        $res=mysqli_query($con,$sql);
        //header('location:placements_admin.php');
    }
 }
 if(isset($_GET['edit'])){
  $cpin=$_GET['edit'];
  $sql= "SELECT * FROM placement WHERE pinno = '$cpin'";
  $res=mysqli_query($con,$sql);
  $row=mysqli_fetch_assoc($res);
  ?>
  <fieldset>
  <form action="" method="post" enctype="multipart/form-data" >
     Pin.No: <input type="text" name="pin" value="<?php echo$row['pinno']?>">
     Student name:<input type="text" name="studentname" value="<?php echo$row['name']?>">
     Department:<input type="text" name="department" value="<?php echo$row['department']?>">
     Name of company: <input type="text" name="companyname" value="<?php echo$row['companyname']?>">
     Recruited year:<input type="text" name="recruitedyear" value="<?php echo$row['recriutedyear']?>">
     Companylogo:<input type="file" name="companylogo[]">
     selected logo: <img src="<?php echo$row['companylogo']?>">
     <input type="submit" value="submit" name="submit">
  </form>
</fieldset>
<?php
       if(isset($_POST['submit'])){
        $pin=$_POST['pin'];
        $name=$_POST['studentname'];
        $dep=$_POST['department'];
        $compname=$_POST['companyname'];
        $recyear=$_POST['recruitedyear'];
        $img=$_FILES['companylogo']['name'][0];
        $tmpimg=$_FILES['companylogo']['tmp_name'][0];
        $targetpath ="../images/".$img;
        move_uploaded_file($tmpimg,$targetpath);
        $sql="UPDATE placement SET `pinno`='$pin',`name`='$name',`department`='$dep',`companyname`='$compname',`recriutedyear`='$recyear',`companylogo`='$targetpath' WHERE `pinno`='$cpin'";
        $res=mysqli_query($con,$sql);
        header('location:placements_admin.php');
       }
 }
 if(isset($_GET['del']))
 {
    $cpin=$_GET['del'];
    $sql="DELETE FROM `placement` WHERE `pinno`= '$cpin' ";
    $query=mysqli_query($con,$sql);
    if($query){
    header('location:placements_admin.php');
 }
 }
?>
</body>
</html>