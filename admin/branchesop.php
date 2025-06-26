
<style>
        .branchcont{
            display:flex;
            border: 2px solid rgb(0, 0, 0,0.3);
            border-radius: 5px;
            justify-content: space-around;
            padding: 20px;
            margin:5px;
        }
        .branchcont input{
            width: 250px;
            border-top: none;
            border-left: none;
            border-right: none;
        }
        
    </style><?php
$con=mysqli_connect('localhost','root','','id20532735_gptplpt2');

if($con->connect_error ){
    die('Connection Failed'.$con->connect_error);
 }
 else{
     
    if(isset($_GET['editid'])){
        
        $id=$_GET['editid'];
        
        $query = "SELECT * FROM `branches` ORDER BY `id` ASC";
        $query_run = mysqli_query($con,$query);
        ?>
        <form  method="post" enctype="multipart/form-data">
        <?php
            $numof_branches=0;
            while($row=mysqli_fetch_assoc($query_run)){
                $numof_branches=$numof_branches+1;

        ?>
             <div class="branchcont">
                <div class="branch_name">
                    <label for="">Branch name :</label>
                    <input type="text" name="branchname[]" value="<?php echo $row['branch_name']?>"><br>
                </div>
                <div class="branch_code">
                    <label for="">Branch code :</label>
                    <input type="text" name="branchcode[]" value="<?php echo $row['branch_code']?>"><br>
                </div>
                <div class="branch_img">
                    <label for="">Branch image :</label><br>
                    <input type="file" name="branchimg[]" value="<?php echo $row['branch_img']?>"><br>
                </div>
            </div>
        
        <?php
            
            }
        ?>
        <center><input type="submit" name="editsubmit"></center>

    </form>
        <?php
        if(isset($_POST['editsubmit']))
        { $n=$numof_branches-1;
            
            $query = "SELECT * FROM `branches` ORDER BY `id` ASC";
            $query_run = mysqli_query($con,$query);
            $j=0;
            $id=[];
            while($row=mysqli_fetch_array($query_run)){
                $ocode[$j]=$row['branch_code'];
                $id[$j]=$row['id'];
                $j++;
            }
            $i=0;
            while($i<=$n){

            $branchname=$_POST['branchname'];
            $branch[$i]=$branchname[$i];
                

            $branchcode=$_POST['branchcode'];
            $code[$i]=$branchcode[$i];

           

            $branchimg=$_FILES['branchimg']['name'];
            $bran_logo[$i]=$branchimg[$i];

            
            $bran_temp_name[$i]=$_FILES['branchimg']['tmp_name'][$i];

            move_uploaded_file($bran_temp_name[$i],"../images/index_img/".$bran_logo[$i]);
           
           
                $sqll="UPDATE `branches` SET `branch_name`='$branch[$i]', `branch_code`='$code[$i]',`branch_img`='$bran_logo[$i]' WHERE `id`=$id[$i]";
                $res=mysqli_query($con,$sqll);
                $otname="$ocode[$i]_dept";
                echo $otname;
                $tname="$code[$i]_dept";
                echo $tname;
                $sql="ALTER TABLE $otname RENAME TO $tname";
                $res=mysqli_query($con,$sql);
                $i++;
            }
            if($res){
                echo"updated successfully";
                header('location:branchadmin.php');
                
            }
           
            
        }


    }
    elseif(isset($_GET['deleteid']))
    {
       $deletd=$_GET['deleteid'];
       $sql="SELECT `branch_code` from branches where `id`= $deletd";
       $res=mysqli_query($con,$sql);
       $row=mysqli_fetch_assoc($res);
       $sql2="DELETE FROM `branches` WHERE id=$deletd ";
       $result2 = mysqli_query($con,$sql2); 
       $tname="$row[branch_code]_dept";
       echo $tname;
       $sql="DROP TABLE $tname";
       $res= mysqli_query($con,$sql);
       if($result2){
        header('location:branchadmin.php');
       }
    }
    elseif(isset($_GET['add'])){
        $last=$_GET['add'] ;
        ?>
        <form method="POST" enctype="multipart/form-data">
        <div class="branchcont">
                <div class="branch_name">
                    <label for="">Branch name :</label>
                    <input type="text" name="branchname"><br>
                </div>
                <div class="branch_code">
                    <label for="">Branch code :</label>
                    <input type="text" name="branchcode"><br>
                </div>
                <div class="branch_img">
                    <label for="">Branch image :</label><br>
                    <input type="file" name="branchimg" ><br>
                </div>
            </div>
            <center>
            <input type="submit" name="add_new" value="add">
            </center>
        </form>
        
        <?php
        if(isset($_POST['add_new']))
        {
            
            
            $branch[$last]=$_POST['branchname'];
            $code[$last]=$_POST['branchcode'];
            $images[$last]=$_FILES['branchimg']['name'];
            move_uploaded_file($images[$last],"images/index_img/$images[$last]");
        echo $branch[$last];
            $sql1="INSERT INTO `branches`(`branch_name`,`branch_code`, `branch_img`) VALUES ('$branch[$last]','$code[$last]','$images[$last]')";
            $add=mysqli_query($con,$sql1);
            print_r($con);
            if($add)
            { echo "if";
                $tname="$code[$last]_dept";
                echo "added successfull";
                $sql="CREATE TABLE IF NOT EXISTS $tname(heading varchar(20),rdata varchar(1000))";
                $res=mysqli_query($con,$sql);
                $sql1="INSERT INTO $tname VALUES('aim','-')";
                $res=mysqli_query($con,$sql1);
                $sql1="INSERT INTO $tname VALUES('mission','-')";
                $res=mysqli_query($con,$sql1);
                $sql1="INSERT INTO $tname VALUES('goal','-')";
                $res=mysqli_query($con,$sql1);
                $sql1="INSERT INTO $tname VALUES('cur','-')";
                $res=mysqli_query($con,$sql1);
                header('location:branchadmin.php');
            }
            else{
                $sql="UPDATE `branches` SET `id`='$last', `branch_name`='$branch[$last]',`branch_code`='$code[$last]',`branch_img`='$images[$last]' WHERE `id`='$last' " ;
                $res=mysqli_query($con,$sql);
            }
          
        }
    }
   // header('location:branchadmin.php');


}
?>