<?php 
 $con=mysqli_connect('localhost','root','','id20532735_gptplpt2');
 $sql="SELECT * FROM `branches`";
 $res=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/dept.css">
    <link rel="stylesheet" href="../css/menu_foot.css">
    <script src="../script/scriptt.js"></script>
    <script src="../script/adept.js"></script>
  <link rel="stylesheet" href="../css/faculty1.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <style>
            #aacad.aacad{
    top: 50px;
}
        .details img{
            height: 240px;
            width: 300px;
        }
        
        .details{
            width: 300px;
            height: 400px;
            border: 2px solid;
            border-radius: 9px;
            padding: 10px 10px;
            margin: 60px;
        }
        .cards{
           display: grid;
           grid-template-columns: 1fr;
           justify-content: center;
           transition: all 1s ease;
           transform-style:preserve-3d ;
           margin-left: -10%;
           width:100%;
        }
        #front{
            grid-area: 1 / 1;
            /* background-color:rgb(0, 60, 255); */
            color: #34495E;
            /* text-shadow:-1px 1px 0px rgb(0,0,0,0.8); */
            font-size: 18px;
            font-family: cursive;
            font-weight: 700px;
            backface-visibility: hidden;
            box-shadow: -10px 10px 15px rgb(0,0,0,0.6);

        }
         #back{
            grid-area: 1 / 1;
            transform: rotateY(180deg);
            backface-visibility: hidden;
            overflow-y: scroll;
            /* background-color:rgb(0, 60, 255); */
            color: #34495E;
            font-family:'Courier New', Courier, monospace;
            /* text-shadow:-1px 1px 0px rgb(0,0,0,0.8); */
            font-size: 18px;
            box-shadow: -10px 10px 15px rgb(0,0,0,0.6);


        }
        #back::-webkit-scrollbar{
            display: none;
        }
        .cardcont{
            margin:auto;
            perspective: 1000px;
        }
        .cardcont:hover .cards{
            transform: rotateY(180deg);
        }
        .dept_menu h1{
            border: 2px solid;
            border-radius: 9px;
            padding: 10px;
            cursor: pointer;
            box-shadow: 5px 5px 10px rgb(0,0,0,rgb(0,0,0,0.6));
        }
        .clg_logo{
            background-repeat: no-repeat;
            background-size: cover;
        }
       #pdfs{
         display: flex;
         justify-content: space-between;
         width: 80%;
         height: 30px;
         border-radius: 5px;
         border-top: none;
         box-shadow: -5px 5px 15px rgb(0,0,0,0.6);
         font-size: 20px;
         padding: 5px;
         margin-bottom: 5px;
        }
        #aacad ,#enrol,#sidemenu{
    z-index: 10;

}
       .left_nav{
           display:flex;
           width:100%;
          
       }
       #ce{
           height:auto;
           background-color:white;
       }
       @media  screen and (max-width:430px){
  .left_nav{
      font-size:12px;
  }  
  .dept_menu{
      font-size:14px;
  }
  .right_nav{
    float: none;
    width: 100%;
  }
#d h1{
    font-size:14px;
}
           
       }
    </style>
</head>
<body onload="exec()">
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
 
    <div class="dept" id="">
        <h1>Departments</h1>
    </div>
    <div class="dept_menu">
