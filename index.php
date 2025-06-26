<?php
$con=mysqli_connect('localhost','root','','id20532735_gptplpt2');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/menu_foot.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://fontawesome.com/icons/user?f=classic&s=duotone&sc=%231E3050">
    <script src="script/scriptt.js"></script>
    <style>

        .clg_logo{
            background-repeat: no-repeat;
            background-size: cover;
        }
 .slider-frame{ 
    border-radius: 10px;
    min-width: 100%;
    max-width: 100%;
    overflow: hidden;
    box-shadow: -5px 5px 10px rgb(0,0,0,0.6);
}
.image-container{
    display: flex;
    min-width: 100%;
    max-width: 100%;
    height: 70vh;
        overflow: hidden;
}
.image-container img{
    display: flex;
    min-height: 100%;
    max-height: 100%;
    min-width: 100%;
    max-width: 100%;
    animation:slide 30s infinite;
    background-size: cover;
    background-repeat: no-repeat;
    overflow: hidden;
    z-index: -10;
}
#aacad ,#enrol,#sidemenu{
    z-index: 10;

}
#txt{
    z-index: 100;
    font-size: large;
}
@keyframes slide{
    0%{
        transform: translateX(0);
    }
    25%{
        transform: translateX(0);
    }
    30%{
        transform: translateX(-100%);
    }
    50%{
        transform: translateX(-100%);
    }
    55%{
        transform: translateX(-200%);

    }
    75%{
        transform: translateX(-200%);
    }
    80%{
        transform: translateX(-300%);

    }
    100%{
        transform: translateX(-300%);

    }
}
@media  screen and (max-width:430px) {

    .plpt{
        font-size: 12px;
        text-transform: uppercase;
       
    }

    </style>
</head>
<body>
    <section>
    <header>
    <?php 
    $sql="SELECT * FROM `indexdata`";
    $qu=mysqli_query($con,$sql);
    $rr=mysqli_fetch_assoc($qu);
    ?>
            
            <div class="clg_logo" style="background-image:url('images/index_img/<?php echo $rr['clg_logo'];?>');">
                

            </div>
            <div class="clg_name">
                <p><b class="govt"><?php echo $rr['clg_name'];?>,</b><b class="plpt"><?php echo $rr['clg_place'];?></b></p>
            </div>
        
            <!-- <button</button> -->
             
            <menu class="menuu" >
                <li onclick="displaymenu()" id="menu_but"><i class="fa-solid fa-bars" style="color: white;"></i></li>
                <a id="home_btn" href="index.php"><i class="fa-solid fa-house"></i></a>
                <ul id="sidemenu">
                    <li>
                        <a onclick="aacad()" href="#">Academics&nbsp;<i class="fas fa-caret-down"></i></a>
                        
                        <div class="dropdown_acad" id="aacad" >
                            <ul>
                                <li>
                                    <a href="html/dept.php">Branches&nbsp;</a>
                                   
                                </li>
                                <li><a href="html/labsworkshop.php">Labs/Workshop</a></li>
                                <li><a href="html/library.php">Library</a></li>
                                <li><a href="html/faculty.php">faculty</a></li>
                                <li><a href="html/alumni.php">Alumni</a></li>
                                <li><a href="html/project_idea.php">Project ideas</a></li>

                            </ul>
                        </div>
                    </li>
                    <li><a href="html/Placements.php">Placements</a></li>
                    <li><a href="html/Infrastructure.php">Infrastructure</a></li>
                    <li><a href="html/Events.php">Events</a></li>
                    <li onclick="show()">
                        <a href="#">Enrollment&nbsp;<i class="fas fa-caret-down"></i></a>
                        <div class="dropdown_acad"  id="enrol">
                            <ul>
                                <li><a href="html/admissionsmain.php">Admissions</a></li>
                                <li><a href="html/fee_structure.php">fee_structure</a></li>
                            </ul>
                        </div>
                    </li>
                    <!-- <li id="login"><a href="login.html" style="color:white; ">&#128100;</a></li> -->

                </ul>
            </menu>
          
        </header>
 

        <body>
            <?php 
            $sql="SELECT * FROM `indexdata` WHERE `id`=143";
            $res=mysqli_query($con,$sql);
            $in=mysqli_fetch_assoc($res);
            $imgs=$in['clg_img'];
            $imgs=explode(",",$imgs);
            $imgcount=count($imgs);
            $k=0;
            ?>
            <div class="slider-frame" >
            <div class="image-container">
                    <?php
                    while($k<$imgcount)
                    {
                    ?>

                    <img src="<?=$imgs[$k]?>" alt="hbjvvbj">
                    <!-- <div class="image" style="background-image: url('');">
                    </div> -->
                    <?php 
                $k++;
                }?>
                   <img src="<?=$imgs[0]?>" alt="">
                  
                 </div>
                 <h1 id="txt"> <center> <q>Education is not preparation for life; education is life itself</q></center></h1>

            </div>
            <center><h2 style="font-family:system-ui;">WELCOME TO GOVERNMENT POLYTECHNIC,pillaripattu</h2></center>
            <div width="100%" height="auto" > 
            <center>
                <p id="paras">
                
                    <?php echo$in['about_clg'];?>
                </p>
            </center>
            </div>
            <h1 style="font-size:34px;
                    font-family: Goudy old style;
                    margin-left: 50px;">Courses Offered</h1>
            <div class="cources">
            <?php 
            $sq="SELECT * FROM `branches`";
            $que=mysqli_query($con,$sq);
            $i=0;
            while($ro=mysqli_fetch_assoc($que))
            {
            ?>
                <div class="cou_CE" style="background-image:url('<?php echo"images/index_img/".$ro['branch_img'];?>');">
                    <h3 class="cource_head"><?php echo$ro['branch_code'];?></h3>
                </div>
                <?php $i++; }?>

            </div>
            <h1 onclick="moredone()" style="font-size:34px;
                        font-family: Goudy old style;
                        margin-left: 50px;">Projects Done    <b style="border:4px solid rgba(241, 12, 77, 0.941);
                                                                border-radius: 5px;
                                                                font-size: 18px;
                                                                align-items: center;
                                                                padding: 5px;">Explore <i class="fa fa-long-arrow-right" aria-hidden="true"></i></b></h1>
            <div class="Projects_done" id="project">
                <?php 
                 // project done
                    $proimg=$in['pro_imgs'];
                    $proimg=explode(",",$proimg);
                    $proimgcount=count($proimg);
                
                for($j=0;$j<$proimgcount;$j++)
                     {
                        ?>
                        <div class="proje"  style="background-image:url('<?php echo "$proimg[$j]";?>')"; >
                            
                        </div>
                    <?php } ?>
                <br>
                <h2 onclick="closepro()" id="closepro">close</h2>
            </div>

            <h1  style="font-size:34px;
                        font-family: Goudy old style;
                        margin-left: 50px;">Placements    <b style="border:4px solid rgba(241, 12, 77, 0.941);
                                                            border-radius: 5px;
                                                            font-size: 18px;
                                                            align-items: center;
                                                            padding: 5px;"><a href="html/Placements.php">Explore <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></b></h1>
            <div class="place" >
                <?php
                $sq="SELECT * FROM `branches`";
                $que=mysqli_query($con,$sq);

                    $i=0;
                    while($ro=mysqli_fetch_assoc($que))
                    {
                        ?>
                        <div class="place_CE" style="background-image:url('<?php echo"images/index_img/".$ro['branch_img'];?>');">
                            <h3 class="place_head"><?php echo$ro['branch_code'];?></h3>
                        </div>
            
            <?php $i++; }?>
             </div>
           
            
            <h1 onclick="moreextra()" style="font-size:34px;
                        font-family: Goudy old style;
                        margin-left: 50px;">Extra-Curricular Activities    <b style="border:4px solid rgba(241, 12, 77, 0.941);
                                                            border-radius: 5px;
                                                            font-size: 18px;
                                                            align-items: center;
                                                            padding: 5px;">Explore <i class="fa fa-long-arrow-right" aria-hidden="true"></i></b></h1>
            
            <div class="extra_cur" id="moreextra">
                <!--  -->
                <?php 
                  // extraimgs
                    $extraimg=$in['extra_imgs'];
                    $extraimg=explode(",",$extraimg);
                    $extraimgcount=count($extraimg);
                
                    for($k=0;$k<$extraimgcount;$k++)
                        {
                            ?>
                            <div class="sports" style="background-image:url('<?php echo "$extraimg[$k]";?> '); border:none;" >
                                <h3 class="extra_head"></h3>
                             </div>
                        <?php } ?>
                 <h3 onclick="closeextra()">close</h3>
            
            </div>
            <h2>vision:-</h2>
            <h4 id="paras"><?php echo $in['vision_clg']?></h4>
            <h2>mission:-</h2>
            <h4 id="paras"><?php echo $in['mission_clg']?></h4>

        </>
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
                    <li><i class="fa-brands fa-youtube"></i></li>
                    <li><i style=" font-size:24px;" class="fa">&#xf16d</i></li>
                    <li>twitter</li>
                    <li>facebook</li>
                </ul>
                
            </div>

        </footer>
    </section>
    <script>
        function moredone(){
            document.getElementById("project").style.width="100%";
            document.getElementById("project").style.height="auto";
            document.getElementById("project").style.display="flex";
            document.getElementById("project").style.flexWrap="wrap";



            
        }
        function closepro(){
            document.getElementById("project").style.display="flex";
            document.getElementById("project").style.flexWrap="nowrap";
        }
        function moreextra(){
            document.getElementById("moreextra").style.width="100%";
            document.getElementById("moreextra").style.height="auto";
            document.getElementById("moreextra").style.display="flex";
            document.getElementById("moreextra").style.flexWrap="wrap";

        }
        function closeextra(){
            document.getElementById("moreextra").style.display="flex";
            document.getElementById("moreextra").style.flexWrap="nowrap";
        }
    </script>
</body>
</html>
