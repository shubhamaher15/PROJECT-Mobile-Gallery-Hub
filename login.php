<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="css/login.css">
</head>
<body>
  <body>
    <div class="container">
    <form action="login.php" method="post">
        <h1>Admin Login</h1>
        <hr>
        <label for="username">
            <input type="username" id="username" placeholder="username" name="username" required/>
        </label>
        <label for="password">
            <input type="password" id="password" placeholder="Password" name="password" required/>
        </label>
        <label for="submit">
            <input type="submit" id="submit" name="submit" value="Login">
        </label>
</form>
    </div>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
$username=$_POST["username"];
$password=$_POST["password"];
$conn=mysqli_connect("localhost","root","","admin login");
$select="select username, password from login where username='$username' and password='$password'";
$op=mysqli_query($conn,$select);
$r=mysqli_fetch_array($op);
if($username=$r['username'] && $password=$r['password'])
{
  echo"<script>window.location='Admin/index.html';</script>";
}
else
{
  echo"<script>alert('usernamename or password is incorrect');</script>";
}
}
?>