<?php    $i=0;
        while($row=mysqli_fetch_assoc($res))
        {
            $branchcode[$i]=$row['branch_code'];
            $tname[$i]="$row[branch_code]_dept";
            $count=count($branchcode);
?>   
        <div class="body<?php echo$i?>" id="d" onclick="display('body<?php echo$i?>',<?=$count?>)">
            <h1><?php echo$row['branch_code']?></h1>
        </div>
        <?php 
       $i++;
}?>      
    </div>
    <div class="container" id="con" >
    <?php 
    $j=0;
    while($j<$count)
    {
    ?>

        <div id="body<?php echo$j?>" class="b" onload="exec()">
            <nav class="left_nav">
                <div class="dep<?php echo$j?>" id="ce" onclick="div('dep<?php echo$j?>',0,<?php echo$j?>)" onload="div('dep<?php echo$j?>',0,<?php echo$j?>)">
                    <h1><?=$branchcode[$j]?></h1>

                </div>
                <div class="cur<?php echo$j?>" id="ce" onclick="div('cur<?php echo$j?>',1,<?php echo$j?>)">
                    <h1>Curriculam</h1>
                </div>
                <div class="fac<?php echo$j?>" id="ce" onclick="div('fac<?php echo$j?>',2,<?php echo$j?>)">
                    <h1>Faculty</h1>
                </div>
                <div class="pdf<?php echo$j?>" id="ce" onclick="div('pdf<?php echo$j?>',3,<?php echo$j?>)">
                    <h1>Student Resources</h1>

                </div> 
            </nav>
            <nav class="right_nav">
                <div id="dep<?php echo$j?>" class="cediv">
                <?php
                $query="SELECT * FROM $tname[$j]";
                $query_run=mysqli_query($con,$query);
                $count="SELECT COUNT(*) as count from $tname[$j]";
                $query1_run=mysqli_query($con,$count);
                $rcount=mysqli_fetch_assoc($query1_run);
                $count=$rcount['count'];
                for($n=0;$n<3;$n++)
                {
                  $ro=mysqli_fetch_assoc($query_run);
                  $data[$n]=$ro['rdata'];
                }
                ?>
                    <center><h1><?=$branchcode[$j]?></h1></center>
                    <h2>Aim:</h2>
                    <p> <?=$data[0]?></p>
                    <h2>Mission:</h2>
                    <p><?=$data[1]?></p>
                    <h2>Goal:</h2>
                    <p><?=$data[2]?></p>
                </div>
                <div id="cur<?php echo$j?>" class="cediv">
                    <center><h1>Curriculam</h1></center>
                    <?php 
                    $ro=mysqli_fetch_assoc($query_run);
                    $imgs=$ro['rdata'];
                    $imgs=explode(",",$imgs);
                    $imgcount=count($imgs);
                    for($o=0;$o<$imgcount;$o++)
                    {  
                    ?>
                    <img src="<?=$imgs[$o]?>" alt="" width="100%">
                    <?php }?>
                </div>
                <div id="fac<?php echo$j?>" class="cediv">
                    <center><h1>Faculty</h1></center>
                    <?php 
                  $tnname[$j]="$branchcode[$j]_staff";
                    $quer="SELECT * FROM $tnname[$j]";
                    $quer_run=mysqli_query($con,$quer);
                    ?>
                    <div class="maincontainer" >
                    <?php
                    while($rw=mysqli_fetch_assoc($quer_run)){
                        ?>
                        <div class="cardcont" style=" margin: auto">
                            <div class="cards">
                                 <div class="details" id="front" >
                                     <img src="<?php echo "../images/staff_img/".$rw['faculty_img'];?>" alt="">
                                     <div class="details_content" id="con">
                                         <p><b>Name:</b><?php echo $rw['faculty_name'] ;?></p>
                                         <p><b>Designation:</b><?php echo$rw['faculty_post']?>
                                         <p><b>Exprience:</b><?php echo $rw['experience'] ;?></p>
                                         <p><b>Qualifications:</b><?php echo $rw['faculty_quali'] ;?></p>
                                         <p onclick="showmore()"  id="mo">..more</p>
                                     </div>
                                 </div>
                                 <div class=details id="back" >
                                    <?php echo $rw['faculty_details'] ?>
                                         <p>close</p>
                                 </div>
                            </div>
                        </div>
                        
<?php

            }
            ?>

                    </div>
                </div>
                <div id="pdf<?php echo$j?>" class="cediv">
                     <center><h1>Student Resources</h1></center>
                     <?php 
                         for($p=4;$p<$count;$p++)
                         {
                             $ro=mysqli_fetch_assoc($query_run);

                     ?>

                        <div id=pdfs><b><?=$ro['heading']?> </b>
                         <a href="<?=$ro['rdata']?>" download>Download</a>
                         </div>  
                         <?php }?>
                     </div>
            </nav>
            
        </div>

<?php 
 $j++;
}?>
           </div>
</body>

</html>
