<!DOCTYPE html>
<html lang="en-us">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <h1 class="brand">KCB Loan Management System</h1>
        <ul>
            <li> <a href="#">Home</a></li>
            <li> <a href="#">download pdf</a></li>
            <li> <a href="#">updates</a></li>
            <li> <a href="#">Track Loan</a></li>
            <li> <a href="login.php" class="btn btn-success ">login</a></li>
        </ul>
    </nav>
    <div class="section1">
        <label class="imageText"> Hello, welcome to KCB-LTMS</label>
        <img class="image" src="./images/kcb.png" alt="">

    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="welcome" src="./images/kcb3.jpg" alt="">
            </div>
            <div class="col-md-8">
                <h3>Welcome to KCB loan tracking management system</h3>
                <p>This system will provide you with quality services for you to know all the details pertaining
                    <span>loan
                        management</span>
                </p>
                <p>The services include<br>1.Loan pdf guide<br>2.Real-time loan tracking<br>3.Generating monthly
                    reports<br></p>

            </div>

        </div>

    </div>
    <center>
        <h1><span>Our services</span></h1>
    </center>
    <div class="container">
        <div class="row">
            <div class="col-md-4">

                <img class="services" src="./images/pdfimage.jpg" alt="">
                <p>We provide you with a loan pd guide to allow you to have at least a glimpse on how our loans are
                    being carried around, requirements and so many details. This will prepare you to know all the
                    requirements and rate yourself before applying for our loans. </p>

            </div>
            <div class="col-md-4">

                <img class="services" src="./images/service1.jpg" alt="">
                <p>We also generate monthly reports for our esteemed customers pertaining their loans via their email
                    accounts theta have been registered through our system.</p>

            </div>
            <div class="col-md-4">

                <img class="services" src="./images/realtime.jpg" alt="">
                <p>Moreover, we also provide real time details about your loan. Join us today to enjoy the future of yur
                    funds</p>

            </div>
        </div>
    </div>
    <center>
        <h1 class="news">Subscribe to our Newsletter</h1>
    </center>
    <div align="center" class="subscribe">
        <form action="post">
            <div class="sub">
                <label for="name" class="lab">Name</label>
                <input class="input-area" type="text" name="name">
            </div>
            <div class="sub">
                <label for="name" class="lab">Email</label>
                <input class="input-area" type="email" name="email">
            </div>
            <div class="sub">
                <label for="name" class="lab">Phone</label>
                <input class="input-area" type="tel" name="phone number">
            </div>
            <div class="sub">
                <label for="message" class="lab">message</label>
                <textarea name="message" id="textarea" cols="30" rows="10"></textarea>
            </div>
            <div class="sub">

                <input class="btn btn-secondary" type="submit" value="submit" id="submit">
            </div>

        </form>
    </div>
    <footer>
        <h4 class="copy">All @copyright reserved by KCB</h4>
    </footer>

</body>

</html>