<?php 
  $con=mysqli_connect('localhost','root','','id20532735_gptplpt2');
  $sql="SELECT * FROM placement";
  $res=mysqli_query($con,$sql);
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
 
  <table border=2px solid>
  <tr> <th>sno</th> <th>Pin.no</th><th>Name</th><th>Department</th><th>Name of company</th><th>Recriuted Year</th><th>Company Logo</th> <th>action</th></tr>
  <?php
  $i=0;
  while($row=mysqli_fetch_assoc($res))
  { $i++;
   echo "<tr><td>$i</td><td>$row[pinno]</td><td>$row[name]</td><td>$row[department]</td><td>$row[companyname]</td><td>$row[recriutedyear]</td><td><img src=$row[companylogo] width=100px></td><td><button><a href=placement_opr.php?edit=$row[pinno]>Edit</a></button><button><a href=placement_opr.php?del=$row[pinno]>Delete</a></button> </td></tr>";
  }
  ?>
</table>
<button> <a href="placement_opr.php?newrow=<?php echo$i;?>">Add Column</a></button>
</body>
</html>