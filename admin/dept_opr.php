<?php
$con=mysqli_connect('localhost','root','','id20532735_gptplpt2');
if(isset($_GET['edit']))
{
   $tname=$_GET['tname'];
   $edit=$_GET['edit'];
   if($edit=="aim"||$edit=="mission"||$edit=="goal")
   {
    $sql="SELECT rdata FROM $tname WHERE heading='$edit'";
    $res=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($res);
    ?>
    <form method="post">
     <textarea name="edit" id="" cols="30" rows="10"></textarea>
     <input type="submit" value="Submit" name="submit">
    </form>
    <?php
    if(isset($_POST['submit']))
    { 
       $edited=$_POST['edit'];
       $sql="UPDATE $tname SET rdata = '$edited' WHERE heading = '$edit'";
       $res=mysqli_query($con,$sql);
    }
   }
   else if($edit=="cur"){
    $tname=$_GET['tname'];
    $edit=$_GET['edit'];
    ?>
    <form method="post" enctype="multipart/form-data">
    <input type="file" name="image[]" multiple>
    <input type="submit" value="Submit" name="submit">
   </form>
   <?php
       if(isset($_POST['submit'])){
        $imagecount= count($_FILES['image']['name']);
        for($i=0;$i<$imagecount;$i++)
        {  $imagename=$_FILES['image']['name'][$i];
           $imagetempname=$_FILES['image']['tmp_name'][$i];
           $targetpath ="../images/".$imagename;
           $dbimgs[$i]= $targetpath;
           move_uploaded_file($imagetempname,$targetpath);
         }
           $dbimgs=implode(",",$dbimgs);
           $sql="UPDATE $tname SET rdata = '$dbimgs' WHERE heading = '$edit'";
           $res = mysqli_query($con,$sql);
       }
   }
}
if(isset($_GET['add']))
{  $tname=$_GET['add'];
  ?>
  <form  method="post" enctype=multipart/form-data >
   <input type="text" name="name1" placeholder="File name">
   <input type="file" name="pdf" >
   <input type="submit" value="submit" name="submit">
  </form>
  <?php
  if(isset($_POST['submit']))
  { 
    $name=$_POST['name1'];
    $fname=$_FILES['pdf']['name'];
    $ftmpname=$_FILES['pdf']['tmp_name'];
    $targetpath="../pdf/".$fname;
    
    if(move_uploaded_file($ftmpname,$targetpath))
    {
      echo "uploaded";
    }
    else{
      echo "error";
    }
    $sql="INSERT INTO $tname VALUES('$name','$targetpath')";
    $res=mysqli_query($con,$sql);
  }
}
?>