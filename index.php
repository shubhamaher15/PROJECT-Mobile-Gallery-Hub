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
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <section>
        <header>
            <a href="#" class="logo">
            Mobile Gallery <span>Hub</span></a>
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

        <div class="texts">
                    <div class="background_image">
            <img src="img/index1.jpeg.AVIF">
        </div>
        <h1>Mobile <span>Gallery Hub</span></h1>
            <p>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </p>
        </div>
        <div class="btn">
           <a href="menu.php"><p class="order">Order Now</p></a>
        </div>
    </section>
</body>
</html>
<?php
print_r($_SESSION['food cart'])
?>