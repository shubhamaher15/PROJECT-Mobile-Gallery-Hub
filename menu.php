
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
    <title>Mobile Products</title>
    <link rel="stylesheet" href="css/menu.css">
</head>
<body>
    
    <section>
    <header>
            <a href="#" class="logo">
                Mobile Gallery<span> Hub</span></a>
              <ul>
                <li><b><a href="index.php">Home</a></b></li>
                <li><b><a href="about.php">About</a></b></li>
                <li><b><a href="menu.php">Menu</a></b></li>
                <?php
                  if(isset($_SESSION['bill'])){
                  $count=count($_SESSION['bill']);
                }
                ?>
                <li><b><a href="billing_form.php">Card(<?php echo $count;?>)</a></b></li>
                <li><b><a href="contact.php">Contact</a></b></li>
                <li><b><a href="feedback.php">Feedback</a></b></li>
               </ul>
            <p><b><a href="login.php">Login</a></b></p>
        </header>
            <h2>Mobile Products</h2>
            <div class="row">

            <?php
                $sql=mysqli_query($conn,"select * from products where pid='1'");
                $r=mysqli_fetch_array($sql);
                if(mysqli_num_rows($sql) > 0){
                   
                    $img=$r["pimage"];
                 echo'   
                <form action="billing_form.php" method="POST">
                <div class="fooditem">
                    <a href="'.$img.'"><img src="'.$img.'"></a>
                    <h3>'.$r['pname'].'</h3>
                    <input type="hidden" name="item_name" value="'.$r['pname'].'" readonly></h1>
                    <p>'.$r['pdesc'].'</p>
                    <input type="hidden" name="price" value="'.$r['price'].'" readonly></h1>
                    </p>Price: <b>'.$r['price'].'</b><br>
                    <input type="hidden" name="quantity"><br>
                    <button type="hidden" name="atoc">Buy Now</button>
                </form>
                </div>';
            }
            ?>

            <?php
                $sql=mysqli_query($conn,"select * from products where pid='2'");
                $r=mysqli_fetch_array($sql);
                if(mysqli_num_rows($sql) > 0){
                   
                    $img=$r["pimage"];
                 echo'   
                <form action="billing_form.php" method="POST">
                <div class="fooditem">
                    <a href="'.$img.'"><img src="'.$img.'"></a>
                    <h3>'.$r['pname'].'</h3>
                    <input type="hidden" name="item_name" value="'.$r['pname'].'" readonly></h1>
                    <p>'.$r['pdesc'].'</p>
                    <input type="hidden" name="price" value="'.$r['price'].'" readonly></h1>
                    </p>Price: <b>'.$r['price'].'</b><br>
                    <input type="hidden" name="quantity"><br>
                    <button type="hidden" name="atoc">Buy Now</button>
                </form>
                </div>';
            }
            ?>

            <?php
                $sql=mysqli_query($conn,"select * from products where pid='3'");
                $r=mysqli_fetch_array($sql);
                if(mysqli_num_rows($sql) > 0){
                   
                    $img=$r["pimage"];
                 echo'   
                <form action="billing_form.php" method="POST">
                <div class="fooditem">
                    <a href="'.$img.'"><img src="'.$img.'"></a>
                    <h3>'.$r['pname'].'</h3>
                    <input type="hidden" name="item_name" value="'.$r['pname'].'" readonly></h1>
                    <p>'.$r['pdesc'].'</p>
                    <input type="hidden" name="price" value="'.$r['price'].'" readonly></h1>
                    </p>Price: <b>'.$r['price'].'</b><br>
                    <input type="hidden" name="quantity"><br>
                    <button type="hidden" name="atoc">Buy Now</button>
                </form>
                </div>';
            }
            ?>
            <?php
                $sql=mysqli_query($conn,"select * from products where pid='4'");
                $r=mysqli_fetch_array($sql);
                if(mysqli_num_rows($sql) > 0){
                   
                    $img=$r["pimage"];
                 echo'   
                <form action="billing_form.php" method="POST">
                <div class="fooditem">
                    <a href="'.$img.'"><img src="'.$img.'"></a>
                    <h3>'.$r['pname'].'</h3>
                    <input type="hidden" name="item_name" value="'.$r['pname'].'" readonly></h1>
                    <p>'.$r['pdesc'].'</p>
                    <input type="hidden" name="price" value="'.$r['price'].'" readonly></h1>
                    </p>Price: <b>'.$r['price'].'</b><br>
                    <input type="hidden" name="quantity"><br>
                    <button type="hidden" name="atoc">Buy Now</button>
                </form>
                </div>';
            }
            ?>

            <?php
                $sql=mysqli_query($conn,"select * from products where pid='5'");
                $r=mysqli_fetch_array($sql);
                if(mysqli_num_rows($sql) > 0){
                   
                    $img=$r["pimage"];
                 echo'   
                <form action="billing_form.php" method="POST">
                <div class="fooditem">
                    <a href="'.$img.'"><img src="'.$img.'"></a>
                    <h3>'.$r['pname'].'</h3>
                    <input type="hidden" name="item_name" value="'.$r['pname'].'" readonly></h1>
                    <p>'.$r['pdesc'].'</p>
                    <input type="hidden" name="price" value="'.$r['price'].'" readonly></h1>
                    </p>Price: <b>'.$r['price'].'</b><br>
                    <input type="hidden" name="quantity"><br>
                    <button type="hidden" name="atoc">Buy Now</button>
                </form>
                </div>';
            }
            ?>

            <?php
                $sql=mysqli_query($conn,"select * from products where pid='6'");
                $r=mysqli_fetch_array($sql);
                if(mysqli_num_rows($sql) > 0){
                   
                    $img=$r["pimage"];
                 echo'   
                <form action="billing_form.php" method="POST">
                <div class="fooditem">
                    <a href="'.$img.'"><img src="'.$img.'"></a>
                    <h3>'.$r['pname'].'</h3>
                    <input type="hidden" name="item_name" value="'.$r['pname'].'" readonly></h1>
                    <p>'.$r['pdesc'].'</p>
                    <input type="hidden" name="price" value="'.$r['price'].'" readonly></h1>
                    </p>Price: <b>'.$r['price'].'</b><br>
                    <input type="hidden" name="quantity"><br>
                    <button type="hidden" name="atoc">Buy Now</button>
                </form>
                </div>';
            }
            ?>
            
        <?php
            $sql=mysqli_query($conn,"select * from products where pid='7'");
            $r=mysqli_fetch_array($sql);
            if(mysqli_num_rows($sql) > 0){
               
                $img=$r["pimage"];
             echo'   
            <form action="billing_form.php" method="POST">
            <div class="fooditem">
                <a href="'.$img.'"><img src="'.$img.'"></a>
                <h3>'.$r['pname'].'</h3>
                <input type="hidden" name="item_name" value="'.$r['pname'].'" readonly></h1>
                <p>'.$r['pdesc'].'</p>
                <input type="hidden" name="price" value="'.$r['price'].'" readonly></h1>
                </p>Price: <b>'.$r['price'].'</b><br>
                <input type="hidden" name="quantity"><br>
                <button type="hidden" name="atoc">Buy Now</button>
            </form>
            </div>';
        }
        ?>

        <?php
                $sql=mysqli_query($conn,"select * from products where pid='8'");
                $r=mysqli_fetch_array($sql);
                if(mysqli_num_rows($sql) > 0){
                   
                    $img=$r["pimage"];
                 echo'   
                <form action="billing_form.php" method="POST">
                <div class="fooditem">
                    <a href="'.$img.'"><img src="'.$img.'"></a>
                    <h3>'.$r['pname'].'</h3>
                    <input type="hidden" name="item_name" value="'.$r['pname'].'" readonly></h1>
                    <p>'.$r['pdesc'].'</p>
                    <input type="hidden" name="price" value="'.$r['price'].'" readonly></h1>
                    </p>Price: <b>'.$r['price'].'</b><br>
                    <input type="hidden" name="quantity"><br>
                    <button type="hidden" name="atoc">Buy Now</button>
                </form>
                </div>';
            }
            ?>

            <?php
                $sql=mysqli_query($conn,"select * from products where pid='9'");
                $r=mysqli_fetch_array($sql);
                if(mysqli_num_rows($sql) > 0){
                   
                    $img=$r["pimage"];
                 echo'   
                <form action="billing_form.php" method="POST">
                <div class="fooditem">
                    <a href="'.$img.'"><img src="'.$img.'"></a>
                    <h3>'.$r['pname'].'</h3>
                    <input type="hidden" name="item_name" value="'.$r['pname'].'" readonly></h1>
                    <p>'.$r['pdesc'].'</p>
                    <input type="hidden" name="price" value="'.$r['price'].'" readonly></h1>
                    </p>Price: <b>'.$r['price'].'</b><br>
                    <input type="hidden" name="quantity"><br>
                    <button type="hidden" name="atoc">Buy Now</button>
                </form>
                </div>';
            }
            ?>

            <?php
                $sql=mysqli_query($conn,"select * from products where pid='10'");
                $r=mysqli_fetch_array($sql);
                if(mysqli_num_rows($sql) > 0){
                   
                    $img=$r["pimage"];
                 echo'   
                <form action="billing_form.php" method="POST">
                <div class="fooditem">
                    <a href="'.$img.'"><img src="'.$img.'"></a>
                    <h3>'.$r['pname'].'</h3>
                    <input type="hidden" name="item_name" value="'.$r['pname'].'" readonly></h1>
                    <p>'.$r['pdesc'].'</p>
                    <input type="hidden" name="price" value="'.$r['price'].'" readonly></h1>
                    </p>Price: <b>'.$r['price'].'</b><br>
                    <input type="hidden" name="quantity"><br>
                    <button type="hidden" name="atoc">Buy Now</button>
                </form>
                </div>';
            }
            ?>

            <?php
                $sql=mysqli_query($conn,"select * from products where pid='11'");
                $r=mysqli_fetch_array($sql);
                if(mysqli_num_rows($sql) > 0){
                   
                    $img=$r["pimage"];
                 echo'   
                <form action="billing_form.php" method="POST">
                <div class="fooditem">
                    <a href="'.$img.'"><img src="'.$img.'"></a>
                    <h3>'.$r['pname'].'</h3>
                    <input type="hidden" name="item_name" value="'.$r['pname'].'" readonly></h1>
                    <p>'.$r['pdesc'].'</p>
                    <input type="hidden" name="price" value="'.$r['price'].'" readonly></h1>
                    </p>Price: <b>'.$r['price'].'</b><br>
                    <input type="hidden" name="quantity"><br>
                    <button type="hidden" name="atoc">Buy Now</button>
                </form>
                </div>';
            }
            ?>

            <?php
                $sql=mysqli_query($conn,"select * from products where pid='12'");
                $r=mysqli_fetch_array($sql);
                if(mysqli_num_rows($sql) > 0){
                   
                    $img=$r["pimage"];
                 echo'   
                <form action="billing_form.php" method="POST">
                <div class="fooditem">
                    <a href="'.$img.'"><img src="'.$img.'"></a>
                    <h3>'.$r['pname'].'</h3>
                    <input type="hidden" name="item_name" value="'.$r['pname'].'" readonly></h1>
                    <p>'.$r['pdesc'].'</p>
                    <input type="hidden" name="price" value="'.$r['price'].'" readonly></h1>
                    </p>Price: <b>'.$r['price'].'</b><br>
                    <input type="hidden" name="quantity"><br>
                    <button type="hidden" name="atoc">Buy Now</button>
                </form>
                </div>';
            }
            ?>

            <?php
                $sql=mysqli_query($conn,"select * from products where pid='13'");
                $r=mysqli_fetch_array($sql);
                if(mysqli_num_rows($sql) > 0){
                   
                    $img=$r["pimage"];
                 echo'   
                <form action="billing_form.php" method="POST">
                <div class="fooditem">
                    <a href="'.$img.'"><img src="'.$img.'"></a>
                    <h3>'.$r['pname'].'</h3>
                    <input type="hidden" name="item_name" value="'.$r['pname'].'" readonly></h1>
                    <p>'.$r['pdesc'].'</p>
                    <input type="hidden" name="price" value="'.$r['price'].'" readonly></h1>
                    </p>Price: <b>'.$r['price'].'</b><br>
                    <input type="hidden" name="quantity"><br>
                    <button type="hidden" name="atoc">Buy Now</button>
                </form>
                </div>';
            }
            ?>

            <?php
                $sql=mysqli_query($conn,"select * from products where pid='14'");
                $r=mysqli_fetch_array($sql);
                if(mysqli_num_rows($sql) > 0){
                   
                    $img=$r["pimage"];
                 echo'   
                <form action="billing_form.php" method="POST">
                <div class="fooditem">
                    <a href="'.$img.'"><img src="'.$img.'"></a>
                    <h3>'.$r['pname'].'</h3>
                    <input type="hidden" name="item_name" value="'.$r['pname'].'" readonly></h1>
                    <p>'.$r['pdesc'].'</p>
                    <input type="hidden" name="price" value="'.$r['price'].'" readonly></h1>
                    </p>Price: <b>'.$r['price'].'</b><br>
                    <input type="hidden" name="quantity"><br>
                    <button type="hidden" name="atoc">Buy Now</button>
                </form>
                </div>';
            }
            ?>

            <?php
                $sql=mysqli_query($conn,"select * from products where pid='15'");
                $r=mysqli_fetch_array($sql);
                if(mysqli_num_rows($sql) > 0){
                   
                    $img=$r["pimage"];
                 echo'   
                <form action="billing_form.php" method="POST">
                <div class="fooditem">
                    <a href="'.$img.'"><img src="'.$img.'"></a>
                    <h3>'.$r['pname'].'</h3>
                    <input type="hidden" name="item_name" value="'.$r['pname'].'" readonly></h1>
                    <p>'.$r['pdesc'].'</p>
                    <input type="hidden" name="price" value="'.$r['price'].'" readonly></h1>
                    </p>Price: <b>'.$r['price'].'</b><br>
                    <input type="hidden" name="quantity"><br>
                    <button type="hidden" name="atoc">Buy Now</button>
                </form>
                </div>';
            }
            ?>

