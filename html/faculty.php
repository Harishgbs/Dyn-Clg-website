<?php 

$con=mysqli_connect('localhost','root','','id20532735_gptplpt2');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/faculty1.css" type="text/css">
    <title>GPT-PLPT_Faculty</title>
    <link rel="stylesheet" href="../css/menu_foot.css">
    <script src="../script/scriptt.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
#sidemenuu{
    overflow-x:scroll;
}
    .details img{
            height: 190px;
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

        }
        #front{
            grid-area: 1 / 1;
            background-color:#3498DB;
            color: white;
            text-shadow:-1px 1px 3px rgb(0,0,0,0.8);
            font-family: cursive;
            font-size: 18px;
            font-weight: 700px;
            backface-visibility: hidden;
            box-shadow: -10px 10px 15px rgb(0,0,0,0.6);

        }
         #back{
            grid-area: 1 / 1;
            transform: rotateY(180deg);
            backface-visibility: hidden;
            overflow-y: scroll;
            font-family:'Courier New', Courier, monospace;
            background-color:#3498DB;
            color: white;
            text-shadow:-1px 1px 3px rgb(0,0,0,0.8);
            font-size: 18px;
            box-shadow: -10px 10px 15px rgb(0,0,0,0.6);


        }
        #back::-webkit-scrollbar{
            display: none;
        }
        .cardcont{
            margin: 1rem;
            perspective: 1000px;
        }
        .cardcont:hover .cards{
            transform: rotateY(180deg);
        }
        #aacad.aacad{
    top: 50px;
}
#aacad ,#enrol,#sidemenu{
    z-index: 10;

}
.clg_logo{
            background-repeat: no-repeat;
            background-size: cover;
        }
       
       
    </style>
  
</head>
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
 

<body onload="display(3)">

<div id="sidemenuu">
        <menu>

        <?php  
       $noofbranch=0;
       $query = "SELECT * FROM `branches`";
       $query_run = mysqli_query($con,$query);
       $idd=[];
       $depatid=[];
       $depatid[0]=0;
       $depatid[1]=1;
       $department=[];
       $department[0]="Office_staff";
       $department[1]="General_department_staff";

       $i=0;
       while($row=mysqli_fetch_assoc($query_run))
       {
           $depatid[$i]=$row['branch_code']."_staff";
           $department[$i+2]=$depatid[$i];
           
           $id=$row['id'];
           $idd[$i]=$id;
   
           $noofbranch=$i+2;
           $i++;
   
       }
       $noof=count($department);

       $department[$noof]="Other_staff";
       $alldept=count($department)
       ?>
        
<ul>
    <?php 
        $k=0; 
    while($k<$alldept)
    {   
        ?>
            <li onclick="display(<?php echo $k; ?>)"><?php echo $department[$k] ?></li>
        <?php
           
        $k++;
    }
    ?>
               
</ul >
           
        </menu>
   </div>
<div class="boddy" id="boddy" >
<script type="text/javascript">
   
    function display(a)
    { 
        let b=a;
            
        let alldept=<?php echo $alldept;?>;

        for(let i=0;i<alldept;i++){
            
       
            if(i==b){

                document.getElementById("a"+i).style.visibility="visible";
                document.getElementById("a"+i).style.height="100pc";
                document.getElementById("a"+i).style.position="absolute";
                document.getElementById("a"+i).style.top="50px";
                
            }
            if(i!=b){
                document.getElementById("a"+i).style.visibility="collapse";
                document.getElementById("a"+i).style.position="absolute";
                document.getElementById("a"+i).style.top="00px";
              
            }
            
        }
    }
   
</script>
<?php 
?>



<?php
$l=0;
$n=0;

   

    
while($l<$alldept){

   
    ?>
     <div class="office" id="a<?php echo $l ?>"> 
       <center>
         <h1 class="aluhead">
            <?php echo $department[$l]; ?>
        </h1>
        </center>
    
        <?php 
              
              if($l==$n){
               $n++;
               $dept=$department[$l];

               $selec="SELECT * FROM `$dept`";
                $que=mysqli_query($con,$selec);
                $i=0;
                $ids=[];
                ?>
                 <div class="maincontainer" >
                    <?php
                    while($rw=mysqli_fetch_assoc($que)){
                        ?>
                        <div class="cardcont">
                            <div class="cards">
                                 <div class="details" id="front" >
                                     <img src="<?php echo "../images/staff_img/".$rw['faculty_img'];?>" alt="">
                                     <div class="details_content" id="con">
                                         <p><b>Name:</b><?php echo $rw['faculty_name'] ;?></p>
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

                <?php
}
$l++;
}

?>



    
</div>
  
   

   
</body>
</html>