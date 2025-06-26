
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
$con=mysqli_connect('localhost','root','','gptplpt1');

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
        $oldbranch=[];
        $sql="SELECT * FROM `branches`";
        $res=mysqli_query($con,$sql);

        $n=0;
        while($row=mysqli_fetch_assoc($res)){
            $oldbranch[$n]=$row['branch_code']."_staff";
            echo $oldbranch[$n];
            $n=$n+1;
        }
        
        if(isset($_POST['editsubmit']))
        { $n=$numof_branches-1;
            
            $query = "SELECT * FROM `branches` ORDER BY `id` ASC";
            $query_run = mysqli_query($con,$query);
            $j=0;
            $id=[];
            while($row=mysqli_fetch_array($query_run)){
                
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
            $images[$i]=$branchimg[$i];
            move_uploaded_file($images[$i],"../images/index_img/$images[$i]");
           
           
                $sqll="UPDATE `branches` SET `branch_name`='$branch[$i]', `branch_code`='$code[$i]',`branch_img`='$images[$i]' WHERE `id`=$id[$i]";
                $res=mysqli_query($con,$sqll);

                $alt="ALTER TABLE `$oldbranch[$i]` RENAME TO `$code[$i]_staff`";
                $qu=mysqli_query($con,$alt);

                
                $i++;
            }
           
            if($res){
                echo"updated successfully";
                header('location:branchadmin.php');
                
            } 

        }
    }
    elseif(isset($_GET['deleteid'])&& isset($_GET['tab']))
    {
        $table=$_GET['tab']."_staff";
       $deletd=$_GET['deleteid'];
       $sql2="DELETE FROM `branches` WHERE id=$deletd ";
       $result2 = mysqli_query($con,$sql2); 


       $sqli="DROP TABLE `$table`";
       $que=mysqli_query($con,$sqli);
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
            move_uploaded_file($images[$last],"../images/index_img/$images[$last]");

            $sql1="INSERT INTO `branches`(id,branch_name,branch_code,branch_img)VALUES ('$last+1','$branch[$last]','$code[$last]','$images[$last]')"; 
            $add=mysqli_query($con,$sql1);
            if($add)
            {
                echo "added successfull";
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