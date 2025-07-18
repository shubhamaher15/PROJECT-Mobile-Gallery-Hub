<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Insert Product</title>
  <link rel="stylesheet" href="insert.css">

</head>
<body>
<div>
  <form method="POST" enctype="multipart/form-data">
    <h2>Add New Products</h2>

    <label>Product Name :</label>
    <input type="text" name="product_name" placeholder="Product name...">

    <label>Description:</label><br>
    <textarea name="pdesc" required></textarea>
    <br>
    <label>Rate :</label>
    <input type="number" name="product_price" placeholder="Product rate...">

    <label\>Select Product Image :</label>
    <input type="file" name="img" required>

    <label>Enter Path :</label>
    <input type="text" required="required" name="value" value="img/">

    <input type="submit" name="submit" value="Add Product">
 </form>
</div>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
    $pname = $_POST['product_name'];
    $desc=$_POST['pdesc'];
    $pprice=$_POST['product_price'];
    //$pimage=$_POST['img'];
    $filename=$_FILES['img']['name'];
    $destination='img/'.$filename;
    $file=$_FILES['img']['tmp_name'];
    if(empty($pname) || empty($pprice))
    {
    	echo"<script>alert('please fill out all fields');</script>";
    }
    else{
    	$conn=mysqli_connect('localhost','root','','admin login');
    	$sql="INSERT INTO products(pname,pdesc, price, pimage) VALUES ('$pname','$desc','$pprice','$_POST[value]')";
    	$op=mysqli_query($conn,$sql);
    	if($op)
      {
    		if(move_uploaded_file($file,$destination))
        {
    		 echo"<script>alert('item Added Successfully..!');</script>";
    	  }
      }
    	else{
    		echo"<h3>Could not able to add items..".mysqli_error($conn);
    	}
    }
}



?>
