<?php
$con=mysqli_connect('localhost','root','','id20532735_gptplpt2');
// echo $_GET['deleteid'];
if(isset($_GET['deleteid']))
{   $id=$_GET['deleteid'];
    $sql="DELETE FROM `fee_structure` WHERE `sno`=$id ";
    $query=mysqli_query($con,$sql);
 if($query){
    header('location:fee_structure_admin.php');
 }
}
?>
<!DOCTYPE html>
<html>
   <head>
      <title>edit_page</title>
   </head>
   <style>
      .cont{
         display: flex;
         justify-content: center;
         align-items: center;
         margin: auto;
         width: 300px;
         height: 450px;
         padding: 40px;
         box-shadow: -5px 5px 10px rgb(0,0,0,0.5);
      }
      input{
         width: 250px;
         height: 20px;
      }
   </style>
   <body>
      <div class="cont">
         <?php 
         if(isset($_GET['editid'])){
            $id=$_GET['editid'];
            if(isset($_POST['subedit'])){
               $desc=$_POST['description'];
               $amt=$_POST['amt'];
               $update="UPDATE `fee_structure` SET `fee_description`='$desc',`amount`='$amt' WHERE sno =$id ";
               $quer=mysqli_query($con,$update);
               if($quer){
                  echo"Updated successfully";
                  header('location:fee_structure_admin.php');
               }
               else{
                  echo"Connection Failed!";
                  header('location:fee_structure_admin.php');
               }
            }
            $query= "SELECT * FROM `fee_structure` WHERE `sno`='$id'";
            $res=mysqli_query($con,$query);
             $row=mysqli_fetch_array($res);
            ?>
         <form action="" method="POST">
            <label for="des">Enter description :</label><br>
            <input type="text" name="description" id="des" value="<?php echo "$row[fee_description]" ?>"><br><br>
            <label for="amt">Enter amount :</label><br>
            <input type="text" id="amt" name="amt" value="<?php echo" $row[amount]" ?>"><br><br>
            <center><input type="submit" name="subedit" value="update"></center>
         </form>
      <?php
         }
         else{
            if(isset($_POST['subnew'])){
               $desc=$_POST['description'];
               $amt=$_POST['amt'];
               $sql="INSERT INTO `fee_structure` (`fee_description`,`amount`) VALUES ('$desc','$amt') ";
               $query=mysqli_query($con,$sql);
               if($query){
                  echo"Inserted successfully!";
                  header('location:fee_structure_admin.php');
               }
               else{
                  echo"! Data Not Inserted";
               }
            }
            ?>
             <form action="" method="POST">
            <label for="des">Enter description :</label><br>
            <input type="text" name="description" id="des" ><br><br>
            <label for="amt">Enter amount :</label><br>
            <input type="text" id="amt" name="amt" ><br><br>
            <center><input type="submit" name="subnew" value="ADD"></center>
         </form>
            <?php
         }
         ?>
      </div>
   </body>
</html>