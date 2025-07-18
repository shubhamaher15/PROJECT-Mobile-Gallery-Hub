<?php
$fristName=$_POST["fristname"];
$lastName=$_POST["lastname"];
$email=$_POST["email"];
$password=$_POST["password"];
$confirmpassword=$_POST["confirmpassword"];
$contact=$_POST["contact"];
$gender=$_POST["gender"];

//database connecation

$conn=new mysqli('localhost','root','','test');
if($conn->connect_eror)
{
    die('Connection failed : '.$conn->connect_error);
}
else
{
   $statement=$conn->prepare("insert into registration(firstName,lastName,email,password,confirmpassword,contact,gender)values(?,?,?,?,?,?,?)");
   $statement->bind_param("sssssi",$fristName,$lastName,$email,$password,$confirmpassword,$contact,$gender);
   $statement->execute();
   echo "registration successfully";
   $statement->close();
   $conn->close();
}
?>
