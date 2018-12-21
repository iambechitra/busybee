<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <link href="login.php">
    <link href="registration.php">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/registration.js"></script>
</head>
<body>
   <!------------------- header part start------------------------->
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
    <!------------------- header part end-------------------------> 
      
    <!------------------- banner & registration part start-------------------->
    <div class="full-wrapper banner-bg" id="home">
        <div class="wrapper">
            <div class="header-text">
                <h1>Resto<span>..</span></h1>
                <p>Register here<br><br>*Required</p>
                
                <form action="" method="post" name="rform" onsubmit="return validateForm()">
                   <input type="text" name ="fname" placeholder="*Enter Your First name"><br>
                   <input type="text" name="lname" placeholder="*Enter Your Last name"><br>
                    <input type="email" name = "email" placeholder="*Enter Your Email"><br>
                    <input type="password" name="pass" placeholder="*Enter Your Password"><br>
                    <input type="password" name="pass_r" placeholder="*Re-enter Your Password"><br>
                    <label><input class="radio-btn" type="radio" name="gender" value="male"><h4>Male</h4></label>
                    <label><input class="radio-btn" type="radio" name="gender" value="female"><h4>Female</h4><br></label>
                    <button type="submit" method="post" value="register">Register</button>
                </form>
            </div>
        </div>
    </div>
    <!------------ banner & registration part end----------->
    </body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $pass_r = $_POST['pass_r'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $radio = "";

    if(!empty($_POST['gender'])) {
        $radio = $_POST['gender'];
    }
    
    
    
    if($email == "" || $pass == "" || $pass_r == "" || $fname==""||$lname=="" || $radio =="") { 

        echo "null field found!";

    }
    
    else 

    {

        if($pass == $pass_r) {

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "busybee";


            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 

            $sql = "insert into USER_TABLE(fname, lname, email, pass, gender, admin) values( '".$fname."','".$lname."','".$email."','".$pass."','".$radio."', 0)";
            
            if($conn->query($sql) === TRUE) {

                echo "<p align='center'>field added successfully!</p>";

            }

            $conn->close();
        } else {

            echo "password not matched";

        }

    } 

}