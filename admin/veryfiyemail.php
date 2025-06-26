<?php
$con=mysqli_connect('localhost','root','','id20532735_gptplpt2');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
     <label >enter email:</label>
    <input type="email" name="email"><br>
    <input type="submit" name="sendmail">
    </form>
   <?php
       if(isset($_POST['sendmail'])){
        $email=$_POST['email'];

        $fg="SELECT * FROM `adminlogin` where email='".$email."'";
        $ree=mysqli_query($con,$fg);
      
         
        if(mysqli_num_rows($ree)){
            $code = rand(99999,11111);
            // $to= "vishnuvardhan4741@gmail.com";
            $subject = "email verfiy";
            $body ="code is $code";
            $header ="From: pailaaswartha1@gmail.com";

            if(mail($email,$subject,$body,$header)){
              
                echo "hrrr";
         }
         else{
            echo "hjkfk";
         }
    }
    else{
        echo "mko";
    }
}
    else{
        echo "dd";
       }
    
       
   ?>

</body>
</html>