<style>
    .dept{
        border:1px solid;
        box-shadow: -3px 3px 5px rgb(0, 0, 0,0.5);
        width: 50%;
        height: 90%;
        padding: 120px 120px;
        margin:auto;
    }
    input{
        border-top: none;
        border-right: none;
        border-left: none;
        width: 300px;
    }
    #male,#female{
        width: 10px;
    }
    textarea{
        min-width:70%;
        max-width: 69%;
        min-height:30%;
    }
</style>
<?php

$con =mysqli_connect('localhost','root','','id20532735_gptplpt2');
if(isset($_GET['Add']))
{ 
    $dept=$_GET['Add'];
    $subdept="submit".$dept;


    
    ?>
    <div class="dept">
    <center>
    <h1><?php echo $dept;?>  Details</h1>
    </center>
    
    <form action="" method="post" enctype="multipart/form-data">

    <label for="post">Enter pin no :</label>
    <input type="text" name="pin" id="post"><br><br>

    <label for="name">Enter student name :</label>
    <input type="text" name="stu_name" id="name"><br><br>

    <label for="post">Enter Student Qualification :</label>
    <input type="text" name="stu_quali" id="post"><br><br>

    <label for="Quali">Designation :</label>
    <input type="text" name="desig" id="quali"><br><br>

    <label for="job">Doing job/studing :</label>
    <input type="radio" name="orr" id="job" value="doing_job"  >
    <label for="job">Doing job</label>
   <input type="radio" name="orr" id="stu" value="studing" >
    <label for="stu" >Studing</label><br><br>

    <label for="batch">Enter Batch :</label>
    <input type="text" name="batch" id="batch"><br><br>

    <label for="expi">Enter mobile number:</label>
    <input type="text" name="mobile" id="expi"><br><br>

    <label for="email">Enter student Email :</label>
    <input type="email" name="email" id="email"><br><br>

    <label for="img">Choose student photo :</label>
    <input type="file" name="stu_img" id="img"><br><br>

    
    <center>
    <input type="submit" name="<?php echo$subdept ;?>">

    </center>

    </form>
</div>

    <?php 

    if(isset($_POST[$subdept]))
    {
        //declearation
        $stupin=$_POST['pin'];
        $stuname=$_POST['stu_name'];
        $quali=$_POST['stu_quali'];
        $desig=$_POST['desig'];
        $doingjobor=$_POST['orr'];
        $batch=$_POST['batch'];
        $mobile=$_POST['mobile'];
        $email=$_POST['email'];

        $stuimg_name=$_FILES['stu_img']['name'];
        $stuimg_type=$_FILES['stu_img']['type'];
        $stuimg_size=$_FILES['stu_img']['size'];
        $stuimg_temp_name=$_FILES['stu_img']['tmp_name'];

        move_uploaded_file($stuimg_temp_name,"../images/alumni/$stuimg_name");
        


    
        $sql= "CREATE TABLE IF NOT EXISTS `$dept`(
            id INT(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
            pin_num VARCHAR(255) NOT NULL,
            alumni_name VARCHAR(255)NOT NULL,
            alumni_quali VARCHAR(255)NOT NULL,
            workor VARCHAR(255)NOT NULL,
            Designation VARCHAR(255)NOT NULL,
            mobile VARCHAR(255) NOT NULL,
            email VARCHAR(255)NOT NULL,
            photo VARCHAR(9999)NOT NULL,
            batch VARCHAR(9999)NOT NULL
        )";
        $que=mysqli_query($con,$sql);
        if($que){
            echo "table created sucessfully";
        }

     $is="INSERT INTO ` $dept `(`id`, `pin_num`, `alumni_name`, `alumni_quali`, `workor`, `Designation`, `mobile`, `email`, `photo`, `batch`) VALUES ('','$stupin','$stuname','$quali','$doingjobor','$desig',$mobile,'$email','$stuimg_name','$batch')";
            $rsss=$con->query($is);
         

            if($rsss){
               
                header('location:alumniadmin.php');
            }
 
    }
    
    
    
}
if(isset($_GET['edit'])&&isset($_GET['dept'])){
    

    $id=$_GET['edit'];
    $dept=$_GET['dept'];

    $updept="update".$dept;

    $sql="SELECT * FROM `$dept` WHERE `id`='$id'";
    $que=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($que);

?>
<div class="dept">
<center>
<h1> Update <?php echo $row['alumni_name'] ;?>  Details</h1>
</center>

<form action="" method="post" enctype="multipart/form-data">

    <label for="post">Enter pin no :</label>
    <input type="text" name="pin" id="post" value="<?php echo$row['pin_num'];?>"><br><br>

    <label for="name">Enter student name :</label>
    <input type="text" name="stu_name" id="name" value="<?php echo$row['alumni_name'];?>"><br><br>

    <label for="post">Enter Student Qualification :</label>
    <input type="text" name="stu_quali" id="post" value="<?php echo$row['alumni_quali'];?>"><br><br>

    <label for="Quali">Designation :</label>
    <input type="text" name="desig" id="quali" value="<?php echo$row['Designation'];?>"><br><br>

    <label for="job">Doing job/studing :</label>
    <input type="radio" name="orr" id="job" value="doing_job"  >
    <label for="job">Doing job</label><br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <input type="radio" name="orr" id="stu" value="studing" >
    <label for="stu" >Studing</label><br><br>

    <label for="batch">Enter Batch :</label>
    <input type="text" name="batch" id="batch" value="<?php echo$row['batch'];?>"><br><br>

    <label for="expi">Enter mobile number:</label>
    <input type="text" name="mobile" id="expi" value="<?php echo$row['mobile'];?>"><br><br>

    <label for="email">Enter student Email :</label>
    <input type="email" name="email" id="email" value="<?php echo$row['email'];?>"><br><br>

    <label for="img">Choose student photo :</label>
    <input type="file" name="stu_img" id="img" value="<?php echo$row['photo'];?>"><br><br>

    
<center>
<input type="submit" name="<?php echo $updept ;?>">

</center>

</form>
</div>

<?php 

if(isset($_POST[$updept]))
{
    //declearation
    $pin=$_POST['pin'];
    $stuname=$_POST['stu_name'];
    $stuquali=$_POST['stu_quali'];
    $jobor=$_POST['orr'];
    $desig=$_POST['desig'];
    $mobile=$_POST['batch'];
    $email=$_POST['mobile'];
    $batch=$_POST['email'];


    $stuimg_name=$_FILES['stu_img']['name'];
    $stuimg_type=$_FILES['stu_img']['type'];
    $stuimg_size=$_FILES['stu_img']['size'];
    $stuimg_temp_name=$_FILES['stu_img']['tmp_name'];

    move_uploaded_file($stuimg_temp_name,"../images/alumni/$stuimg_name");
    
        $upd="UPDATE `$dept` SET `pin_num`=$pin `alumni_name`='$stuname',`alumni_quali`='$stuquali',`workor`='$jobor',`Designation`='$desig',`mobile`='$mobile',`email`='$email',`batch`='$batch',`photo`='$stuimg_name' WHERE `id`='$id'";
        $res=mysqli_query($con,$upd);
       

        if($res){
            header('location:alumniadminphp');
        }
   }
   else{


    echo "Insert working";
   }
 

}



////end

if(isset($_GET['delete'])&&isset($_GET['dept'])){
  
    $id=$_GET['delete'];
    $dept=$_GET['dept'];
    
    $sql2="DELETE FROM `$dept` WHERE id=$id ";
        $result2 = mysqli_query($con,$sql2); 
        if($result2){
            header('location:alumniadmin.php');

        }
}

?>