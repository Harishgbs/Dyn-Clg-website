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
</head>
<body width="1000px">
<?php 
if(isset($_GET['add']))
{
 ?>
    <form  method="post" >
        <input type="text" placeholder="Category" name="cat">
        <input type="submit" value="submit" name="submit">
    </form>
 <?php
 if(isset($_POST['submit']))
 {
    $cat=$_POST['cat'];
    $sql="INSERT INTO `books_category` VALUES ('$cat')";
    $res=mysqli_query($con,$sql);
    $sql="CREATE TABLE IF NOT EXISTS $cat(bookid int,book_name varchar(30),publisher_name varchar(30),author_name varchar(30),scheme varchar(15),book_img varchar(1000))";
    $res=mysqli_query($con,$sql);
    header('location:library_admin.php');
 }
}
if(isset($_GET['edit']))
{ 
     $ccat=$_GET['edit'];
    ?>
    <form  method="post" >
        <input type="text" placeholder="Category" name="cat" value="<?php echo $ccat?>">
        <input type="submit" value="submit" name="submit">
    </form>
 <?php
 if(isset($_POST['submit']))
 {
    $cat=$_POST['cat'];
    $sql="UPDATE `books_category` SET `category`='$cat' WHERE `category`='$ccat'";
    $res=mysqli_query($con,$sql);
    $sql="ALTER TABLE $ccat RENAME TO $cat";
    $res=mysqli_query($con,$sql);
    header('location:library_admin.php');
 }
    
}
if(isset($_GET['del']))
{
    $ccat=$_GET['del'];
   $sql="DELETE FROM `books_category` WHERE `category`='$ccat'";
   $res=mysqli_query($con,$sql);
   $sql="DROP TABLE $ccat";
   $res=mysqli_query($con,$sql);

   header('location:library_admin.php');
  
}
?>
</body>
</html>