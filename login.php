<?php
include("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="shortcut icon" href="./assets/images/logo/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="login2.css">
    <title>Document</title>
</head>
<body>


  <div class="ltn__breadcrumb-area ltn__breadcrumb-area-4 ltn__breadcrumb-color-white---">
    <div class="container">
        <div class="">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner text-center">
                    <h1 class="ltn__page-title"><b>Account</b></h1>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li class="home"><a href="index.html">Home></a></li>
                            <li>login</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="ltn__login-area pb-85">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area text-center">
                    <h1>Sign In <br>To  Your Account</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. <br>
                         Sit aliquid,  Non distinctio vel iste.</p>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="row">
            <div class="col-lg-6">
                <div class="account-login-inner">
                    <form action="#" method="post" class="ltn__form-box contact-form-box">
                        <input type="text" name="email" placeholder="Email*" id="email" required="" style="background-color: #f8f9fa; border-radius: 6px; padding-left: 20px;">
                        <input type="password" name="password" placeholder="Password*" id="password" required="" style="background-color: #f8f9fa; border-radius: 6px;">
                        <div class="btn-wrapper mt-0">
                            <button class="theme-btn-1 btn btn-block-50" type="submit" name="login" value="login">SIGN IN</button>
                        </div>
                        <div class="go-to-btn mt-20"><br> 
                            <a href="#"><small>FORGOTTEN YOUR PASSWORD?</small></a>
                        </div>
                    </form>
                    <?php 
                        include('php/connection2.php');
                        if(isset($_POST['login'])){
                            $email = $_POST['email'];
                            $pass = $_POST['password'];

                            $select="SELECT * FROM users WHERE email='$email' && password='$pass'";
                            $query=mysqli_query($con,$select);
                            $row=mysqli_num_rows($query);
                            echo $row; 


                            $fetch=mysqli_fetch_array($query);
                            if($row==1){
                                echo "<script>
                                        window.location.href='index.php';
                                    </script>";
                            }
                            else{
                                echo "<p style=color:red>Invalid Email/Password</p>";
                            }
                        }
                    ?>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="account-create text-center pt-50">
                    <h4>DON'T HAVE AN ACCOUNT?</h4>
                    <p>Add items to your wishlistget personalised recommendations <br>
                        check out more quickly track your orders register</p>
                    <div class="btn-wrapper">
                        <a href="../final/register.php" class="theme-btn-1 btn black-btn">CREATE ACCOUNT</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<br>
<br>
<br>



<!-- Footer -->

<?php
    include("footer.php");
?>



<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>
