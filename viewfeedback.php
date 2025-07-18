<html>
<head>
   <!DOCTYPE html>
   <html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Feedbacks</title>
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
      border-color: white;
     }
    
    td{
      padding: 16px 24px;
      text-align: center;
    }
    
    th {
      padding: 16px 24px;
      text-align: center;
      background-color: #b36982;
      color: white;
      width: 25%;
    }
    
    body tr:nth-child(odd) {
    background-color: #f8f9fa;
    }

    body tr:nth-child(even) {
    background-color: #e9ecef;
    }
    </style>
</head>
<body >
  <table border="2">
        <tr>
          <th colspan='4'>Customer Feedbacks</th>
        </tr>
        <tr>
            <th>Customer Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
        </tr>
<?php
$conn=mysqli_connect('localhost','root','','admin login');
/*if($conn){
    echo"<script>alert('database connected');</script>";
}*/
$query=mysqli_query($conn,"select * from feedbacks");
while($r3=mysqli_fetch_array($query))
{
    echo"<tr><td>".$r3['id']."</td>
    <td>".$r3['name']."</td>
    <td>".$r3['email']."</td>
    <td>".$r3['message']."</td>
</tr>";
}
echo"</table>";
mysqli_close($conn);

?>  
   </body>
   </html>