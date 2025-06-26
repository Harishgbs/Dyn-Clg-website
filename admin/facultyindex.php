<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty admin index</title>
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
    $department[0]="Office_staff";
    $department[1]="General_department_staff";
    while($row=mysqli_fetch_assoc($query_run))
    {
        $depatid[$i]=$row['branch_code']."_staff";
        $department[$i+2]=$depatid[$i];
        
        $id=$row['id'];
        $idd[$i]=$id;

        $noofbranch=$i+2;
        $i++;

    }
   
  
    $department[$noofbranch+1]="Other_staff";

    ?>
    <?php 
    $j=0;
      $k=0;
      While($k<=$noofbranch+1)
      {
        ?>

        <table border="2px" cellspacing="0" cellpadding="10px">
            <thead><th colspan="10"><h3><?php echo $department[$k] ; ?></h3></th></thead>
            <thead>
            <th>S.no</th>
            <th>Name</th>
            <th>Post</th>
            <th>Qualification</th>
            <th>Experience</th>
            <th>Gender</th>
            <th>DOB</th>
            <th>Photo</th>
            <th>Details</th>
            </thead>
            <tbody>
                
                <?php 
              
               if($k==$j){
                $j++;
                $dept=$department[$k];
                
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
                    <td><?php echo $row['faculty_name'] ;?></td>
                    <td><?php echo $row['faculty_post'] ;?></td>
                    <td><?php echo $row['faculty_quali'] ;?></td>
                    <td><?php echo $row['experience'] ;?></td>
                    <td><?php echo $row['Gender'] ;?></td>
                    <td><?php echo $row['DOB'] ;?></td>
                    <td><img id="staff_img" src="<?php echo "../images/staff_img/".$row['faculty_img']; ?>" width="100px" height="100px" alt=""></td>
                    <td><div class="staffde"><?php echo $row['faculty_details'] ;?></div></td>

                    <td>
                        <button><a href="facultyop.php?edit=<?php echo $editid;?>&dept=<?php echo $dept ; ?>">Edit</a></button>
                        <button><a href="facultyop.php?delete=<?php echo $editid;?>&dept=<?php echo $dept ; ?>">Delete</a></button>
                    </td>
                </tr>
                <?php } ?>
                <tr>
                    <td colspan="9"></td>
                    <td>
                        <button><a href="facultyop.php?Add=<?php echo "$dept" ;?>">+Add faculty</a></button>
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