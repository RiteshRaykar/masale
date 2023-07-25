<?php
include("header.php");

    include('php/connection.php');
    if(isset($_POST['submit'])){
        $firstname=mysqli_real_escape_string($con,$_POST['firstname']);
        $lastname=mysqli_real_escape_string($con,$_POST['lastname']);
        $email=mysqli_real_escape_string($con,$_POST['email']);
        $password=mysqli_real_escape_string($con,$_POST['password']);
        $c_password=mysqli_real_escape_string($con,$_POST['c_password']);
    
    if(empty($firstname)){
        $error="firstname field is required*";
    }
    if(empty($lastname)){
        $error="lastname field is required*";
    }
    elseif(empty($email)){
        $error="email field is required*";
    }
    elseif(empty($password)){
        $error="password field is required*";
    }
    elseif($password != $c_password){
        $error="password does not match";
    }
    else{
        $check_email="SELECT * FROM users WHERE email='$email'";
        $data=mysqli_query($con, $check_email);
        $result=mysqli_fetch_array($data);
        if($result >0){
            $error="Email already exits";
        }
        else{
            // $pass=md5($password);
            $pass=($password);
            $insert="INSERT INTO users (firstname, lastname, email, password) Values('$firstname','$lastname','$email','$pass')";

            $q=mysqli_query($con, $insert);
            if ($q){
                $success="You account has been created successfully";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://kit.fontawesome.com/8325a43516.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="register.css">
    <link rel="stylesheet" href="login2.css">
    <title>Document</title>
</head>
<body>
  

  <div class="ltn__breadcrumb-area ltn__breadcrumb-area-4 ltn__breadcrumb-color-white---">
    <div class="container">
        <div class="">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner text-center">
                    <h1 class="ltn__page-title">Account</h1>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="index.html">Home></a></li>
                            <li>Register</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="ltn__login-area pb-90">
  <div class="container">
      <div class="row">
          <div class="col-lg-12">
              <div class="section-title-area text-center">
                  <h1>Register <br>Your Account</h1>
                  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. <br>
                       Sit aliquid,  Non distinctio vel iste.</p>
              </div>
          </div>
      </div>
      <br>
      <br>
      <br>
      <div class="row">
          <div class="col-lg-6 offset-lg-3">
              <div class="account-login-inner" style="color: gray;">
                    <p style="color:red"> 
                        <?php 
                            if(isset($error)){
                                echo $error;
                            }
                        ?>
                    </p>
                    <p style="color:green"> 
                        <?php 
                            if(isset($success)){
                                echo $success;
                            }
                        ?>
                    </p>

                    <form action="#" method="post" class="ltn__form-box contact-form-box">
                        <input type="text" name="firstname" id="firstname" placeholder="First Name" value="<?php 
                        if(isset($error)) 
                        {
                            echo $firstname;
                        } ?>">
                        <input type="text" name="lastname" id="lastname" placeholder="Last Name" value="<?php 
                            if(isset($error)){
                                echo $lastname;
                            }
                        ?>">
                        <input type="text" name="email" id="name" placeholder="Email*" value="<?php 
                             if(isset($error)){
                                echo $email;
                            }
                        ?>">
                        <input type="password" name="password" id="password" placeholder="Password*">
                        <input type="password" name="c_password" id="c_password" placeholder="Confirm Password*">
                        <label class="checkbox-inline">
                            <input type="checkbox" value="">
                            I consent to Herboil processing my personal data in order to send personalized marketing material in accordance with the consent form and the privacy policy.
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" value="">
                            By clicking "create account", I consent to the privacy policy.
                        </label>
                        <br>
                        <br>
                        <div class="btn-wrapper justify-content-center">
                            <button class="theme-btn-1 btn reverse-color btn-block" type="submit" name="submit">CREATE ACCOUNT</button>
                        </div>
                     </form>
                    <br>
                  <div class="by-agree text-center" style="color: gray;">
                      <p>By creating an account, you agree to our:</p>
                      <p><a href="#">TERMS OF CONDITIONS  &nbsp; &nbsp; | &nbsp; &nbsp;  PRIVACY POLICY</a></p>
                      <div class="go-to-btn mt-50">
                          <a href="login.html">ALREADY HAVE AN ACCOUNT ?</a>
                      </div>
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
