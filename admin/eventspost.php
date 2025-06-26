<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Events</title>
    <style>
        .completed_events{
            padding:20px ;
            margin:auto;
            display: block;
            width:80%;
            height:95%;
            border:1px solid;
            border-radius: 7px;
            box-shadow: -3px 3px 7px rgb(0,0,0,0.5);
            
        }
        
        .completed_events form input{
            width: 200px;
            border-top: none;
            border-left:none;
            border-right: none;
            border-radius: 5px;
        }
        #about_event{
            width: 80%;
            height: 200px;
            margin: auto;
            border-radius: 10px;
            box-shadow:-4px 4px 7px rgb(0,0,0,0.5) ;
        }
        #post_eve{
            margin-top: 20px;
        }
    </style>
        
</head>
<body>
    
    <?php
    //   session_start();
    
     $con =mysqli_connect('localhost','root','','id20532735_gptplpt2');
    
     if($con->connect_error ){
        die('Connection Failed'.$con->connect_error);
        
     }
     elseif(isset($_GET['var'])){
         ?>
                <div class="completed_events">

                    <form  action="" method="post" enctype="multipart/form-data">
                                <h2>Completed Events Data :</h2>
                        <label for="event_name">Event name:</label>
                        <input type="text" name="Event_name" id="event_name" autocomplete="off" required><br><br>

                        <label for="event_date">Event Conducted date:</label>
                        <input type="date" name="Event_date" id="event_date" autocomplete="off" required><br><br>

                        <label for="cond_by">Event Conducted by:</label>
                        <input type="text" name="Event_conducted_by" id="cond_by" autocomplete="off" required><br><br>

                        <label for="events_imgs">choose Event Related photos :</label>
                        <input type="file" name="EventImgs" autocomplete="off" required multiple><br><br>

                        <label for="about_event"><b>Enter a short description on Event:</b></label>
                        <textarea name="About_Event" id="about_event" autocomplete="off" required></textarea>

                        <center> <input type="submit" value="Post Event details" id="post_eve" height="60px" name="post_event"></center>
                    </form>

                </div>
    
    <?php  
     
       
    if(isset($_POST['post_event']) )
        {
            
            $Event_name = $_POST['Event_name'];
            $Event_date = $_POST['Event_date'];
            $Event_conducted_by = $_POST['Event_conducted_by'];
            $About_Event = $_POST['About_Event'];
           
            $image_name=$_FILES['EventImgs']['name'];
            $image_type=$_FILES['EventImgs']['type'];
            $image_size=$_FILES['EventImgs']['size'];
            $image_temp_name=$_FILES['EventImgs']['tmp_name'];
    
            move_uploaded_file($image_temp_name,"../images/Events_img/$image_name");
            
            
            $sql = "INSERT INTO `completed_events`(id,Event_name,About_Event,Event_conducted_by,Event_conducted_date,eve_imgs) VALUES ('','$Event_name','$About_Event','$Event_conducted_by','$Event_date','$image_name')";
            $result = mysqli_query($con,$sql); 
            
           
            if($result){
                header('location:Eventadmin.php');
               echo $_SESSION['status']="image stored successfully";

              
    
            }
            else{
               echo $_SESSION['status']="image not inserted";
    
            }
            ?>
            <center><h2><?php echo " Data inserted successfully" ?> </h2></center>
          <?php
        }
        else{
            ?>
          <center><h2><?php echo "Connection Failed" ?></h2> </center>
        <?php
        }
     }
     elseif(isset($_GET['editid'])){
        $editd=$_GET['editid'];
        echo $editd;
        $sql="SELECT * FROM `completed_events` WHERE id=$editd ";
        $res=mysqli_query($con,$sql);
        $row=mysqli_fetch_assoc($res);
        ?>
        <div class="completed_events">

            <form   method="post" enctype="multipart/form-data">
                        <h2>Edit Event Data :</h2>
                <label for="event_name">Event name:</label>
                <input type="text" name="Event_name" id="event_name" autocomplete="off" value="<?php echo "$row[Event_name]" ?>" required><br><br>

                <label for="event_date">Event Conducted date:</label>
                <input type="date" dateformat="M d y" name="Event_date" id="event_date" autocomplete="off"  required><br><br>
                
                <label for="cond_by">Event Conducted by:</label>
                <input type="text" name="Event_conducted_by" id="cond_by" autocomplete="off" value="<?php echo"$row[Event_conducted_by]" ;?>" required><br><br>

                <label for="events_imgs">choose Event Related photos :</label>
                <input type="file" name="EventImg" autocomplete="off" value="<?php echo "images/Events_img/".$row['eve_imgs']; ?>"><br><br>

                <label for="about_event"><b>Enter a short description on Event:</b></label>
                <textarea name="About_Event" id="about_event" autocomplete="off"required ><?php echo" $row[About_Event]" ;?></textarea>

                <center> <input type="submit" value="Update" id="post_eve" height="60px" name="update_event"></center>
            </form>
           

        </div>

<?php  
         if(isset($_POST['update_event']) )
         {

             $Event_name = $_POST['Event_name'];
             $Event_date = $_POST['Event_date'];
             $Event_conducted_by = $_POST['Event_conducted_by'];
             $About_Event = $_POST['About_Event'];

             $image_name=$_FILES['EventImg']['name'];
             $image_type=$_FILES['EventImg']['type'];
             $image_size=$_FILES['EventImg']['size'];
             $image_temp_name=$_FILES['EventImg']['tmp_name'];
        
             move_uploaded_file($image_temp_name,"../images/Events_img/$image_name");


             $sql1 = "UPDATE `completed_events` SET Event_name='$Event_name',About_Event='$About_Event',Event_conducted_by='$Event_conducted_by',Event_conducted_date='$Event_date',eve_imgs='$image_name' WHERE id=$editd";
             $result1 = mysqli_query($con,$sql1); 
             if($result1){
             header('location:Eventadmin.php');
             }
            }
            

    
            

        }
     elseif(isset($_GET['deleteid']))
     {
        $deletd=$_GET['deleteid'];
        $sql2="DELETE FROM `completed_events` WHERE id=$deletd ";
        $result2 = mysqli_query($con,$sql2); 
        if($result2){
            header('location:Eventadmin.php');

        }
     }
?>
     
    <!-- body starts here -->
       
       
</body>
        <script>
            if(window.history.replaceState ){
                window.history.replaceState(null,null,window.location.href);
            }
        </script>
</html>