<?php
$con=mysqli_connect('localhost','root','','id20532735_gptplpt2');
$sql="SELECT * FROM `books_category`";
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
    <button> <a href="library_admin_opr.php?add">Add New row</a></button>
    <table border="2px solid" id="mt">
        <tr><th>S.NO</th> <th>Category Name</th> <th>action</th></tr>
<?php 
    $i=0;

    #While loop for Departments
    
    while($row=mysqli_fetch_assoc($res))
    {
        $category[$i]=$row['category'];
        $i++;
        $cat=$row['category'];
        echo "<tr><td>$i</td><td>$cat</td> <td><button><a href=library_admin_opr.php?edit=$cat id=$i>Edit</a></button><button><a href=library_admin_opr.php?del=$cat id=$i>Delete</a></button></td></tr>";
}
?>
    </table>
<?php
$n=count($category);
$i=0;
    #While loop for books 

while($i<$n)
{  
echo "<center><h1>$category[$i]</h1></center>";
?>

    <table border="2px solid">
        <tr> <th>S.NO</th> <th>BookName</th> <th>PublisherName</th> <th>AuthorName</th> <th>Scheme</th> <th>Bookimg</th> <th>Action</th></tr>
       <?php
       $sql="SELECT * FROM $category[$i]";
       $res=mysqli_query($con,$sql);
       $j=0;
       while($row=mysqli_fetch_assoc($res))
       { $j++;
        echo "<tr><td>$j</td><td>$row[book_name]</td><td>$row[publisher_name]</td><td>$row[author_name]</td><td>$row[scheme]</td><td>$row[book_img]</td><td><button><a href=library_books_admin_opr.php?edit=$category[$i]&id=$j>Edit</a></button><button><a href=library_books_admin_opr.php?del=$category[$i]&id=$j>Delete</a></button></td></tr>";
       }
       ?>
    </table>
    <button> <a href="library_books_admin_opr.php?add=<?php echo $category[$i];?>&id=<?php echo $j?>">Add New row</a></button>
<?php

$i++;
}
?>

</body>
</html>