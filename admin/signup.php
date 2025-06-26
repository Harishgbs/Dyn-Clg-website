<?php

$con =mysqli_connect('localhost','root','','id20532735_gptplpt2');

if(!$con){
    die("database is not connected".mysqli_connect_error());
}
     
else{
    if(isset($_POST['signup'])){
        $name =$_POST['name'];
        $email=$_POST['email'];
        $pwd =$_POST['pass'];
    
        $sql="INSERT INTO `signup`(`id`,`name`,`email`,`pswd`) VALUES('','$name','$email','$pwd')";
        $query = mysqli_query($con,$sql);
         if($query){
             echo "em ra chasthana";
         }
         else{
             echo "Net chusukora ";
         }
     }
     else{
         echo"paka kalli adduko ";
    }
}
?>