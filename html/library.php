<?php
$con=mysqli_connect('localhost','root','','id20532735_gptplpt2');
$sql="SELECT * FROM  `books_category`";
$res=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <link rel="stylesheet" href="../css/library.css">
    <link rel="stylesheet" href="../css/menu_foot.css">
    <script src="../script/scriptt.js"></script>
    <script src="../script/library.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>GPT-PLPT_Library</title>
    <style>
     .clg_logo{
            background-repeat: no-repeat;
            background-size: cover;
        }
        #aacad ,#enrol,#sidemenu{
    z-index: 10;

}
    </style>
</head>
<body onload="last()">
<header>
    <?php 
    $sql="SELECT * FROM `indexdata`";
    $qu=mysqli_query($con,$sql);
    $rr=mysqli_fetch_assoc($qu);
    ?>
            
            <div class="clg_logo" style="background-image:url('../images/index_img/<?php echo $rr['clg_logo'];?>');">
                

            </div>
            <div class="clg_name">
                <p><b class="govt"><?php echo $rr['clg_name'];?>,</b><b class="plpt"><?php echo $rr['clg_place'];?></b></p>
            </div>
        
            <!-- <button</button> -->
             
            <menu class="menuu" >
                <li onclick="displaymenu()" id="menu_but"><i class="fa-solid fa-bars" style="color: white;"></i></li>
                <a id="home_btn" href="../index.php"><i class="fa-solid fa-house"></i></a>
                <ul id="sidemenu">
                    <li>
                        <a onclick="aacad()" href="#">Academics&nbsp;<i class="fas fa-caret-down"></i></a>
                        
                        <div class="dropdown_acad" id="aacad" >
                            <ul>
                                <li>
                                    <a href="dept.php">Branches&nbsp;</a>
                                   
                                </li>
                                <li><a href="labsworkshop.php">Labs/Workshop</a></li>
                                <li><a href="library.php">Library</a></li>
                                <li><a href="faculty.php">faculty</a></li>
                                <li><a href="alumni.php">Alumni</a></li>
                                <li><a href="project_idea.php">Project ideas</a></li>

                            </ul>
                        </div>
                    </li>
                    <li><a href="Placements.php">Placements</a></li>
                    <li><a href="Infrastructure.php">Infrastructure</a></li>
                    <li><a href="Events.php">Events</a></li>
                    <li onclick="show()">
                        <a href="#">Enrollment&nbsp;<i class="fas fa-caret-down"></i></a>
                        <div class="dropdown_acad"  id="enrol">
                            <ul>
                                <li><a href="admissionsmain.php">Admissions</a></li>
                                <li><a href="fee_structure.php">fee_structure</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
                
            </menu>
          
        </header>
 

  <div class="mc">
         <h1 class="heading">Library</h1>
        <center><h2>Welcome to our college Library</h2></center>
        <img id="lib_img" src="../images/library3.jpeg" alt="">
        <center><h1>Text Books available</h1></center>
        <div class="branchmenu">
            <?php 
            $i=0;
            while($row=mysqli_fetch_assoc($res))
            {$i++;
                $branname[$i]=$row['category'];
            ?>
            <h3 class=m  onclick="display('m<?php echo$i?>')"><?php echo $row['category']?></h3>
            
<?php } ?>
        </div>
       <?php 
       $j=0;
        while($j<$i)
        {$j++
       ?>
        <div id="m<?php echo $j?>">
        <h2><?php echo $branname[$j]?></h2>
        <?php 
        $sql="SELECT * FROM $branname[$j]";
        $res=mysqli_query($con,$sql);
        while($row=mysqli_fetch_assoc($res))
        {
        ?>
        <div class="textbooks">
            <div class="book" >
                <img src="<?php echo$row['book_img'];?>">
                <div class="data">
                    <b>BookName:</b><?php echo$row['book_name'];?><br>
                    <b>PublisherName:</b><?php echo $row['publisher_name']?><br>
                    <b>AuthorName:</b><?php echo$row['author_name'];?><br>
                    <b>Scheme:</b><?php echo$row['scheme'];?>
                </div>
            </div>
        </div>
        <?php }?>
        </div>
        <?php }?>
  </div>
</body>
</html>
