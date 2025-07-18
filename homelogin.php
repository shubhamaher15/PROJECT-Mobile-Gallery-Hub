<!DOCTYPE html>
<html lang="en">

<head>
    <title>HTML Registration Form</title>
    <link rel="stylesheet" href="css/homelogin.css">

    
</head>


  <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .main {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            padding: 50px;
            width: 450px;
        }

        .main h2 {
            color: #4caf50;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        select {
            width: 100%;
            margin-bottom: 15px;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        button[type="submit"] {
            padding: 15px;
            border-radius: 10px;
            border: none;
            background-color: #4caf50;
            color: white;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }
    </style>

<body>
    <div class="main">
        <h2>Registration Form</h2>
        <form action="index.php"  method="post">
            <label for="firstName">First Name:</label>
            <input type="text" id="first" name="first" required />

            <label for="lastName">Last Name:</label>
            <input type="text" id="last" name="last" required />

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required />

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required />

            <label for="confirmpassword">Confirm Password:</label>
            <input type="password" id="confirmpassword" name="confirmpassword" required />

            <label for="contact">Contact:</label>
            <input type="text" id="mobile" name="mobile" maxlength="10" required />

            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="male">
                    Male
                </option>
                <option value="female">
                    Female
                </option>
                <option value="other">
                    Other
                </option>
            </select>

            <button type="submit">
                Submit
            </button>
        </form>
    </div>
</body>

</html>
<?php
if(isset($_POST['submit']))
{
$Fristname=$_POST["Fristname"];
$Lastname=$_POST["Lastname"];
$email=$_POST["email"];
$password=$_POST["password"];
$Contact=$_POST["Contact"];
$Gender=$_POST["Gender"];
$conn=mysqli_connect("localhost","root","","homelogin.php");
$select="select username, password,email id,mobile no from login where Fristname='$Fristname' and Lastname=$Lastname and email='$email'  and password='$password' and 
                                                                         Contact='$Contact' and Gender=$Gender";
$op=mysqli_query($conn,$select);
$r=mysqli_fetch_array($op);
if($Fristname=$r['Fristname'] && $Lastname=$r['Lastname'] && $email=$r['email'] && $password=$r['password'] && $Contact=$r['Contact'] && $Gender=$r['Gender'])
{
  echo"<script>window.location='online mobile shop/index.php';</script>";
}
else
{
  echo"<script>alert('usernamename or password is incorrect');</script>";
}
}
?>