<?php
                $sql=mysqli_query($conn,"select * from products where pid='16'");
                $r=mysqli_fetch_array($sql);
                if(mysqli_num_rows($sql) > 0){
                   
                    $img=$r["pimage"];
                 echo'   
                <form action="billing_form.php" method="POST">
                <div class="fooditem">
                    <a href="'.$img.'"><img src="'.$img.'"></a>
                    <h3>'.$r['pname'].'</h3>
                    <input type="hidden" name="item_name" value="'.$r['pname'].'" readonly></h1>
                    <p>'.$r['pdesc'].'</p>
                    <input type="hidden" name="price" value="'.$r['price'].'" readonly></h1>
                    </p>Price: <b>'.$r['price'].'</b><br>
                    <input type="hidden" name="quantity"><br>
                    <button type="hidden" name="atoc">Buy Now</button>
                </form>
                </div>';
            }
            ?>

<?php
                $sql=mysqli_query($conn,"select * from products where pid='17'");
                $r=mysqli_fetch_array($sql);
                if(mysqli_num_rows($sql) > 0){
                   
                    $img=$r["pimage"];
                 echo'   
                <form action="billing_form.php" method="POST">
                <div class="fooditem">
                    <a href="'.$img.'"><img src="'.$img.'"></a>
                    <h3>'.$r['pname'].'</h3>
                    <input type="hidden" name="item_name" value="'.$r['pname'].'" readonly></h1>
                    <p>'.$r['pdesc'].'</p>
                    <input type="hidden" name="price" value="'.$r['price'].'" readonly></h1>
                    </p>Price: <b>'.$r['price'].'</b><br>
                    <input type="hidden" name="quantity"><br>
                    <button type="hidden" name="atoc">Buy Now</button>
                </form>
                </div>';
            }
            ?>

