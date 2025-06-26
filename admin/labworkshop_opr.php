<?php
$con=mysqli_connect('localhost','root','','id20532735_gptplpt2');
if(isset($_GET['newrow']))
{?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
    <fieldset>
        <form method="post"  enctype="multipart/form-data">
            Labname: <input type="text" name="labname" >
            image: <input type="file" name="image[]" multiple>
            <input type="submit" name="submit" value="submit">
        </form>
    </fieldset>
  <?php
    if(isset($_POST['submit']))
    {  $labname= $_POST['labname'];
      $imagecount= count($_FILES['image']['name']);
      for($i=0;$i<$imagecount;$i++)
      {  $imagename=$_FILES['image']['name'][$i];
         $imagetempname=$_FILES['image']['tmp_name'][$i];
         $targetpath ="../images/".$imagename;
         $dbimgs[$i]= $targetpath;
         move_uploaded_file($imagetempname,$targetpath);
       }
         $dbimgs=implode(",",$dbimgs);
         echo $dbimgs;
         $sql="INSERT INTO labsworkshop VALUES ('$labname','$dbimgs')";
         $res=mysqli_query($con,$sql);
         header('location:labsworkshop_admin.php');
    }
  ?>

<?php
}
if(isset($_GET['edit']))
{
  $clabname=$_GET['edit'];
  $sql="SELECT * FROM `labsworkshop` WHERE `labname`='$clabname'";
  $res=mysqli_query($con,$sql);
  $row=mysqli_fetch_assoc($res);
  ?>
  <fieldset>
  <form method="post"  enctype="multipart/form-data">
      Labname: <input type="text" name="labname" value="<?php echo$row['labname']?>">
      image: <input type="file" name="image[]" multiple>
      <input type="submit" name="submit" value="submit">
    <?php   
    $dbimgs=$row['image'];
    $dbimgs=explode(",",$dbimgs);
    $imgcounto=count($dbimgs);
    for($i=0;$i<$imgcounto;$i++)
    {
  ?><div class=image><img id=img$i src=<?=$dbimgs[$i]?> alt=></div>
  <?php

  }
    if(isset($_POST['submit']))
    {  $labname= $_POST['labname'];
      $imagecount= count($_FILES['image']['name']);
      for($i=0;$i<$imagecount;$i++)
      {  $imgname=$_FILES['image']['name'][$i];
         echo $imgname;
         $imgtempname=$_FILES['image']['tmp_name'][$i];
         $targetpath ="../images/".$imgname;
         $dbimgsn[$i]= $targetpath;
         move_uploaded_file($imgtempname,$targetpath);
       }
         $dbimgsn=implode(",",$dbimgsn);
         $sql="UPDATE `labsworkshop` SET `labname`='$labname',`image`='$dbimgsn' WHERE `labname`='$clabname'";
         $res=mysqli_query($con,$sql);
         header('location:labsworkshop_admin.php');

    }
  ?>

  </form>
</fieldset>

<?php
}
if(isset($_GET['del']))
{
  $clabnamee=$_GET['del'];
  $sql = "DELETE FROM `labsworkshop` WHERE `labname`='$clabnamee'";
  $res = mysqli_query($con,$sql);
  header('location:labsworkshop_admin.php');
}
?>
</body>
</html>   