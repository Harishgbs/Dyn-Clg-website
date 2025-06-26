<?php
    $con=mysqli_connect('localhost','root','','id20532735_gptplpt2');
   
    if(!$con){
        die("database is not connected".mysqli_connect_error());
    }
     else{
       if(isset($_POST['email'])){
        $email=$_POST['email'];
        $pwd =$_POST['pswd'];

        $sql = "SELECT * FROM `signup` where email='".$email."'AND pswd='".$pwd."' ";

        $result= mysqli_query($con,$sql);

        if(mysqli_num_rows($result)){
            header("location:../html?logged");
           
        }
        else{
            echo "password or email is wrong";
        }
       }
     }
?>