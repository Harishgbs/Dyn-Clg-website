<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Ideas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/project_idea1.css">
    <link rel="stylesheet" href="../css/menu_foot.css">
    <script src="../script/scriptt.js"></script>
    <script>
        function close_ideas(){
            document.getElementById('posts').style.display="none";
        }
        function display_ideas(){
            document.getElementById('posts').style.display="block";
        }
    </script>
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
    $con =mysqli_connect('localhost','root','','id20532735_gptplpt2');
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
 
<div class="posts" id="posts">
        <div class="postbut"><h1 style="display: flex;
            justify-content: center;
            padding-bottom: 5px;
            cursor:crosshair;"  onclick="close_ideas()" >+</h1>

            <p style="display: flex;
                      justify-content: center;">
                      post your idea here</p><br>
           
        </div>
    <!-- php starts here -->
    <?php
 
     if($con->connect_error ){
        die('Connection Failed'.$con->connect_error);
        
     }
     else{
        if(isset($_POST['post_idea'])){
            //decleration part
            $stu_name = $_POST['stu_name'];
            $stu_email = $_POST['stu_email'];
            $clg_name = $_POST['clg_name'];
            $stu_pin = $_POST['stu_pin'];
            $pro_title = $_POST['pro_title'];
           
            $pro_details = $_POST['pro_details'];

            $pro_image_name=$_FILES['pro_img']['name'];
            $pro_image_type=$_FILES['pro_img']['type'];
            $pro_image_size=$_FILES['pro_img']['size'];
            $pro_image_temp=$_FILES['pro_img']['tmp_name'];

        move_uploaded_file($pro_image_temp,"../images/project_img/$pro_image_name");

        
        $sql = "INSERT INTO `project_ideas`(Student_name,Email,College_name,Pin_num,Project_title,Project_image,Project_description) VALUES('$stu_name','$stu_email','$clg_name','$stu_pin','$pro_title','$pro_image_name','$pro_details')";

        $result= mysqli_query($con,$sql);
        ?>
        <center><h2><?php echo "Data Inserted Successfully" ?></h2> </center>
      <?php
        }
        else{
            ?>
          <center><h2><?php echo "Connection Failed" ?></h2> </center>
        <?php
        }
       
     }

     $db=mysqli_select_db($con,'id20532735_gptplpt2');
//
     if(true)
       {
             $query = "SELECT * FROM `project_ideas` ORDER BY `id` DESC";

             $query_run = mysqli_query($con,$query);
             $pro_incre=0;
            while($row=mysqli_fetch_assoc($query_run))
            {
                if($pro_incre%2==0)
                {
                $pro_incre++;
                    ?>
                         
                        <div class="post_odd">
                            <div class="odd_img" id="odd_img" >

                            <img src="<?php echo "../images/project_img/".$row['Project_image']; ?>"    >

                             </div>
                            <div class="odd_text">
                                 <center><h2 id="oddtitle"><?php echo $row['Project_title']; ?></h2>
                                    <?php
                                        echo $row['Project_description'];
                                    ?>
                                <h3><?php echo "project done by :",$row['Student_name']; ?></h3></center>

                            </div>

                        </div>

                    <?php
                }
                else{
                    $pro_incre++;
                    ?>
                        <div class="post_even">
                            <div class="even_text">
                                <center><h2><?php echo $row['Project_title']; ?></h2>
                                    <?php echo $row['Project_description'];?>
                                    <h3><?php echo "project done by :",$row['Student_name']; ?></h3>
                                </center>
                            </div>
                            <div class="even_img">
                            <img src="<?php echo "../images/project_img/".$row['Project_image']; ?>"    >
                            </div>

                        </div>

                    <?php
                }
             
            }
               
            
        }


    ?>
   
   
    </div>
    <div id="newpost">
        <div class="log">
        <button onclick="display_ideas()">back</button>

        <center><h1>Post your idea here</h1></center>

        <form action="project_idea.php" method="POST" class="formm" enctype="multipart/form-data">
            
            <h2>Student Details</h2>


            <label for="name">Your name   :</label>
            <input type="text" placeholder="enter your name" id="name"style="width: 180px;" name="stu_name" required><br class="pinnext"><br class="pinnext">

            <label for="email">Email       :</label>
            <input type="Email" placeholder="example@gmail.com" id="email" style="width: 200px;" name="stu_email" required><br><br class="pinnext"><br class="pinnext1">

            <label for="clg">College name :</label>
            <input type="text" placeholder="college name" id="clg" style="width: 220px;" name="clg_name" required><br><br class="pinnext"><br class="pinnext1">

            <label for="pin">Pin_number:</label>
            <input type="text" placeholder=" 000-000-000" id="pin" name="stu_pin" required><br class="pinnext">


            <h2>Project Details</h2>


                <label for="title">Title of project :</label>
                <input type="text" placeholder="project title" id="title" name="pro_title" required><br><br>
                

                <label for="img">Post image of project :</label>
                <input type="file" id="img" name="pro_img" accept="image/*"><br>

            <h4>description of project:</h4>

             <center>
               <textarea name="pro_details" id="descrip"></textarea><br>
                <input type="submit" name="post_idea" value="Post Project" >
                
            </center>

        </form>
        </div>

    </div>
   
</body>
    <script>
        if(window.history.replaceState ){
            window.history.replaceState(null,null,window.location.href);
        }
    </script>
</html>