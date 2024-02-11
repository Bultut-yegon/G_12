<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body background="./images/kcb4.jpg" class="bodyBack">
    <center>
        <div class="loginForm">
            <center class="titleLogin">
                Login Form
            </center>
            <form action="login_checkup.php" method="POST" class="formlog">
                <div>
                    <label class="labelLogin" for="email">Email</label>
                    <input type="email" name="email">
                </div>

                <div>
                    <label class="labelLogin" for="password">Password</label>
                    <input type="password" name="password">
                </div>

                <input class="btn btn-primary" type="submit" id="loginBtn" name="login" value="login">
            </form>
        </div>
    </center>

</body>

</html>