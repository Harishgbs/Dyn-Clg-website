<?php

    $con=mysqli_connect('localhost','root','','id20532735_gptplpt2');

   

    if(!$con){

        die("database is not connected".mysqli_connect_error());

    }

     else{

       if(isset($_POST['submitt'])){

        $email=$_POST['email'];

        $pwd =$_POST['pswd'];



        $sql = "SELECT * FROM `adminlogin` where email='".$email."'AND passw='".$pwd."' ";



        $result= mysqli_query($con,$sql);

        if(mysqli_num_rows($result)){

             $enter=1;

             header('location:admin.php');

        }

        else{

            $enter=0;

            echo "password or email is wrong";

        }

       }

     }

?>

