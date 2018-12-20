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
                <p>Hello Admin! Add Product</p>
                <form action="" method="post" name="add_product">
                    <input type="text" placeholder="Product ID"><br>
                    <input type="text" placeholder="Product name"><br>
                    <input type="text" placeholder="price"><br>
                    <input type="file"><br>
                    <button type="submit" method="post" value="add_product_btn">Add</button>
                </form>
            </div>
        </div>
    </div>
<!--    background & login part end-->
    
    </body>
</html>