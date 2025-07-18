<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Delete Products</title>
  <link rel="stylesheet" href="insert.css">
</head>
<body>
<div>
  <form method="POST" enctype="multipart/form-data">
    <h2>Delete Products</h2>
    <label>Existing Product Name :</label>
    <input type="text" name="p_name" placeholder="Product name...">
    <input type="submit" value="Delete" name="submit">
  </form>
</div>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
  $oldname=$_POST['p_name'];
  $conn=mysqli_connect('localhost','root','','admin login');
  $query=mysqli_query($conn,"delete from products where pname='$oldname'");
  if($query){
    echo"<script>alert('Mobile Product deleted Successfully..!');</script>";
  }
  else{
    echo"Mobile Product Not Deleted".mysqli_error($conn);
  }
}
?>