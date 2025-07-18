<?php
session_start();
error_reporting(0);
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Gallery Hub</title>
    <style>


*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: sans-serif;
}

section{
    width: 100%;
    height: 100%;
}

section header{
    display: flex;
    align-items: center;
    background: whitesmoke; 
    justify-content: space-around;
    box-shadow: 0 0 20px rgba(0,0,0,0.3);
}

section header .logo{
    font-size: 30px;
    color: black;
    text-decoration: none;
    font-weight: bold;
    margin: 15px 0;
}

section header .logo span{
    color: #f9004d;
}

section header ul{
    list-style: none;
}

section header ul li{
    display: inline-block;
    margin: 5px 5px;
    padding: 5px 20px;
}

section header ul li a{
    color: black;
    text-decoration: none;
}

section header ul li a:hover{
    color: #f9004d;
}
section header b a{
    color: black;
    text-decoration: none;
}
section header ul li a:hover{
    color: #f9004d;
}
section header p{
    cursor: pointer;
    padding: 10px 25px;
    border: 1px solid #f9004d;
    border-radius: 30px;
    transition: 0.3s;
}

section header p:hover{
    color: white;
    background: #f9004d;
}
    </style>
</head>
<body>
    <section>
        <header>
            <a href="#" class="logo">Mobile Gallery <span> Hub</span></a>
            <ul>
                <li><b><a href="index.php">Home</a></b></li>
                <li><b><a href="about.php">About</a></b></li>
                <li><b><a href="menu.php">Menu</a></b></li>
                
                <?php
                  if(isset($_SESSION['food cart'])){
                  $count=count($_SESSION['food cart']);
                }
                ?>
                <li><b><a href="food cart-system.php">Cart(<?php echo $count;?>)</a></b></li>                
                <li><b><a href="contact.php">Contact</a></b></li>
                <li><b><a href="feedback.php">Feedback</a></b></li>
               </ul>
            <p><b><a href="login.php">Login</a></b></p>
        </header>
    </section>
</body>
</html>