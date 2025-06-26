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
    <link rel="stylesheet" href="../css/place.css">
    <link rel="stylesheet" href="../css/menu_foot.css">
    <script src="../script/scriptt.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
     .clg_logo{
            background-repeat: no-repeat;
            background-size: cover;
        }
        #aacad ,#enrol,#sidemenu{
    z-index: 10;

}
@media  screen and (max-width:430px){
  table{
      font-size:11px;
  }  
  .details{
      margin-top:110px;
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
 

    <center><h1 style="font-family:Goudy old style ;">Placements</h1></center>
    
    <div class="head">
        <div class="head_img" style="height:400px">
            <img src="../images/WhatsApp Image 2023-04-01 at 3.26.56 PM.jpeg" alt="" height="400px" width="100%">
        </div>
        <div class="head_data">
            <h2 style="font-family:Goudy old style ;">About Placements in our college</h2>
            <p>
                Placement is an important aspect of college education, and our college have a dedicated placement cell that works towards providing employment opportunities to students. The placement cell conducts various training programs to prepare students for the placement process. Companies are invited to conduct placement drives, and based on the performance, eligible students are offered job roles or internships. The alumni network also plays an important role in placements, as alumni may provide job referrals and mentorship to the students.
            </p>
        </div>
    </div>
    <br>
    <div class="details">
        <center><h2 style="font-family:Goudy old style ;" >Placements Details</h2></center>
        <table border="2px" cellspacing="0" >
        <tr> <th>Pin.no</th><th>Name</th><th>Department</th><th>Name of company</th><th>Recriuted Year</th><th>Company Logo</th></tr>
        <?php
  while($row=mysqli_fetch_assoc($res))
  {$i=1;
   echo "<tr><td>$row[pinno]</td><td>$row[name]</td><td>$row[department]</td><td>$row[companyname]</td><td>$row[recriutedyear]</td><td><img src=$row[companylogo] width=100px></td></tr>";
   $i++;
  }
  ?>    
    </table>
    </div>
</body>
</html>