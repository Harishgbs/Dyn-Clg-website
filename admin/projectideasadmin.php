<?php 
$con=mysqli_connect('localhost','root','','id20532735_gptplpt2');

if(isset($_GET['del']))
{
    $id=$_GET['del'];
    $sql1="DELETE FROM `project_ideas` WHERE `id`='$id'";
    $result2 = mysqli_query($con,$sql1); 
    if($result2){
        header('location:projectideasadmin.php');

    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>project idesa admin page</title>
    <style>
        img{

            background-size: cover;
            width:100px;
            height:100px;
        }
        .prodetail{
            width:200px;
            height: 100px;
            overflow-y: scroll;
            word-break: break-all;
        }
        
    </style>
</head>
<body>
    <table border="2px" cellspacing="0" cellpadding="10px">
        <thead>
            <th>S.no</th>
            <th>Student name</th>
            <th>email</th>
            <th>college name</th>
            <th>student Pin</th>
            <th>Project title</th>
            <th>Project details</th>
            <th>photo</th>

        </thead>
        <tbody>
            <?php 
            $j=0;
            $ids=[];
            $sql="SELECT * FROM `project_ideas`";
            $que=mysqli_query($con,$sql);
            while($row=mysqli_fetch_assoc($que))
            {
              $ids[$j]=$row['id'];
            ?>
            <tr>
                <td><?php echo $j+1;?></td>
                <td><?php echo $row['Student_name']?></td>
                <td><?php echo $row['Email']?></td>
                <td><?php echo $row['College_name']?></td>
                <td><?php echo $row['Pin_num']?></td>
                <td><?php echo $row['Project_title']?></td>
                <td><div class="prodetail"><?php echo $row['Project_description']?></div></td>
                <td>
                
                <img src="<?php echo "../images/project_img/".$row['Project_image']; ?>"    >

                </td>
                <td><button><a href="projectideasadmin.php?del=<?php echo $ids[$j]?>">Delete</a></button></td>
            </tr>
            <?php
                $j++;                    
                } ?>

        </tbody>
    </table>
    
</body>
</html>
