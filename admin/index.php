<!DOCTYPE html>
<html>
<head>
    <title>login</title>
    <style>
        .login{
            border:2px solid lightblue;
            box-shadow:3px 4px 5px 3px lightblue;
            border-radius:5px;
            height: 440px;
            width:350px;
            margin: 40px 0px 0px 410px;  
            display:flex;
            flex-direction:row;
            justify-content:center;         
        }
        form{
            margin-top:20px;
        }
        input{
            height:25px;
            width:85%;
        }
    </style>
</head>
<body>
    <div class="login">
        <form action="indexlogchecker.php" method="POST">
            <center><h1>Login</h1></center><br><br><br>
            <input type="email" name="email" placeholder="Email" required autocomplete="off"><br><br>
            <input type="password" name="pswd" placeholder="Password" required autocomplete="off"><br><br>
            <button type="submit" name="submitt">Submit</button>
        </form>
    </div>
</body>
</html>
