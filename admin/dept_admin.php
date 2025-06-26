<?php
$con=mysqli_connect('localhost','root','','id20532735_gptplpt2');
$sql="SELECT branch_code FROM branches";
$res=mysqli_query($con,$sql);
$i=0;
while($row=mysqli_fetch_assoc($res))
{    $tname="$row[branch_code]_dept";
    ?>
    <h1><?=$row['branch_code']?></h1>
      <table border="2px solid">
        <tr> <th>Heading</th> <th>Data</th> <th>Action</th></tr>
        <?php 
        $sql="SELECT * FROM $tname";
        $res1=mysqli_query($con,$sql);
        while($row=mysqli_fetch_assoc($res1))
        {
          ?>
            <tr> <td><?=$row['heading']?></td><td><?=$row['rdata'];?></td><td><button><a href="dept_opr.php?tname=<?=$tname?>&edit=<?=$row['heading']?>">Edit</a></button></td></tr>
          <?php
        }
        ?>
      </table>
      <button><a href="dept_opr.php?add=<?=$tname?>">Add a PDF</a></button>
    <?php
}
?>