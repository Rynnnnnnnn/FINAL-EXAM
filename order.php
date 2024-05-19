<!DOCTYPE html>
<html>
<head>
    <title>PHP Fundamentals: Part 2</title>
</head>
<body>
    <h1>Welcome to the canteen! Here are the prices</h1>
    <ul>
        <li>Fishball - 30 PHP</li>
        <li>Kikiam - 40 PHP</li>
        <li>Corndog - 50 PHP</li>
    </ul>

    <!-- Order Form -->
    <h2>Place Your Order</h2>
    <form action="order_summary.php" method="post">
        <label for="item">Choose your order:</label>
        <select id="item" name="item">
            <option value="Fishball">Fishball</option>
            <option value="Kikiam">Kikiam</option>
            <option value="Corndog">Corndog</option>
        </select><br><br>

        <label for="quantity">Quantity: </label>
        <input type="number" id="quantity" name="quantity" required><br><br>

        <label for="cash">Cash: </label>
        <input type="number" id="cash" name="cash" required><br><br>

        <input type="submit" name="orderBtn" value="Submit Order">

        <a href= "logout.php" > Logout </a>  
    </form>
</body>
</html>
