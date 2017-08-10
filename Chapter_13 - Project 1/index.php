<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <title>Index</title>

    <link rel="stylesheet" href="loginstyle.css">

</head>

<body>
    <div align="center"><img src="dlogo.jpg" style="height:80px;"></img>
    </div>
    <div class="wrapper" align="center">
        <div class="container">
            <h1>Welcome Olti</h1>

            <form class="form" name="loginform" method="POST" action="login.php">
                <input type="text" placeholder="Username" name="id" id="id" required>
                <input type="password" placeholder="Password" name="password" id="password" required>
                <button type="submit" id="login-button">Login</button>
            </form>
        </div>
    </div>

</body>

</html>
