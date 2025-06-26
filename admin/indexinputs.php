<?php 
$con=mysqli_connect('localhost','root','','id20532735_gptplpt2');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>indexinputs</title>
    <style>
        .cont{
            width: 80%;
            margin: auto;
            border:2px solid;
            
        }
        #indexinput{
            padding:30px;
            padding-left:60px;
            width: 70%;  
        }
        #aboutclg{
            margin:auto;
            width:450px;
            height:180px;
        }
        #vision_clg{
            margin:auto;
            width:450px;
            height:180px;
        }
        #misclg{
            margin:auto;
            width:450px;
            height:180px;
        }
        
    </style>
</head>
<body>
    <?php
    $sql="SELECT * FROM `indexdata` WHERE `id`='143'";
    $que=mysqli_query($con,$sql);
    $roe=mysqli_fetch_assoc($que);
     ?>
    <div class="cont">
        
        <form method="POST" id="indexinput" enctype="multipart/form-data">

            <label for="clgname"><b>Enter College Name :</b></label>
            <input type="text" name="clg_name" id="clgname" value="<?php echo $roe['clg_name'];?>" required><br><br>

            <label for="clgplace"><b>Enter College place :</b></label>
            <input type="text" name="clg_place" id="clgplace" value="<?php echo $roe['clg_place'];?>" required><br><br>

            <label for="clglogo"><b>Choose college logo :</b></label>
            <input type="file" name="clg_logo" id="clglogo" required><br><br>

            <label for="clgimgs"><b>Choose college photos(2 or more) :</b></label>
            <input type="file" name="clgimg[]" id="clgimgs" multiple required><br><br>

            <label for="aboutclg"><b>A para about college :</b></label><br>
            <textarea name="about_clg" id="aboutclg" ><?php echo $roe['about_clg'];?></textarea><br><br>

            <label for="project_done"><b>Choose images of Project done(2 or more) :</b></label>
            <input type="file" id="project_done" name="projectdone[]" multiple ><br><br>
            
            <label for="extra_curricular"><b>Choose images of Extra-Curricular Activities (2 or more):</b></label>
            <input type="file" id="extra_curricular" name="extra[]" multiple ><br><br>

            <label for="vision_clg"><b>Enter Vision of college :</b></label><br>
            <textarea name="vision_clg" id="vision_clg" required><?php echo $roe['vision_clg'];?></textarea><br><br>

            <label for="misclg"><b>Enter Mission of college :</b></label><br>
            <textarea name="mission_clg" id="misclg"  required><?php echo $roe['mission_clg'];?></textarea><br><br>
            
            
           
            <center><input type="submit" name="subindex"></center>
        </form>
        
    </div>
    <?php
$con=mysqli_connect('localhost','root','','id20532735_gptplpt2');

if($con->connect_error ){
    die('Connection Failed'.$con->connect_error);
 }
 else{

    if(isset($_POST['subindex']))
    {
    $clg_name=$_POST['clg_name'];
    $clg_place=$_POST['clg_place'];
    $about_clg=$_POST['about_clg'];
    $vision_clg=$_POST['vision_clg'];
    $mission_clg=$_POST['mission_clg'];

    $clg_logo=$_FILES['clg_logo']['name'];
    $logo_type=$_FILES['clg_logo']['type'];
    $logo_size=$_FILES['clg_logo']['size'];
    $logo_temp_name=$_FILES['clg_logo']['tmp_name'];

    move_uploaded_file($logo_temp_name,"../images/index_img/$clg_logo");
       

    $noof=count($_FILES['clgimg']['name']);
    $i=0;
    while($i<$noof){
        $clg_imgs=$_FILES['clgimg']['name'][$i];
        $clg_temp_name=$_FILES['clgimg']['tmp_name'][$i];
        $targetpath1="images/index_img/".$clg_imgs;
        $imgs[$i]=$targetpath1;
        move_uploaded_file($clg_temp_name,$targetpath1);
        $i++;
    }


    $j=0;
    $noproj=count($_FILES['projectdone']['name']);
    while($j<$noproj){
        $pro_imgs=$_FILES['projectdone']['name'][$j];
        $pro_temp_name=$_FILES['projectdone']['tmp_name'][$j];
        $targetpath2="images/index_img/".$pro_imgs;
        $proimgs[$j]=$targetpath2;
        move_uploaded_file($pro_temp_name,$targetpath2);
        $j++;
    }


    $k=0;
    $noextra=count($_FILES['extra']['name']);
    while($k<$noextra){
        $extra_imgs=$_FILES['extra']['name'][$k];
        $extra_temp_name=$_FILES['extra']['tmp_name'][$k];
        $targetpath3="images/index_img/".$extra_imgs;
        $extraimgs[$k]=$targetpath3;
        move_uploaded_file($extra_temp_name,$targetpath3);
        $k++;
        }
        $imgs=implode(",",$imgs);
        $proimgs=implode(",",$proimgs);
        $extraimgs=implode(",",$extraimgs);
    
       
         
        $id=143;

        $i=0;
        $fet=  "SELECT  COUNT(*) as count FROM `indexdata`";
        $quee=mysqli_query($con,$fet);
        $row=$quee->fetch_assoc();
        if($row["count"]==0){
            $sql="INSERT INTO `indexdata`(`id`,`clg_name`,`clg_place`,`clg_logo`,`clg_img`,`about_clg`,`pro_imgs`,`extra_imgs`,`vision_clg`,`mission_clg`) VALUES ('$id','$clg_name','$clg_place','$clg_logo','$imgs','$about_clg','$proimgs','$extraimgs','$vision_clg','$mission_clg')";
            $res=mysqli_query($con,$sql);
           
            
        }
        else{
            $sql="UPDATE `indexdata` SET `clg_name`='$clg_name',`clg_place`='$clg_place',`clg_logo`='$clg_logo',`clg_img`='$imgs',`about_clg`='$about_clg',`pro_imgs`='$proimgs',`extra_imgs`='$extraimgs',`vision_clg`='$vision_clg',`mission_clg`='$mission_clg' WHERE `id`='$id' ";
            $que=mysqli_query($con,$sql);


        }
        header('location:indexadmin.php');

       
    }

 }
?>
</body>
</html>