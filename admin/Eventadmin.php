<?php  
     $con =mysqli_connect('localhost','root','','id20532735_gptplpt2');

         if($con->connect_error){
             die('Connection Failed');
         }
         else{
             if(true)
                 {
                       $query = "SELECT * FROM `completed_events` ORDER BY `id` DESC";
                 
                       $query_run = mysqli_query($con,$query);
                       
                       
                      
                         ?>
<html>
    <head>
        <title>Events Admin page</title>
        
      <style>
        #tableimg{
            max-width: 150px;
            max-height:80px;
        }
        a{
            color: black;
            text-decoration: none;
            font-size:15px ;
            font-family: sans-serif ;
        }
        .abot{
            overflow-y: scroll;
            word-break: break-word;
            height: 100px;
            max-width: 100%;
            margin: 5px;

        }
        tr{
            min-height:80px;
            max-height: 80px;
            text-align: center;
        }
        td{
            
            align-items: center;
        }
      </style>
    </head>
    <body>
        <table border="2px" cellspacing="0" cellpadding="10px" width="100%">
            <thead><th colspan="6"><h1>Upcomming Events</h1></th></thead>
            <thead>
                <th>id</th>
                <th>Event name</th>
                <th>Date</th>
                <th>Conducting By</th>
                <th>About event</th>
                <th>operations</th>
            </thead>
            <tbody>
            <?php    
                  
                    $query = "SELECT * FROM `upcomming_events` where id=0";
                    $query_run1 = mysqli_query($con,$query);
                    while($row1 = mysqli_fetch_assoc($query_run1)){

                      
                         ?>
                                <tr height="50px">
                                    <td><?php echo"1"; ?></td>
                                    <td><?php echo $row1['Event_name'];?></td>
                                    <td><?php echo $row1['Event_conducting_on'];?></td>
                                    <td><?php echo $row1['Event_conducting_by'];?> </td>
                                    <td width="350px"><div class="abot"><?php echo $row1['Event_details'];?></div> </td>
                                    <td><button><a href="Eventsupdate.php">edit</a></button>
                                    <form method="POST" action="Events.php">
                                    <button type="submit"  name="noeve">NO events</button>
                                    </form>
                                    </td>
                                </tr>
                            <?php
                    }   
                ?>

            </tbody>
        </table>
    <table border="2px"  cellspacing="0" width="100%"height="100px" >

    <thead><th colspan="7"><h1>Completed Events</h1></th></thead>

            <thead>
            <th>S.no</th>
            <th>Event name</th>
            <th>Conducted by</th>
            <th>date</th>
            <th>About event</th>
            <th>images</th>
            <th>Operations</th>
            </thead>
            <tbody>
            <tr height="80px"><td colspan="6"></td><td><button name="postbtn"><a href="eventspost.php?var=post">+ADD event</a></button></td></tr>

                <?php     $incre=0;
                      while($row = mysqli_fetch_assoc($query_run))
                      { $id=$row['id'];
                         $incre+=1;
                         ?>
                                <tr height="50px">
                                    <td><?php echo"$incre"; ?></td>
                                    <td><?php echo"$row[Event_name]"; ?></td>
                                    <td><?php echo"$row[Event_conducted_by]" ;?>  </td>
                                    <td><?php echo"$row[Event_conducted_date]"; ?> </td>
                                    <td width="350px"><div class="abot"><?php echo" $row[About_Event]" ;?></div> </td>
                                    <td><img id="tableimg" src="<?php echo "../images/Events_img/".$row['eve_imgs']; ?>"> </td>
                                    <td><button><a href="eventspost.php?editid=<?php echo $id;?>">edit</a></button>&nbsp;&nbsp;<button><a href="eventspost.php?deleteid=<?php echo $id ?>">delete</a></button></td>
                                </tr>
                            <?php
                             }
                        }
                     }
                ?>
            </tbody>

        </table>

    </body>

</html>