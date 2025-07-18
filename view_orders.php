<html>
<head>
   <!DOCTYPE html>
   <html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View orders</title>
<style>
    *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: "Inter", sans-serif;
  color: #343a40;
  background: lightgray;
  line-height: 1;
  display: flex;
  justify-content: center;
}

table {
  width: 800px;
  height: 300px;
  margin-top: 50px;
  font-size: 18px;
  border-collapse: collapse;
  background: whitesmoke;
  border-color: white;
  }

td{
  padding: 16px 24px;
  text-align: center;
}

th {
  padding: 12px 20px;
  text-align: center;
  background: #b36982;
  color: white;
  width: 25%;
}
</style>
</head>
<body >
<table border="2">
        <tr>
            <th colspan='7'>Customer Orders</th>
        </tr>
        <tr>
            <th>Customer Name</th>
            <th>Mobile No</th>
            <th>Email</th>
            <th>Address</th>
            <th>Pincode</th>
            <th>Total</th>

        </tr>
<?php
$conn=mysqli_connect('localhost','root','','admin login');
/*if($conn){
    echo"<script>alert('database connected');</script>";
}*/
$query=mysqli_query($conn,"select * from orders");
while($r3=mysqli_fetch_array($query))
{
    echo"<td>".$r3['name']."</td>
    <td>".$r3['mob']."</td>
    <td>".$r3['email']."</td>
    <td>".$r3['address']."</td>
    <td>".$r3['pin']."</td>
    <td>".$r3['total']."</td>

</tr>";
}
echo"</table>";
mysqli_close($conn);

?>  
   </body>
   </html>