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
                <p>Book your reservation here<br></p>
                
                <form action="" method="post" name="rform" onsubmit="return validateForm()">
                   <input type="text" name ="fname" placeholder="Enter Your First name"><br>
                   <input type="text" name="lname" placeholder="Enter Your Last name"><br>
                    <input type="date" name="date"><br>
                    <input type="text" name="no_of_person" placeholder="Enter no of Person"><br>
                     <input type="text" placeholder="Enter time of reservation"><br>
                    <button type="submit" method="post" value="register">Reserve</button>
                </form>
            </div>
        </div>
    </div>
    <!------------ banner & registration part end----------->
    </body>
</html>