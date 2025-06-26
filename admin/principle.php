<?php
 $con=mysqli_connect('localhost','root','','id20532735_gptplpt2');
?>
<!DOCTYPE html>
<html>
<head>
 <title>Round image in top right corner</title>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <style>
  /* Style the container element */
  .container {
   /* display: ; */
   flex-wrap: wrap;
   align-items: flex-start;
   position: relative;
   padding-top: 3%;
  }

  /* Style the round image */
  .round-img {
   order: 2;
   flex: 0 0 25%;
   max-width: 200px;
   height:200px;
   border-radius: 50%;
   object-fit: cover;
   margin-left: auto;
   margin-right: -1em;
   margin-top: -1em;
   shape-outside: circle(); /* use a circle shape for the image */
   float: right; /* float the image to the right */
   z-index: 1; /* set a higher z-index to ensure the image is on top of the text */
  }

  /* Style the text */
  .text {
   order: 1;
   flex: 1 0 calc(75% - 1em);
   margin-right: 1em;
   text-align: justify;
   z-index: 0; /* set a lower z-index to ensure the text is behind the image */
  }

  .text h3{
    margin-left:80%;
    margin-top:-10px;
  }

  .text h4{
    margin-left:75%;
  }

  /* Style the last line of text */
  .text:after {
   content: "";
   display: inline-block;
   width: 1em;
  }

  /* Responsive styles for mobile */
  @media (max-width: 768px) {
   .container {
    flex-direction: column;
    align-items: center;
    padding-top: 0;
   }
   
   .round-img {
    order: 1;
    flex: 0 0 auto;
    max-width: 100%;
    height: 200px;
    margin-left: 0;
    margin-right: 0;
    margin-top: 1em;
    margin-bottom: 1em;
   shape-outside: circle() /* disable shape-outside for mobile view */
    
   }
   
   .text {
    order: 2;
    flex: 1 0 auto;
    margin-right: 0;
    text-align: center;
   }
   
   .text:after {
    display: none;
   }
  }
 </style>
</head>
<body>
  <?php 
    $sql="SELECT * FROM `principlemsg`";
    $que=mysqli_query($con,$sql);
    while($row=mysqli_fetch_assoc($que))
    {
  ?>
 <div class="container">
  <img class="round-img" src=<?php echo $row['image'];?> alt="Round image">
  <div class="text">
   <center><h2>Principal's message</h2></center>
   <p><?php echo $row['message'];?></p>
   </p>
   <h4>--By the principle</h4>
   <h3><?php echo $row['name'];?></h3>
   <?php
    }
   ?>
  </div>
 </div>
</body>
</html>


