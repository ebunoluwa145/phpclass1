<?php
if($_POST["submit"]){
    $firstname = $_POST["firstname"];
    $nickname = $_POST["nickname"];
    $email = $_POST["email"];
    $phone_n = $_POST["phone_no"];

    $db = new mysqli('localhost', 'root', '', 'techone');
    $sql = "INSERT INTO orders(firstname,  nickname) VALUES('$firstname', '$nickname')";
    $sql2 = "INSERT INTO customers( email, phone_no) VALUES('$email', '$phone_no')";

    $db -> query($sql);
    $db -> query($sql2);
    echo $phone_no;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="signupStyle.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@100;300;400;500;800;900&family=Rubik:wght@300&display=swap" rel="stylesheet">
</head>

<body>
    <div class="header">
        <div style="display: flex;">
            <img src="images/hgt.png" alt="">
            <!-- <i class="fa fa-flag-o" aria-hidden="true" style="margin-right: 50px;"></i> -->
            <!-- <ul>
                <a href="#">
                    <li>Home</li>
                </a>
                <a href="#">
                    <li>About</li>
                </a>
                <a href="#">
                    <li>contact Us</li>
                </a>



            </ul> -->

        </div>
        <div style="margin-top: 30px;">
            <a href="login.html"><i class="fa fa-sign-in" aria-hidden="true" style="text-decoration: none; color:black; margin-right: 5px;"></i></a>

        </div>



    </div>

    <div class="container">
        <div class="top">
            <img src="images/hgt.png" alt="">
            <h2>Register</h2>

        </div>

        <form method="post">
            <label>Phone number</label>
            <div class="number">
                <i class="fa fa-phone icon" aria-hidden="true"></i>
                <input type="number" placeholder="+234 1234567890" name="phone_no">

            </div>


            <label>Name</label>
            <div class="text">
                <i class="fa fa-envelope-o icon" aria-hidden="true"></i>
                <input type="text" placeholder="full name" name="firstname">

            </div>
            <label>Username</label>
            <div class="text">
                <i class="fa fa-envelope-o icon" aria-hidden="true"></i>
                <input type="text" placeholder="username" name="nickname">

            </div>
            <label>Email</label>
            <div class="email">
                <i class="fa fa-envelope-o icon" aria-hidden="true"></i>
                <input type="email" placeholder="@tchalla wakanda.com" name="email">

            </div>

            <!-- <label>password</label> -->
            <!-- <div class="lock">
                <i class="fa fa-lock icon" aria-hidden="true"></i>
                <input type="password" required>

            </div> -->

            <!-- <label>Confirm Password</label>
            <div class="lock">
                <i class="fa fa-lock icon" aria-hidden="true"></i>
                <input type="password" required>

            </div> -->
            <div class="submit">
                
                <input type="submit" name="submit"></input>
              

            </div>
            <br>
            <label >Gender</label>
            <input type="radio" value="male" name ="gender">male
            <br>
            <input type="radio"  value="female" name ="gender">female

        </form>

    </div>
    <p class="account"><b>Already an account?
        <a href="login.html" class="link">sign in and continue <i class="fa fa-sign-in" aria-hidden="true" style="margin-left:5px;"></i></b></a>
    </p>

    <div class="footer">
        <p>Go make something awesome</p>
        <ul>
            <li>Terms of Service</li>
            <li>Private Policy</li>
            <li>Fontawesome,Inc</li>

        </ul>

    </div>

</body>

</html>