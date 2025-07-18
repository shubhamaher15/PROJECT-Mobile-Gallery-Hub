<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Update Item</title>
  <link rel="stylesheet" href="insert.css">
</head>
<body>
<div>
  <form method="POST">
    <h2>Update Products</h2>
    
    <label>Existing Product Name :</label>
    <input type="text" id="fname" name="p_name" placeholder="Product name...">

    <label>New Product name :</label>
    <input type="text" name="product_name" placeholder="Product new name...">

    <label>Enter Price :</label>
    <input type="number"  name="product_price" placeholder="Product Price...">
  
    <input type="submit" name="submit" value="Update">
  </form>
</div>
</body>
</html>
<?php
if(isset($_POST['submit'])){
$newname=$_POST['product_name'];
$oldname=$_POST['p_name'];
$newval=$_POST['product_price'];
  $conn=mysqli_connect('localhost','root','','admin login');
  $query=mysqli_query($conn,"update products set pname='$newname', price='$newval' WHERE pname='$oldname'");
  if($query){
    echo"<script>alert('Values Updated Successfully');</script>";
  }
  else{
    echo"Could not update the values".mysqli_error($conn);
  }
}
?>