<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Mobile Billing Form</title>
    <link rel="stylesheet" href="css/billing_form.css">
</head>
<body>
    <center>
        <h1>Mobile Purchase Billing Form</h1>
        <form action="generate_invoice.php" method="POST">
            <label for="name">Customer Name:</label>
            <input type="text" name="name" required><br><br>
            <label for="mobile_no">Mobile No:</label>
            <input type="text" name="mobile_no" required><br><br>
            <label for="pincode">Pincode:</label>
            <input type="text" name="pincode" required><br><br>
            <label for="mobile_model">Select Mobile Models:</label>
            <select name="mobile_model[]" multiple required>
                <option value="samsung A55 5g|36999">samsung A55 5g - 36999</option>
                <option value="samsung s22 5g|72999">samsung s22 5g- 72999</option>
                <option value="samsung s23 5g|42999">samsung s23 5g - 42999</option>
                <option value="samsung s24 5g|121999">samsung s24 5g - 121999</option>
                <option value="realme gt 7 pro|59999">realme gt 7 pro - 59999</option>
                <option value="realme narso 70 turbo 5g|19999">realme narso 70 turbo 5g - 19999</option>
                <option value="realme P2 Pro 5g|21999">realme P2 Pro 5g - 21999</option>
                <option value="realme gt 6 5g|38999">Samsung S24 - 38999</option>
                <option value="redmi 13 5g|13999">redmi 13 5g - 13999</option>
                <option value="redmi note 12 pro|20999">redmi note 12 pro - 20999</option>
                <option value="redmi note 13 5g|17499">redmi note 13 5g - 17499</option>
                <option value="redmi note 14 5g|20499">redmi note 14 5g - 20499</option>
                <option value="vivo t3 5g|18499">vivo t3 5g - 18499</option>
                <option value="vivoo t3 pro|20499">vivoo t3 pro- 20499</option>
                <option value="vivo t3 ultra|33999">vivo t3 ultra - 33999</option>
                <option value="vivo x200 5g|92999">vivo x200 5g - 92999</option>
            </select><br><br>
            <label for="quantity">Enter Quantity (per model in order)</label>
            <input type="text" name="quantity" placeholder="e.g.1,2,3" required><br><br>
            <label for="address">Delivery Address:</label>
            <textarea name="address" required></textarea><br><br>
            <input type="submit" value="Generate Bill">
        </form>
    </center>
</body>
</html>

