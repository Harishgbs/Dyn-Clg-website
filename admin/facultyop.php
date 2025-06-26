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

$con=mysqli_connect('localhost','root','','id20532735_gptplpt2');
if(isset($_GET['Add']))
{ 
    $dept=$_GET['Add'];
    $subdept="submit".$dept;


    
    ?>
    <div class="dept">
    <center>
    <h1><?php echo $dept ;?>  Details</h1>
    </center>
    
    <form  method="post" enctype="multipart/form-data">

    <label for="name">Enter Faculty name :</label>
    <input type="text" name="faculty_name" id="name"><br><br>

    <label for="post">Enter Faculty Post :</label>
    <input type="text" name="faculty_post" id="post"><br><br>

    <label for="Quali">Enter  Qualification :</label>
    <input type="text" name="faculty_quali" id="quali"><br><br>

    <label for="expi">Experience :</label>
    <input type="text" name="experience" id="expi"><br><br>

    <label for="gen">Gender :</label>
    <input type="radio" name="Gender" id="male" value="male"  >
    <label for="male">Male</label><br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <input type="radio" name="Gender" id="female" value="female" >
    <label for="female" >Female</label><br><br>

    <label for="DoB">Date of Birth :</label>
    <input type="date" name="DOB" id="DoB"><br><br>

    <label for="img">Choose Faculty photo :</label>
    <input type="file" name="faculty_img" id="img"><br><br>

    <label for="details">Enter Faculty full details :</label><br>
    <textarea name="Faculty_details" id="details"></textarea><br><br><br>

    <center>
    <input type="submit" name="<?php echo $subdept ;?>">

    </center>

    </form>
</div>

    <?php 

    if(isset($_POST[$subdept]))
    {
        //declearation
        $staffname=$_POST['faculty_name'];
        $staffpost=$_POST['faculty_post'];
        $staffquali=$_POST['faculty_quali'];
        $experience=$_POST['experience'];
        $gender=$_POST['Gender'];
        $DOB=$_POST['DOB'];
        $staffdetails=$_POST['Faculty_details'];

        $staffimg_name=$_FILES['faculty_img']['name'];
        $staffimg_type=$_FILES['faculty_img']['type'];
        $staffimg_size=$_FILES['faculty_img']['size'];
        $staffimg_temp_name=$_FILES['faculty_img']['tmp_name'];

        move_uploaded_file($staffimg_temp_name,"../images/staff_img/$staffimg_name");
        


       $check="SHOW TABLES LIKE '$dept' ";
       $checkres=$con->query($check);
       if($checkres){
            $sql = "CREATE TABLE IF NOT EXISTS `$dept`(
                id INT(11) AUTO_INCREMENT PRIMARY KEY,
                faculty_name VARCHAR(255) NOT NULL,
                faculty_post VARCHAR(255)NOT NULL,
                faculty_quali VARCHAR(255)NOT NULL,
                experience VARCHAR(255)NOT NULL,
                Gender VARCHAR(255)NOT NULL,
                DOB DATE NOT NULL,
                faculty_img VARCHAR(255)NOT NULL,
                faculty_details VARCHAR(9999)NOT NULL
            )";
            $que=mysqli_query($con,$sql);
           
$ins="INSERT INTO `$dept`(`faculty_name`,`faculty_post`, `faculty_quali`, `experience`, `Gender`, `DOB`, `faculty_img`, `faculty_details`)VALUES('$staffname', '$staffpost', '$staffquali', '$experience', '$gender', '$DOB', '$staffimg_name', '$staffdetails')";
                               $res=mysqli_query($con,$ins);
            if($res){
                header('location:facultyindex.php');
            }
            else{
            
             echo"else exc";   
            }
       }
       else{


        echo "Insert working";
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
///start
?>
<div class="dept">
<center>
<h1> Update <?php echo $row['faculty_name'] ;?>  Details</h1>
</center>

<form action="" method="post" enctype="multipart/form-data">

<label for="name">Enter Faculty name :</label>
<input type="text" name="faculty_name" id="name" value="<?php echo $row['faculty_name'];?>"><br><br>

<label for="post">Enter Faculty Post :</label>
<input type="text" name="faculty_post" id="post" value="<?php echo $row['faculty_post'];?>"><br><br>

<label for="Quali">Enter  Qualification :</label>
<input type="text" name="faculty_quali" id="quali" value="<?php echo $row['faculty_quali'];?>"><br><br>

<label for="expi">Experience :</label>
<input type="text" name="experience" id="expi" value="<?php echo $row['experience'];?>"><br><br>

<label for="DoB">Date of Birth :</label>
<input type="date" name="DOB" id="DoB" required><br><br>

<label for="img">Choose Faculty photo :</label>
<input type="file" name="faculty_img" id="img" required><br><br>

<label for="details">Enter Faculty full details :</label><br>
<textarea name="Faculty_details" id="details"><?php echo $row['faculty_details'];?></textarea><br><br><br>

<center>
<input type="submit" name="<?php echo $updept ;?>">

</center>

</form>
</div>

<?php 

if(isset($_POST[$updept]))
{
    //declearation
    $staffname=$_POST['faculty_name'];
    $staffpost=$_POST['faculty_post'];
    $sqaffquali=$_POST['faculty_quali'];
    $experience=$_POST['experience'];
    //$gender=$_POST['Gender'];
    $DOB=$_POST['DOB'];
    $staffdetails=$_POST['Faculty_details'];

    $staffimg_name=$_FILES['faculty_img']['name'];
    $staffimg_type=$_FILES['faculty_img']['type'];
    $staffimg_size=$_FILES['faculty_img']['size'];
    $staffimg_temp_name=$_FILES['faculty_img']['tmp_name'];

    move_uploaded_file($staffimg_temp_name,"../images/staff_img/$staffimg_name");
    
        $upd="UPDATE `$dept` SET `faculty_name`='$staffname',`faculty_post`='$staffpost',`faculty_quali`='$sqaffquali',`experience`='$experience',`DOB`='$DOB',`faculty_img`='$staffimg_name',`faculty_details`='$staffdetails' WHERE `id`='$id'";
        $res=mysqli_query($con,$upd);
       

        if($res){
            header('location:facultyindex.php');
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
            header('location:facultyindex.php');

        }
}

?>