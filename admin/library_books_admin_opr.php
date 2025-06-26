<?php 
$con=mysqli_connect('localhost','root','','id20532735_gptplpt2');
if(isset($_GET['add']))
{
    $tname=$_GET['add'];
    $id=$_GET['id'];
    $id++;
?>
<form method="post" enctype="multipart/form-data">
    <input type="text" name="bookname" placeholder="Bookname" >
    <input type="text" name="publishername" placeholder="publishername">
    <input type="text" name="authorname" placeholder="authorname">
    <input type="text" name="scheme" placeholder="scheme">
    <input type="file" name="bimage[]">
    <input type="submit" name="submit" value="submit">
</form>
<?php
if(isset($_POST['submit']))
{

    $bookname=$_POST['bookname'];
    $publishername=$_POST['publishername'];
    $authorname=$_POST['authorname'];
    $scheme=$_POST['scheme'];
    $imgname=$_FILES['bimage']['name'][0];
    $tmpname=$_FILES['bimage']['tmp_name'][0];
    $targetpath="../images/".$imgname;
    move_uploaded_file($tmpname,$targetpath);
    $sql="INSERT INTO $tname VALUES ('$id','$bookname','$publishername','$authorname','$scheme','$targetpath')";
    $res=mysqli_query($con,$sql);
    header('location:library_admin.php');
}
}
if(isset($_GET['edit']))
{
  $tname= $_GET['edit'];
  $id=$_GET['id'];
  $sql="SELECT * FROM $tname WHERE `bookid` = $id ";
  $res=mysqli_query($con,$sql);
  $row=mysqli_fetch_assoc($res);
  ?>
<form method="post" enctype="multipart/form-data">
    <input type="text" name="bookname" placeholder="Bookname" value="<?php echo"$row[book_name]"?>">
    <input type="text" name="publishername" placeholder="publishername" value="<?php echo"$row[publisher_name]"?>">
    <input type="text" name="authorname" placeholder="authorname" value="<?php echo"$row[author_name]"?>">
    <input type="text" name="scheme" placeholder="scheme" value="<?php echo"$row[scheme]"?>">
    <input type="file" name="bimage[]">
    <input type="submit" name="submit" value="submit"> <br> <br>
    <img src="<?php echo"$row[book_img]"?>" width="300px">

</form>
<?php
if(isset($_POST['submit']))
{

    $bookname=$_POST['bookname'];
    $publishername=$_POST['publishername'];
    $authorname=$_POST['authorname'];
    $scheme=$_POST['scheme'];
    $imgname=$_FILES['bimage']['name'][0];
    $tmpname=$_FILES['bimage']['tmp_name'][0];
    $targetpath="../images/".$imgname;
    move_uploaded_file($tmpname,$targetpath);
    $sql="UPDATE $tname SET `bookid`='$id',`book_name`='$bookname',`publisher_name`='$publishername',`author_name`='$authorname',`scheme`='$scheme',`book_img`='$targetpath' WHERE `bookid` = '$id' ";
    $res=mysqli_query($con,$sql);
    header('location:library_admin.php');
}
}
if(isset($_GET['del']))
{   $tname= $_GET['del'];
    $id=$_GET['id'];
    $sql="DELETE FROM $tname WHERE `bookid`='$id'";
    $res=mysqli_query($con,$sql);
    header('location:library_admin.php');
}
?>