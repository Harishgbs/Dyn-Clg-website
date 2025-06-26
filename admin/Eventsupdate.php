<html>
    <head>
        <title>Upcomming Events_Admin</title>
<style>
    .up_events{
        width:80%;
        height: 90%;
        margin:auto;
        border: 1px solid;
        border-radius:5px;
        box-shadow: -3px 3px 7px rgb(0,0,0,0.5);
        padding: 30px;
    }
    .up_events input{
        width:250px;
        border-top: none;
        border-left: none;
        border-right: none;
        border-radius:5px;

    }
    #eve_details{
        width: 80%;
        height:50%;
        border:2px solid;
        border-radius:10px;
        box-shadow: -3px 3px 7px rgb(0,0,0,0.5);
    }

</style>

    </head>
    <body>
    
<?php
        $id=0;
        $con =mysqli_connect('localhost','root','','id20532735_gptplpt2');



        if($con->connect_error ){
           die('Connection Failed'.$con->connect_error);
        
        }
        else{
    
   
   
    

        if(isset($_POST['submiting_up_eve']))
        {
            $Event_name = $_POST['Eve_name'];
            $Event_conducting_date = $_POST['conducting_date'];
            $Event_conducting_by = $_POST['conducting_by'];
            $Event_details = $_POST['eve_details'];
        
            $sql = "UPDATE `upcomming_events` SET `id`='$id',`Event_name`='$Event_name',`Event_conducting_on`='$Event_conducting_date',`Event_conducting_by`='$Event_conducting_by',`Event_details`='$Event_details' WHERE `id`=0 ";
            $result= mysqli_query($con,$sql);
            if($result){
                header('location:Eventadmin.php');
            }
           
        ?>
          <center><h2><?php echo " Data inserted successfully" ?></h2> </center>
        <?php
        }
        else{
            ?>
          <center><h2><?php echo "Connection Failed" ?></h2> </center>
        <?php
        }
        $sql1="SELECT * FROM `upcomming_events` ";
            $res=mysqli_query($con,$sql1);
            $row=mysqli_fetch_assoc($res);
     }

?>
<!-- form starts here -->
       <div class="up_events">
        <form method="POST">
            <h2>Updating Upcomming event</h2>
            <label for="Eve_name">Event name:</label>
            <input type="text" name="Eve_name"  autocomplete="off" value="<?php echo"$row[Event_name]"?> " required><br><br><br>

            <label for="Conducting_date">Conducting on:</label>
            <input type="date" id="Conducting_date" name="conducting_date"  autocomplete="off"  value="<?php echo"$row[Event_conducting_on]"?> " required> <br><br><br>

            <label for="Conducting_by">Conducting By:</label>
            <input type="text" id="Conducting_by" name="conducting_by"  autocomplete="off"  value="<?php echo"$row[Event_conducting_by]"?> " required> <br><br><br>

            <label for="eve_details"><b>About event:</b></label><br>
            <textarea id="eve_details" name="eve_details"  autocomplete="off" required> <?php echo"$row[Event_details]"?> </textarea><br><br><br>
            <center>
                <input type="submit" name="submiting_up_eve" style="border:2px solid; width:100px;">
            </center>
        </form>
       </div>

    </body>
    <script>
        if(window.history.replaceState ){
            window.history.replaceState(null,null,window.location.href);
        }
    </script>
</html>
<?php 

?>