<?php
                $sql=mysqli_query($conn,"select * from products where pid='18'");
                $r=mysqli_fetch_array($sql);
                if(mysqli_num_rows($sql) > 0){
                   
                    $img=$r["pimage"];
                 echo'   
                <form action="billing_form.php" method="POST">
                <div class="fooditem">
                    <a href="'.$img.'"><img src="'.$img.'"></a>
                    <h3>'.$r['pname'].'</h3>
                    <input type="hidden" name="item_name" value="'.$r['pname'].'" readonly></h1>
                    <p>'.$r['pdesc'].'</p>
                    <input type="hidden" name="price" value="'.$r['price'].'" readonly></h1>
                    </p>Price: <b>'.$r['price'].'</b><br>
                    <input type="hidden" name="quantity"><br>
                    <button type="hidden" name="atoc">Buy Now</button>
                </form>
                </div>';
            }
            ?>

            <?php
                $sql=mysqli_query($conn,"select * from products where pid='19'");
                $r=mysqli_fetch_array($sql);
                if(mysqli_num_rows($sql) > 0){
                   
                    $img=$r["pimage"];
                 echo'   
                <form action="billing_form.php" method="POST">
                <div class="fooditem">
                    <a href="'.$img.'"><img src="'.$img.'"></a>
                    <h3>'.$r['pname'].'</h3>
                    <input type="hidden" name="item_name" value="'.$r['pname'].'" readonly></h1>
                    <p>'.$r['pdesc'].'</p>
                    <input type="hidden" name="price" value="'.$r['price'].'" readonly></h1>
                    </p>Price: <b>'.$r['price'].'</b><br>
                    <input type="hidden" name="quantity"><br>
                    <button type="hidden" name="atoc">Buy Now</button>
                </form>
                </div>';
            }
            else{
                echo"";
                }
            ?>      
        </div>
      </section>
    </body>
</html>
