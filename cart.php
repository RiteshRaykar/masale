<?php
include("header.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../final/style.css">

  <title>Bootstrap Site</title>
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>


<div class="ltn__breadcrumb-area ltn__breadcrumb-area-4 ltn__breadcrumb-color-white---">
    <div class="container">
        <div class="">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner text-center">
                    <h1 class="ltn__page-title"><b>My Cart</b></h1>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li class="home"><a href="index.html">Home></a></li>
                            <li>My cart</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1>My Cart</h1>
            </div>
                <div class="col-lg-9">
                    <table class="table">
                        <thead class="text-center">
                            <tr>
                            <th scope="col">Serial No.</th>
                            <th scope="col">Item Name</th>
                            <th scope="col">Item Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <?php 
                                $total=0;
                                if(isset($_SESSION['cart']))
                                {
                                    foreach($_SESSION['cart'] as $key => $value)
                                    {
                                        $sr=$key+1;
                                        $total=$total+$value['Price'];
                                        echo"
                                            <tr>
                                                <td>$sr</td>
                                                <td>$value[Item_Name]</td>
                                                <td>$value[Price]</td>
                                                <td><input class='text-center' type='number' value='$value[Quantity]' min='1' max='10'</td>
                                                <form action='manage_cart.php' method='POST'>
                                                <td><button name='Remove_Item' class='btn btn-sm btn-outline-danger'>Remove<?button></td>
                                                <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                                </form>
                                            </tr>
                                        ";
                                    }
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
                

                <div class="col-lg-3">
                    <div class="border bg-light rounded p-4">
                        <h4>Total:</h4>
                        <h5 class="text-right"  ><?php echo $total?></h5>
                        <br>
                        <form>
                            <button class="btn btn-primary btn-block justify-content-center">Make Purchase</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<?php
include("footer.php");
?>

</body>
</html>