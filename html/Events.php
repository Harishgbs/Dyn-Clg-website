
<!DOCTYPE html>
<html lang="en">
<?php
  $con=mysqli_connect('localhost','root','','id20532735_gptplpt2');
  
    ?>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
    <link rel="stylesheet" href="../css/events.css" type="text/css">
    <!-- <link rel="stylesheet" href="../css/.css"> -->
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
<section>
   
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
       
       $connection =mysqli_connect('localhost','root','','id20532735_gptplpt2');
       if($connection->connect_error ){
   
          die('Connection Failed'.$connection->connect_error);
          
       }  
       if(true)
       {
        $query1 = "SELECT * FROM `upcomming_events` WHERE `id`=0 ";

        $query_run1 = mysqli_query($connection,$query1);
       while($row = mysqli_fetch_assoc($query_run1)){

       ?>
<?php

if(!isset($_POST['noeve']))
{
}
?>
                
    <div class="up_events" style="display: block;">
                <center>
                    <h1 style="font-size: 28px;font-family: 'Franklin Gothic Medium';">Upcomming Events</h1>
                </center>
       <h3 style="display: flex;justify-content:end; margin-right:50px;">Date :<?php echo $row['Event_conducting_on'];?></h3>
        <center>
         <h1 style="font-size: 38px;font-family: 'Lucida Sans Unicode';"><?php echo $row['Event_name'];?></h1>
         <p><?php echo $row['Event_details'];?></p><br><br>
        </center>
        <h3 style="display: flex;justify-content:end; margin-right:50px;">Conducting by :<?php echo $row['Event_conducting_by'];?></h3>
    </div>
    <?php

       }
    }
?>
        <hr color="blue">
        
        <center><h1 style="font-size: 28px;
            font-family: 'Franklin Gothic Medium';">EVENTS</h1></center>
<div class="container">
        


<?php
$con =mysqli_connect('localhost','root','','id20532735_gptplpt2');

   if(true)
   {
         $query = "SELECT * FROM `completed_events` ORDER BY `id` DESC";

         $query_run = mysqli_query($con,$query);
         
         

         $incre=0;
        while($row = mysqli_fetch_assoc($query_run))
        {
            if($incre%2==0)
            {
            $incre++ ;
                ?>
                    <div class="event_left">
                        <div class="left_img">
                            <img src="<?php echo "../images/Events_img/".$row['eve_imgs']; ?>" >
                       
                        </div>
                        <div class="left_data">
                        <center><h2><?php echo $row['Event_name']; ?></h2></center>
                            <h3 style="display: flex;justify-content:end; margin-right:50px;">Date :<?php echo $row['Event_conducted_date'];?></h3><br>
                            <center>
                                <?php echo $row['About_Event']; ?>
                            </center><br><br>
                            <h3 style="display: flex;justify-content:end; margin-right:50px;">Conducted by :<?php echo $row['Event_conducted_by'];?></h3>

                        </div>
                    </div>
                <?php
            }
                else
            { $incre++ ;
                ?>
                    <div class="event_right">
                        <div class="right_data">
                            <center><h2><?php echo $row['Event_name']; ?></h2></center>
                            <h3 style="display: flex;justify-content:end; margin-right:50px;">Date :<?php echo $row['Event_conducted_date'];?></h3><br>
                            <center>
                                <?php echo $row['About_Event']; ?>
                            </center><br><br>
                            <h3 style="display: flex;justify-content:end; margin-right:50px;">Conducted by :<?php echo $row['Event_conducted_by'];?></h3>

                        </div>
                        <div class="right_img">
                        <img src="<?php echo "../images/Events_img/".$row['eve_imgs']; ?>" >
                        </div>
                    </div>
                <?php
            }
        }
   }
?>     <!-- php ends here -->
       
      
</div>   

    </body>
    <footer>
        <div class="latest_links">

        </div>
        <div class="must">
            <ul>
                <li><a href="#">About us</a></li>
                <li><a href="#">Contact us</a></li>
                <li><a href="#">Privacy policy</a></li>
                <li><a href="#">Disclaimer</a></li>
            </ul>
            <ul class="social">
                <li>youtube</li>
                <li>instagram</li>
                <li>twitter</li>
                <li>facebook</li>
            </ul>
            
        </div>

    </footer>
</section>
</html>