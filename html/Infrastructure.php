<?php
   $con =mysqli_connect('localhost','root','','id20532735_gptplpt2');
   $sql="SELECT * FROM infrastructure";
   $res = mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>website</title>
    <link rel="stylesheet" href="../css/Infrastructure.css">
<script src="../script/scriptt.js"></script>
<link rel="stylesheet" href="../css/menu_foot.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

    
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

<body>
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
    <?php
         echo  "<div class=container>";
while($row=mysqli_fetch_assoc($res))
  {   

        echo "<h1>$row[roomname]</h1>";
        echo "<div class=image-container>";
        $dbimgs=$row['image'];
        $dbimgs=explode(",",$dbimgs);
        for($i=0;$i<sizeof($dbimgs);$i++)
        {
            ?>
            <div class=image><img id=img<?=$i+1?> src="<?=$dbimgs[$i]?>"></div>
            <?php
           
        }
        echo "<div class=popup-image>";
        echo "<span>&times;</span>";
        echo "<img src=# alt=>";
        echo "</div>";
        echo "</div>";

    }
    echo "</div>"; 
?>
<br>
<script>
    document.querySelectorAll('.image-container img').forEach(image =>{
        image.onclick = () =>{
            document.querySelector('.popup-image').style.display = 'block';
            document.querySelector('.popup-image img').src = image.getAttribute('src');
        }
    });
    document.querySelector('.popup-image span').onclick = () =>{
    document.querySelector('.popup-image').style.display = 'none';
    }
</script>
</body>
</html>