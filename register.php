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

            <form action="handleForm.php" method="POST">
                <div class="fields">
                    <p><input type="text" placeholder="new username" class="fields" name="username"></p>
                    <p><input type="password" placeholder="new password" class="fields" name="password"></p>
                    <p><input type="submit" value="Register" id="submitBtn" name="regBtn"></p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>