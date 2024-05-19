<?php 
session_start();

if(isset($_SESSION['welcomeMessage']) && !isset($_SESSION['username'])) {
	header("Location: order.php");
}


?>
<!DOCTYPE html>
<html>
<head>
    <title>User Login</title>
    <style>
        .blue-rectangle {
            margin: 200px 500px 75px;
            background-color: #00FFFFFF;
            border-radius: 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: rgb(0, 0, 0);
            font-family:'Times New Roman', Times, serif;
            border: 2px solid black
        }
        .content-wrapper {
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body>

    <div class = "blue-rectangle">
        <div class = "content-wrapper">
            <h1 style ="text-align:center;">User Login</h1> 
            <h2>
                <!--User login first name-->
                <?php
                if(isset($_SESSION['firstName'])) {
                    echo $_SESSION['firstName'];
                }
                ?>      
            </h2>

            <h2>
                <!--User login password-->
                <?php
                if(isset($_SESSION['password'])) {
                    echo $_SESSION['password'];
                }
                ?>     
            </h2>
            <a href="logout.php">Logout</a>

            <form action="handleForm.php" method="POST">
                <div class="fields">
                    <p><input type="text" placeholder="Username" class="fields" name="username"></p>
                    <p><input type="password" placeholder="Password" class="fields" name="password"></p>
                    <p><input type="submit" value="Login" id="loginBtn" name="loginBtn"></p>
					<a href ="register.php">Register</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>