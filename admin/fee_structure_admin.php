<?php
$con = mysqli_connect('localhost','root','','id20532735_gptplpt2');
$sql = "SELECT * FROM fee_structure";
$res = mysqli_query($con,$sql);
$n = mysqli_num_rows($res);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      #sn{
        width:50px;
      }
    </style>
</head>
<body>
     <div class="main">
     <table border="1px" cellspacing="0" cellpadding="14px" width="80%" id="table">
        <thead><tr><th>S.No</th><th>Fee's govt</th><th>Amount</th> <th>Edit</th></tr></thead>
        <tbody id="bodyid">
      <?php 
      $id=[];  
      $num=0;
      $i=0;
        while($row=mysqli_fetch_assoc($res))
        {
          $num+=1;
          $id[$i]=$row['sno'];
          ?>
          <tr><td><?php echo$num;?></td><td><?php echo $row['fee_description']?></td><td>₹<?php echo$row['amount']?></td><td> <button ><a href="FSO.php?editid=<?php echo$id[$i];?>">Edit</a></button><button><a href="FSO.php?deleteid=<?php echo$id[$i];?>">delete</a></button></td></tr>
          <?php
          $i++;
        }        
        $sum = mysqli_fetch_assoc(mysqli_query($con,"SELECT SUM(amount) FROM fee_structure"));
        echo "<tr><td colspan=2><center>Total</center></td><td>₹",$sum['SUM(amount)'],"</td><td><button id=add name=add><a href=FSO.php> Add new row</button></td></tr>";
      ?>
      </tbody>
    </table>
     </div>
</body>
</html>