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
 
</head>
<body>
   <table border="2px" cellspacing="0" cellpadding="40px">
        <thead>
            <th>year</th>
            <th>intake strength</th>
            <th colspan="4">branches</th>
        </thead>
        <thead>
            <th></th>
            <th></th>
            <?php 
                $query = "SELECT * FROM `branches`";
                $query_run = mysqli_query($con,$query);
                $f=0;
                $cc=[];
                while($row=mysqli_fetch_assoc($query_run)){
                    ?>
                    <th><?php echo $row['branch_code'];?></th>
                    <?php
                    $cc[$f]=$row['branch_code'];
                    $f=$f+1;
                }
                ?>
                <th>operations</th>
               
        </thead>
<tbody>
        <?php
        $gf=[];
    $sql="SELECT * FROM `admissions`";
    $que=mysqli_query($con,$sql);
    $i=0;
    while($row=mysqli_fetch_assoc($que))
    {
        $gf[$i]=$row['id'];
            ?>
    <tr>
        <td><?php echo $row['year']?></td>
        <td><?php echo $row['intake']?></td>
        <?php

        $x=0;
        while($x<$f){
            ?>
            <td><?php echo $row[$cc[$x]];?></td>
            <?php
            $x++;
        }
        ?>
        <td>
            <button><a href="admissionsins.php?editid=<?php echo $gf[$i]?>">Edit</a></button>
            <button><a href="admissionsins.php?deleteid=<?php echo $gf[$i]?>">Delete</a></button>
        </td>

    </tr>
    
    <?php
    $i++;
    }
      ?>
      <tr>
        <td colspan="6"></td>
        <td><button><a href="admissionsins.php?add=add">+Add New</a></button></td>
    </tr>
      </tbody> 
    </table>
</body>
</html>