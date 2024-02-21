<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="style.css">
</head>

<body background="./images/welcome.jpg" class="bodyReg">
    <center>
        <div class="RegForm">
            <center class="titleReg">
                Registration Form
            </center>
            <form action="sign_check.php" method="POST" class="formReg">
                <div>
                    <label for="name" class="labelReg">Name as per ID</label>
                    <input class="input-area" type="text" name="name">
                </div>

                <div>
                    <label for="name" class="labelReg">Phone Number</label>
                    <input class="input-area" type="tel" name="phone">
                </div>

                <div>
                    <label for="idNumber" class="labelReg">ID Number</label>
                    <input class="input-area" type="text" name="idNumber">
                </div>

                <div>
                    <label for="county" class="labelReg">County</label>
                    <input class="input-area" type="text" name="county">
                </div>

                <div>
                    <label for="dob" class="labelReg">Date of Birth</label>
                    <input class="input-area" type="calendar" name="dob">
                </div>

                <div>
                    <label for="street" class="labelReg">street Name</label>
                    <input class="input-area" type="text" name="street">
                </div>
                <div>
                    <label for="email" class="labelReg">Email</label>
                    <input class="input-area" type="email" name="email">
                </div>
                <div>
                    <label for="password" class="labelReg">password</label>
                    <input class="input-area" type="text" name="password">
                </div>
                <div>
                    <label for="con-password" class="labelReg">Confirm password</label>
                    <input class="input-area" type="text" name="con-password">
                </div>
                <input class="btn btn-secondary" type="submit" id="RegBtn" name="register" value="Register">
            </form>
        </div>
    </center>

</body>

</html>