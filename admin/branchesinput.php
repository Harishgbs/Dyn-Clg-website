<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>branches page</title>
    <style>
        .branchcont{
            display:flex;
            border: 2px solid rgb(0, 0, 0,0.3);
            border-radius: 5px;
            justify-content: space-around;
            padding: 20px;
            margin:5px;
        }
        .branchcont input{
            width: 250px;
            border-top: none;
            border-left: none;
            border-right: none;
        }
        
    </style>
</head>
<body>
    <center>
    <form action="" method="post">
        <label for="#"><b>choose noof branches:</b></label>
        <input type="number" name="noonbranchs">
         <button type="submit" name="newbranch">add</button><br><br>
    </form>
    </center>
    <?php

    if(isset($_POST['newbranch'])){
$noof=$_POST['noonbranchs'];
$i=1;
?>
<form action="branchesop.php?noof=<?php echo $noof ; ?>" method="post" enctype="multipart/form-data">
<?php
while($i<=$noof){
    ?>
 <div class="branchcont">
    <div class="branch_name">
        <label for="">Branch name :</label>
        <input type="text" name="branchname[]"><br>
    </div>
    <div class="branch_code">
        <label for="">Branch code :</label>
        <input type="text" name="branchcode[]"><br>
    </div>
    <div class="branch_img">
        <label for="">Branch image :</label><br>
        <input type="file" name="branchimg[]"><br>
    </div>
 </div>
        
    <?php
$i++;
}
?>
<center><input type="submit" name="branchsubmit"></center>

    </form>
<?php
    }
   

    ?>
    
</body>
</html>