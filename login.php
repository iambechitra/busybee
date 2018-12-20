<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PSD TO HTML</title>
    <link href="index.php">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
   <!------------------- header part start------------------->
    <div class="full-wrapper menu-bar">
        <div class="wrapper">
            <div class="logo">
                <a href="index.php"><img src="images/Resto.png" alt="logo"></a>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">Service</a></li>
                    <li><a href="#menu">Menu</a></li>
                    <li><a href="#team">Team</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><input type="search" placeholder="Search Here"></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="registration.php">Register</a></li>
                </ul>
            </div>
            <div class="clr"></div>
        </div>
    </div>
<!--    background & login part start -->
     <div class="full-wrapper banner-bg">
        <div class="wrapper">
            <div class="header-text">
                <h1>Resto<span>..</span></h1>
                <p>Login here</p>
                <form action="" method="post">
                    <input type="email" name = "email" placeholder="Enter Your Email"><br>
                    <input type="password" name = "password" placeholder="Enter Your Password"><br>
                    <button type="submit" method="post" value="Login">Login</button>
                </form>
            </div>
        </div>
    </div>
<!--    background & login part end-->
    
    </body>
</html>

<?php


if($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];
    $pass = $_POST['password'];
    
    if($email == "" || $pass == "") { 

        echo "null field found!";

    }
    
    else 

    {

        $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "busybee";

// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "SELECT email, pass FROM USER_TABLE";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
        while($row = $result->fetch_assoc()) {
            
                if($row['email'] == $email && $row['pass'] == $pass) {
                    header('Location: registration.php');
                }
            
        }

        echo "email or pass not matched";

    } else {
        echo "0 results";
    }
    $conn->close();

    }

}