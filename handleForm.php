handleforms code

<?php  
session_start();
require_once('dbConfig.php');
require_once('functions.php');

// Handle user registration
if (isset($_POST['regBtn'])) {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    if (empty($username) || empty($password)) {
        echo '<script> 
        alert("The input field is empty!");
        window.location.href = "register.php";
        </script>';
    } else {
        if (addUser($conn, $username, $password)) {
            header('Location: login.php');
        } else {
            header('Location: register.php');
        }
    }
}

// Handle user login
if (isset($_POST['loginBtn'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        echo "<script>
        alert('Input fields are empty!');
        window.location.href='index.php';
        </script>";
    } else {
        if (login($conn, $username, $password)) {
            header('Location: order.php');
        } else {
            header('Location: login.php');
        }
    }
}

// Handle order submission
if (isset($_POST['orderBtn'])) {
    $item = $_POST['item'];
    $quantity = $_POST['quantity'];
    $cash = $_POST['cash'];

    // Basic validation
    if (empty($item) || empty($quantity) || empty($cash)) {
        echo "<script>
        alert('Please fill out all fields.');
        window.location.href='index.html';
        </script>";
    } else {
        // Calculate the total price based on item prices
        $prices = [
            'Fishball' => 30,
            'Kikiam' => 40,
            'Corndog' => 50
        ];
        $totalPrice = $prices[$item] * $quantity;

        if ($cash >= $totalPrice) {
            $change = $cash - $totalPrice;
            echo "<h1>Order Summary</h1>";
            echo "<p>Item: $item</p>";
            echo "<p>Quantity: $quantity</p>";
            echo "<p>Total Price: $totalPrice PHP</p>";
            echo "<p>Cash: $cash PHP</p>";
            echo "<p>Change: $change PHP</p>";
        } else {
            echo "<script>
            alert('Insufficient cash. Please provide enough cash for your order.');
            window.location.href='index.html';
            </script>";
        }
    }
}
?>
