<?php
$con=mysqli_connect('localhost','root','','id20532735_gptplpt2');

if($con->connect_error ){
    die('Connection Failed'.$con->connect_error);
 }
 else{
   
    if(isset($_POST['subindex'])){
        $id=0;
        $clg_name=$_POST['clg_name'];
        $clg_place=$_POST['clg_place'];
        $about_clg=$_POST['about_clg'];
        $vision_clg=$_POST['vision_clg'];
        $mission_clg=$_POST['mission_clg'];
        // paste
        $clg_logo=$_FILES['clg_logo']['name'];
        $logo_type=$_FILES['clg_logo']['type'];
        $logo_size=$_FILES['clg_logo']['size'];
        $logo_temp_name=$_FILES['clg_logo']['tmp_name'];

        move_uploaded_file($logo_temp_name,"../images/index_img/$clg_logo");
        echo $clg_logo ;
       
       $sql="UPDATE `indexdata` SET `id`='$id',`clg_name`='$clg_name',`clg_place`='$clg_place',`clg_logo`='$clg_logo',`about_clg`='$about_clg',`vision_clg`='$vision_clg',`mission_clg`='$mission_clg' WHERE `id`='$id' ";
        $res=mysqli_query($con,$sql);
        if($res){
            echo "hello";
        }
        else{
            echo"hel";
        }
    }

 }
?>