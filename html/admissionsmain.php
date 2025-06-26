<?php
  $con=mysqli_connect('localhost','root','','id20532735_gptplpt2');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/menu_foot.css">
    <script src="../script/scriptt.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        table{
            margin:auto;
            box-shadow:-3px 3px 10px 5px rgb(0,0,0,0.5) ;
        }
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
 
    <table border="2px" cellspacing="0" cellpadding="20px">
        <thead>
            <th>year</th>
            <th>intake strength</th>
            <th colspan="4">branches</th>
        </thead>
        <thead>
            <th></th>
            <th></th>
            <?php 
                $query = "SELECT * FROM `branches`";
                $query_run = mysqli_query($con,$query);
                $f=0;
                $cc=[];
                while($row=mysqli_fetch_assoc($query_run)){
                    ?>
                    <th><?php echo $row['branch_code'];?></th>
                    <?php
                    $cc[$f]=$row['branch_code'];
                    $f=$f+1;
                }
                
                ?>
                
               
        </thead>
<tbody>
        <?php
        $gf=[];
    $sql="SELECT * FROM `admissions`";
    $que=mysqli_query($con,$sql);
    $i=0;
    while($row=mysqli_fetch_assoc($que))
    {
        $gf[$i]=$row['id'];
            ?>
    <tr>
        <td><?php echo $row['year']?></td>
        <td><?php echo $row['intake']?></td>
        <?php

        $x=0;
        while($x<$f){
            ?>
            <td><?php echo $row[$cc[$x]];?></td>
            <?php
            $x++;
        }
        ?>
       

    </tr>
    
    <?php
    $i++;
    }
      ?>
     
      </tbody> 
    </table>
</body>
</html>