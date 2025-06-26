<?php 
  $con=mysqli_connect('localhost','root','','id20532735_gptplpt2');
  $sql="SELECT * FROM labsworkshop";
  $res=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
      td{
        max-width: 200px;
        overflow-x: auto;
      }
      td::-webkit-scrollbar{
    width: 0px;
}
    </style>
</head>
<body>
  <table border="2px solid" width="100px">
  <tr> <th>sno</th><th>Labname</th><th>image</th><th>action</th></tr>
  <?php
  $i=0;
  while($row=mysqli_fetch_assoc($res))
  { $i++;
   echo "<tr><td>$i</td><td>$row[labname]</td><td>$row[image]</td><td><button><a href=labworkshop_opr.php?edit=$row[labname]>Edit</a></button><button><a href=labworkshop_opr.php?del=$row[labname]>Delete</a></button> </td></tr>";
  }
  ?>
</table>
<button> <a href="labworkshop_opr.php?newrow=<?php echo$i;?>">Add Column</a></button>
</body>
</html>