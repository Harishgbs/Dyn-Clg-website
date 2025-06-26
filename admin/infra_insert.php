<!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
  </head>
  <body>
  <?php
   function del($dbimgs,$i){
    echo "Worked";
    echo $dbimgs[$i];
    unset($dbimgs[$i]);
    $dbimgs=implode(",",$dbimgs);
    return $dbimgs;
   }
  if(isset($_GET['add'])){
    ?>
 <fieldset>
  <form  method="POST" enctype="multipart/form-data">
  Room name:<input type="text" name="roomname">
  <input type="file" name="image[]" multiple>
  <input type="submit" value="submit" name="submit">
  </form>
  </fieldset>
    <?php }
$con=mysqli_connect('localhost','root','','id20532735_gptplpt2');
if(isset($_POST['submit']))
{
 $roomname=$_POST['roomname'];
 $imagecount= count($_FILES['image']['name']);
 for($i=0;$i<$imagecount;$i++)
 {  $imagename=$_FILES['image']['name'][$i];
    echo $imagename,"<br>";
    $imagetempname=$_FILES['image']['tmp_name'][$i];
    $targetpath ="../images/".$imagename;
    $dbimgs[$i]= $targetpath;
    $img="image";
    move_uploaded_file($imagetempname,$targetpath);
  }
    $dbimgs=implode(",",$dbimgs);
    echo $dbimgs;
     $sql1="INSERT INTO infrastructure VALUES ('$roomname','$dbimgs')";
      $res=mysqli_query($con,$sql1);
   
?>
  <?php
 # header('location:infrastructure_admin.php');
}
if(isset($_GET['edit'])){
  $dbimgs1;
$roomname1=$_GET['edit'];
$sql="SELECT * FROM `infrastructure` WHERE `roomname`='$roomname1'";
$res=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($res);
 $dbimgs=$row['image'];
 $dbimgs=explode(",",$dbimgs);
?>
  <fieldset>
  <form  method="POST" enctype="multipart/form-data">
  Room name:<input type="text" name="roomname" value="<?php echo$roomname1?>">
  <input type="file" name="image[]" multiple>
  <?php
      for($i=0;$i<sizeof($dbimgs);$i++)
      {?><br>
      <img src="<?php echo"$dbimgs[$i]";?>" style="width: 300px; display:inline-flex;">
     <?php }?>
  <input type="submit" value="submit" name="editsubmit">
  </form>
  </fieldset>
  </body>
  </html>
  <?php
  if(isset($_POST['editsubmit'])){
    $roomname=$_POST['roomname'];
 $imagecount = count($_FILES['image']['name']);
 for($i=0;$i<$imagecount;$i++)
 {  $imagename=$_FILES['image']['name'][$i];
    echo $imagename,"<br>";
    $imagetempname=$_FILES['image']['tmp_name'][$i];
    $targetpath ="../images/".$imagename;
    $dbimgs1[$i]= $targetpath;
    move_uploaded_file($imagetempname,$targetpath);
  }
    $dbimgs1=implode(",",$dbimgs1);
    $sql="UPDATE infrastructure SET `roomname`= '$roomname' WHERE `roomname`= '$roomname1'" ;
    $res=mysqli_query($con,$sql);
    $sql="UPDATE infrastructure SET `image` = '$dbimgs1' WHERE `roomname`= '$roomname1'" ;
    $res=mysqli_query($con,$sql);
   # header('location:infrastructure_admin.php');
}
}
if(isset($_GET['delete']))
{
  $roomname=$_GET['delete'];
  $sql= "DELETE FROM `infrastructure` WHERE `roomname` = '$roomname'";
  $res=mysqli_query($con,$sql);
  header('location:infrastructure_admin.php');
}
?>