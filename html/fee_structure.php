<?php
$con =mysqli_connect('localhost','root','','id20532735_gptplpt2');
$sql= "SELECT * FROM fee_structure";
$res= mysqli_query($con,$sql);
$i=1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fee structure</title>
    <link rel="stylesheet" href="../css/fee_structure.css">
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
       
</style>
</head>
<body >
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
 

    <center><h1 style="font-family:'Franklin Gothic Medium';">Fee structure</h1></center>
    <div class="tab"style="display: flex;
                            justify-content: center;">
            <!-- <table border="1px" cellspacing="0" cellpadding="14px" width="80%">
                <tr><th>S.No</th><th>Fee's govt</th><th>  </th></tr>
                <tr><td>  1  </td><td> Tuition Fee</td><td>₹2000</td></tr>
                <tr><td>  2  </td><td> Course Work Fee</td><td> ₹300   </td></tr>
                <tr><td>  3 </td><td>  Game Fee</td><td>  ₹100  </td></tr>
                <tr><td>  4  </td><td>  Association Fee</td><td>  ₹100  </td></tr>
                <tr><td>  5  </td><td>  Laboratory and<br> Workshop</td><td>  ₹900  </td></tr>
                <tr><td>  6  </td><td>  Library-Nonrefundable fee</td><td>  ₹400  </td></tr>
                <tr><td>  7  </td><td>  Admission Fee</td><td> ₹100   </td></tr>
                <tr><td>  8  </td><td>  Syllabus Book</td><td> ₹100   </td></tr>
                <tr><td>  9  </td><td>  Board Recognition Fee</td><td>  ₹250  </td></tr>
                <tr><td>  10  </td><td> Alumni Fee (only at the time of admission)Management Information System</td><td>  ₹100  </td></tr>
                <tr><td>  11  </td><td>  Service Fee per Year</td><td>  ₹300  </td></tr>
                <tr><td>  12  </td><td>  TECH Fest fee per year</td><td> ₹50   </td></tr>
                <tr><td>  13  </td><td>  Total</td><td> ₹4700   </td></tr>
            </table> -->
            <table border="1px" cellspacing="0" cellpadding="14px" width="80%">
                <tr><th>S.No</th><th>Fee's Govt</th><th>Amount</th></tr>
              <?php   
                while($row=mysqli_fetch_assoc($res))
                {
                    echo "<tr><td>$i</td><td>",$row['fee_description'],"</td><td>₹",$row['amount'],"</td></tr>";
                    $i++;
                }
                $n = mysqli_num_rows($res);
                $sum = mysqli_fetch_assoc(mysqli_query($con,"SELECT SUM(amount) FROM fee_structure"));
                echo "<tr><td>",$n+1,"</td><td>Total</td><td>₹",$sum['SUM(amount)'],"</td></tr>"
              ?>
            </table>
    </div>
</body>
</html>