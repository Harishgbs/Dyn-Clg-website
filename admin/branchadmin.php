<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Branches admin</title>
    <style>
         tr{
            min-height:80px;
            max-height: 80px;
            text-align: center;
        }
        td{
            
            align-items: center;
        }
    </style>
</head>
<body>
    <?php
    $con=mysqli_connect('localhost','root','','id20532735_gptplpt2');
    if(!$con){
       echo "CONNECTION FAILED !!!";
    }
    else{
    $query = "SELECT * FROM `branches` ORDER BY `id` ASC";
                 
    $query_run = mysqli_query($con,$query);
    
    ?>
    <center>
    <table border="2px" cellspacing="0" cellpadding="10px" width="80%" >
        <thead>
            <th>S.no</th>
            <th>Branch name</th>
            <th>Branch code</th>
            <th>Branch image</th>
            <th></th>
        </thead>
        <tbody align-text="center">
            <?php
            $noofbranch=0;
            $num=0;
            $i=0;
            $ids=[];
            while($row=mysqli_fetch_assoc($query_run)){
               
                $id=$row['id'];
                $ids[$i]=$id;
                ?>
                <tr>
                    <td><?php echo $i+1 ;?></td>
                    <td><?php echo $row['branch_name'] ;?></td>
                    <td><?php echo $row['branch_code'] ;?></td>
                    <td><?php echo $row['branch_img'] ;?></td>
                    <td> <button><a href="branchesop.php?deleteid=<?php echo $id ;?>">Delete</a></button></td>
                </tr>
                <?php
                 $i++;
                 $noofbranch=$i;
                $num=$row['id']+1;
                
            }
        }
       
       
     ?>

<td colspan="3"><button><a href="branchesop.php?editid=<?php echo $id ;?>">Edit Branches</a></button></td>
<td colspan="2"><button><a href="branchesop.php?add=<?php echo $num ; ?>">+Add Branch</a></button></td>
        </tbody>

    </table>
    </center>
    
</body>
</html>
