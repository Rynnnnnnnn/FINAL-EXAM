<!DOCTYPE html>
<html>
<head>
    <title>Order Summary</title>
</head>
<body>
    <h2>Receipt</h2>
    <?php
    $item = $_POST['item'];
    $quantity = $_POST['quantity'];
    $cash = $_POST['cash'];

    $prices = array(
        "Fishball" => 30.00,
        "Kikiam" => 40.00,
        "Corndog" => 50.00
    );

    $total_cost = $prices[$item] * $quantity;
    $change = $cash - $total_cost;

    if ($change >= 0) {
        echo "<p><b>Total Cost is: PHP $total_cost</b></p>";
        echo "<p><b>Change: PHP $change</b></p>";
        echo "<p>Thank for the order!</p>";
    } else {
        echo "<p>The cash received is not enough please try again.</p>";
    }
    ?>
</body>
</html>