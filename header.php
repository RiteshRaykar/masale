<?php 
session_start(); 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://fontawesome.com/icons/magnifying-glass?f=classic&s=regular">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="shop.css">
    <link rel="stylesheet" href="footer.css">

    <title>Document</title>
</head>
<body>
    
    
<nav class="navbar navbar-expand-lg bg-white sticky-top ">
    <divx class="container-fluid ">

      <a class="navbar-brand" href="../final/index.php"><img height="60px" width="120px" src="../final/wtlImages/logo.png"  alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mx-auto mb-lg-0" >
              <li class="nav-item">
                  <a class="nav-link" style="color: black;" href="../final/index.php">Home</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" style="color: black;" href="../final/shop.php">Shop</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" style="color: black;" href="#">Contact</a>
              </li>
          </ul>
      
          <div class="navbar-icons mb-lg-0" style="width: 20%;">
              <ul class="nav-icons mb-lg-0">
                  <li class="nav-item">
                      <a class="nav-link" href="#"><img src="../final/main_icons/search.svg" alt="search"></a>
                  </li>
                  
                  <div class="dropdown">
                    <button type="button" data-toggle="dropdown" aria-expanded="false" style="border: none; background-color: transparent;">
                      <a class="nav-link" href="#"><img src="../final/main_icons/person.svg" alt="#"></a>
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="../final/login.php">Login</a>
                      <a class="dropdown-item" href="../final/register.php">Register</a>
                      <a class="dropdown-item" href="../final/logout.php">Logout</a>
                    </div>
                  </div>

                  <li class="nav-item">
                      <a class="nav-link" href="#"><img src="../final/main_icons/heart.svg" alt="wishlist"></a>
                  </li>
                  <li class="nav-item">
                    <?php 
                        $count=0;
                        if(isset($_SESSION['cart']))
                        {  
                            $count=count($_SESSION['cart']);
                        }
                    ?>
                      <a class="nav-link" href="cart.php"><img src="../final/main_icons/handbag.svg" alt="cart">
                      <?php echo $count; ?> 
                    </a>
                  </li>
  
              </ul>
          </div>
      </div>
    </div>
  </nav>
</body>
</html>