<?php
   $con =mysqli_connect('localhost','root','','id20532735_gptplpt2');
   $sql="SELECT * FROM infrastructure";
   $res = mysqli_query($con,$sql);
   function images($dbimgs){
      $dbimgs=explode(",",$dbimgs);
      for($i=0;$i<sizeof($dbimgs);$i++)
      {
        echo "<img src=$dbimgs[$i] alt=img$i>";
      }
   }
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
    <table border=2px>
        <thead><th>s.no</th> <th>Roomname</th> <th>image</th><th>Action</th></thead>
        <tbody>
           <?php
           $i=1;
           while($row=mysqli_fetch_assoc($res))
           {
             echo "<tr><td>$i</td><td>$row[roomname]</td><td>$row[image]</td><td><button name=edit><a href=infra_insert.php?edit=$row[roomname]>Edit</a></button><button name=delete><a href=infra_insert.php?delete=$row[roomname]>Delete</a></button></td></tr>";
             $i++;
           }
           ?>
           <button><a href="infra_insert.php?add=1">Add new Room</a></button>
        </tbody>
    </table>

</body>
</html>