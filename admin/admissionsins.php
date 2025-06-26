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
    <style>
        form{
           border:2px solid lightblue; 
           width:500px;
           height: 400px;
           border-radius: 10px;
           box-shadow: 0px 2px 3px 4px lightblue;
           margin: 10px 0px 0px 270px;
           padding-top:60px;
           padding-left:50px;
        }
    </style>
</head>
<body>
    <?php
    if(isset($_GET['add']))
    {
        ?>

        <form method="POST">
            <label>Enter year</label>
            <input type="year" name="year"><br><br>
            <label></label>
            <input type="year" name="take"><br><br>
            <?php 
                    $query = "SELECT * FROM `branches`";
                    $query_run = mysqli_query($con,$query);
                    $ins=0;
                    $re=0;
                    $names=[];
                    while($row=mysqli_fetch_assoc($query_run)){
                        $re=$re+1;
                        ?>
                        <?php echo $row['branch_code'];?><input type="number" name= "<?php echo $row['branch_code'];?>"><br><br>
                    
                        <?php
                        $names[$ins]=$row['branch_code'];
                        $ins++;
                    
                    }

                                        ?>
            <center><input type="submit" name="submitt"></center>
        </form>
        <?php
        if(isset($_POST['submitt'])){
            $year =$_POST['year'];
            $intake=$_POST['take'];
            
            $cre="CREATE TABLE IF NOT EXISTS `admissions`(
                id INT(33) AUTO_INCREMENT PRIMARY KEY,
                year VARCHAR(255) NOT NULL, intake VARCHAR(255) NOT NULL
                )";
                $que=mysqli_query($con,$cre);

                $sql="INSERT INTO `admissions`(`id`,`year`,`intake`) VALUES('','$year','$intake')";
                $gg=mysqli_query($con,$sql);
                

                
                 $bd=[];
                 $vc=[];
                 $ids=[];
                 $lll="SELECT * FROM `admissions`";
                 $nnn=mysqli_query($con,$lll);
                 $i=0;
                 $d=0;
                 while($row=mysqli_fetch_array($nnn)){
                    $d=$d+1;
                    $ids[$i]=$row['id'];
                 $i++;}

                 $i=0;
                 $g=0;
                while($i<$re)
                {
                    
                    $bd[$i]=$names[$i];
                    $fu="ALTER TABLE `admissions`
                         ADD `$bd[$i]` VARCHAR(255) NOT NULL";
                    $fuc=mysqli_query($con,$fu);
                    $vc[$i]=$_POST[$bd[$i]];
                    $j=$re;
                    $g=$g+1;
                    $i++;   
                } 
                
                $i=0;
                while($i<1)
                { $dd=$i;
                    for($s=0;$s<$g;$s++)
                    {
                  
                    $ghj="UPDATE  admissions SET `$names[$s]`= '$vc[$s]' Where `id`='$ids[$i]'";
                 
                    $query=mysqli_query($con,$ghj);
                
                    }
                    $i++;
                }
                header('location:admissions.php');
                    
            } 
            

    }
    if(isset($_GET['deleteid']))
    {
        $del=$_GET['deleteid'];
        $sql="DELETE FROM `admissions` WHERE `id`='$del'";
        $que=mysqli_query($con,$sql);
       if($que){
        header('location:admissions.php');
       }


    }
    if(isset($_GET['editid']))
    {
        $edit=$_GET['editid'];

        $sel="SELECT * FROM `admissions`WHERE `id`='$edit' ";
        $query=mysqli_query($con,$sel);
        $ddd=mysqli_fetch_assoc($query);
        ?>

        <form method="POST">
            <label>Enter year :</label>
            <input type="year" name="year" value="<?php echo $ddd['year'] ;?>"><br><br>
            <label> intake strength :</label>
            <input type="year" name="take" value="<?php echo $ddd['intake'] ;?>"><br><br>
            <?php 
                    $query = "SELECT * FROM `branches`";
                    $query_run = mysqli_query($con,$query);
                    $ins=0;
                    $re=0;
                    $names=[];
                    while($row=mysqli_fetch_assoc($query_run)){
                        $re=$re+1;
                        $names[$ins]=$row['branch_code'];
                        ?>
                        <?php echo $row['branch_code'];?><input type="number" name= "<?php echo $row['branch_code'];?>" value="<?php echo $ddd[$names[$ins]] ;?>"><br><br>
                    
                        <?php
                        
                        $ins++;
                    
                    }

                                        ?>
            <center><input type="submit" name="submitt" value="update"></center>
        </form>
        <?php
        if(isset($_POST['submitt'])){
            $year =$_POST['year'];
            $intake=$_POST['take'];
            
       

                $sql="UPDATE  `admissions` SET `year`='$year',`intake`='$intake' WHERE `id`='$edit' ";
                $gg=mysqli_query($con,$sql);
                $bd=[];
                 $vc=[];
                 $ids=[];
                 $lll="SELECT * FROM `admissions`";
                 $nnn=mysqli_query($con,$lll);
                 $i=0;
                 $d=0;
                 while($row=mysqli_fetch_array($nnn)){
                    $d=$d+1;
                    $ids[$i]=$row['id'];
                 $i++;}

                 $i=0;
                 $g=0;
                while($i<$re)
                {
                    
                    $bd[$i]=$names[$i];
                    $vc[$i]=$_POST[$bd[$i]];
                    $j=$re;
                    $g=$g+1;
                    $i++;   
                } 
                $i=0;
                while($i<1)
                { $dd=$d-1;
                    for($s=0;$s<$g;$s++)
                    {
                  
                    $ghj="UPDATE  `admissions` SET `$names[$s]`='$vc[$s]' Where `id`='$edit'";
                 
                    $query=mysqli_query($con,$ghj);
                
                    }
                    $i++;
                }
            
                header('location:admissions.php');
                    
            } 
            

    }
    ?>
</body>
 </html>