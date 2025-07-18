<!DOCTYPE html>
<html lang="en">
<head>
    <center>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Billing Invoice</title>
    <link rel="stylesheet" href="css/generate_invoice.css">
</head>
<body>
    <h2>Billing Invoice</h2>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['name']) && !empty($_POST['mobile_no']) && !empty($_POST['pincode']) && !empty($_POST['address']) && !empty($_POST['mobile_model']) && !empty($_POST['quantity'])) {
        $name = htmlspecialchars($_POST['name']);
        $mobile_no = htmlspecialchars($_POST['mobile_no']);
        $pincode = htmlspecialchars($_POST['pincode']);
        $address = htmlspecialchars($_POST['address']);
        $mobile_models = $_POST['mobile_model']; // This is an array
        $quantities = explode(',', $_POST['quantity']); // Convert quantity input into an array
        if (count($mobile_models) !== count($quantities)) {
            echo "<p style='color:red;'>Error: Quantity count must match the number of selected mobiles.</p>";
            exit();
        }
        echo "<h1>Order Summary:</h1>";
        echo "<table border='1' cellpadding='5' cellspacing='0'>";
        echo "<tr><th>Customer Name</th><th>Mobile No</th><th>Pincode</th><th>Delivery Address</th><th>Mobile Model</th><th>Unit Price</th><th>Quantity</th><th>Total Price</th></tr>";
        $grand_total = 0;
        foreach ($mobile_models as $index => $mobile_info) {
            list($mobile_name, $price) = explode('|', $mobile_info); // Extract name and price
            $quantity = intval(trim($quantities[$index])); // Get corresponding quantity
            if ($quantity < 1) continue; // Skip invalid entries
            $total_price = $price * $quantity;
            $grand_total += $total_price;
            echo "<tr>
                    <td>$name</td>
                    <td>$mobile_no</td>
                    <td>$pincode</td>
                    <td>$address</td>
                    <td>$mobile_name</td>
                    <td>$price</td>
                    <td>$quantity</td>
                    <td>$total_price</td>
                  </tr>";
        }
        echo "<tr><td colspan='7'><strong>Grand Total:</strong></td><td><strong>$grand_total</strong></td></tr>";
        echo "</table>";
    } else {
        echo "<p style='color:red;'>All fields are required.</p>";
    }
} else {
    echo "<p>Invalid request.</p>";
}
?>