<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni admin index</title>
    <style>
        table{
            margin-top: 20px;
            width: 100%;
        }
         tr{
            min-height:80px;
            max-height: 80px;
            text-align: center;
        }
        td{
           width: 80px;
            height:100px;
            align-items: center;
        }
        .staffde{
            width: 200px;
            height: 150px;
            word-break:break-all;
        }
        a{
            text-decoration: none;
            color: black;
            font-size: 14px;
        }
        button{
            margin:5px;
        }
    </style>
</head>
<body>
    <?php 
    $con =mysqli_connect('localhost','root','','id20532735_gptplpt2');
    $noofbranch=0;
    $i=0;
    $query = "SELECT * FROM `branches`";
    $query_run = mysqli_query($con,$query);
    $idd=[];
    $depatid=[];
    $depatid[0]=0;
    $depatid[1]=1;
    $department=[];
   
    while($row=mysqli_fetch_assoc($query_run))
    {
        $depatid[$i]=$row['branch_code']."_alumni";
        $department[$i]=$depatid[$i];
        
        $id=$row['id'];
        $idd[$i]=$id;

        $noofbranch=$i;
        $i++;

    }
   
  

    ?>
    <?php 
    $j=0;
      $k=0;
      While($k<=$noofbranch)
      {
        ?>

        <table border="2px" cellspacing="0" cellpadding="10px">
            <thead><th colspan="10"><h3><?php echo $department[$k] ; ?></h3></th></thead>
            <thead>
            <th>S.no</th>
            <th>pin.no</th>
            <th>name</th>
            <th>batch</th>
            <th>qualification</th>
            <th>dooing job/studing</th>
            <th>Designation</th>
            <th>gmail</th>
            <th>mobile</th>
            <th>photo</th>
            </thead>
            <tbody>
                
                <?php 
              
               if($k==$j){
                $j++;
                $dept=$department[$k];
                
                $sqll= "CREATE TABLE IF NOT EXISTS `$dept`(
                    id INT(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
                    pin_num VARCHAR(255) NOT NULL,
                    alumni_name VARCHAR(255) NOT NULL,
                    alumni_quali VARCHAR(255) NOT NULL,
                    workor VARCHAR(255) NOT NULL,
                    Designation VARCHAR(255) NOT NULL,
                    mobile VARCHAR(255) NOT NULL,
                    email VARCHAR(255) NOT NULL,
                    photo VARCHAR(999) NOT NULL,
                    batch VARCHAR(999) NOT NULL
                )";
                $que=mysqli_query($con,$sqll);
                

                $selec="SELECT * FROM `$dept`";
                $que=mysqli_query($con,$selec);
                $i=0;
                $ids=[];
                while($row=mysqli_fetch_array($que)){
                    
                    $ids[$i]=$row['id'];
                    $editid=$ids[$i];
                    
                    $i++;
                    ?>
                 <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row['pin_num'] ;?></td>
                    <td><?php echo $row['alumni_name'] ;?></td>
                    <td><?php echo $row['batch'] ;?></td>
                    <td><?php echo $row['alumni_quali'] ;?></td>
                    <td><?php echo $row['workor'] ;?></td>
                    <td><?php echo $row['Designation'] ;?></td>
                   
                    <td><?php echo $row['email'] ;?></td>
                    <td><?php echo $row['mobile'] ;?></td>
                    <td><img id="staff_img" src="<?php echo "../images/staff_img/".$row['photo']; ?>" width="100px" height="100px" alt=""></td>
                    

                    <td>
                        <button><a href="alumniop.php?edit=<?php echo $editid;?>&dept=<?php echo$dept; ?>">Edit</a></button>
                        <button><a href="alumniop.php?delete=<?php echo $editid;?>&dept=<?php echo$dept; ?>">Delete</a></button>
                    </td>
                </tr>
                <?php } ?>
                <tr>
                    <td colspan="9"></td>
                    <td>
                        <button><a href="alumniop.php?Add=<?php echo"$dept" ;?>">+Add</a></button>
                    </td>
                </tr> 
                
                <?php
               }

                   
               ?>
                

            </tbody>
            

        </table>

<?php
          $k++;
      }
    ?>
    
    
</body>
</html>