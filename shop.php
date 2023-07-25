<?php 
include("header.php");
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

  <div class="ltn__breadcrumb-area ltn__breadcrumb-area-4 ltn__breadcrumb-color-white---">
    <div class="container">
        <div class="">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner text-center">
                    <h1 class="ltn__page-title"><b>Shop</b></h1>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li class="home"><a href="index.html">Home></a></li>
                            <li>Shop</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<section class="py-5">
    <div class="container px-1 px-xxl-5 ">
        <div class="row gx-4 gx-xxl-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <div class="col mb-5">
                <form action="manage_cart.php" method="POST">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="../final/wtlImages/cart_4.png" alt="...">
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Suhana Paneer Makhanwala Spice Mix 50g Pouch</h5>
                                <hr>
                                <!-- Product price-->
                                <h5>₹45</h5>
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <button type="submit" name="Add_To_Cart" class="btn btn-outline-dark mt-auto" href="#">Add to cart</button>
                                <input type="hidden" name="Item_Name" value="Suhana Paneer Makhanwala Spice Mix 50g Pouch">
                                <input type="hidden" name="Price" value="45">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col mb-5">
                <form action="manage_cart.php" method="POST">
                    <div class="card h-100">
                        <!-- Sale badge-->
                        <div class="badge text-white position-absolute" style="top: 0.5rem; right: 0.5rem; background-color: #E55472;">Sale</div>
                        <!-- Product image-->
                        <img class="card-img-top" src="../final/wtlImages/cart_1.png" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Suhana Paneer Butter Masala Spice Mix 50g Pouch</h5>
                                <hr>
                                <!-- Product price-->
                                <h5>₹45</h5>
                                <!-- <span class="text-muted text-decoration-line-through">₹20.00</span>
                                ₹18.00 -->
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <button type="submit" name="Add_To_Cart" class="btn btn-outline-dark mt-auto">Add to cart</button>
                                <input type="hidden" name="Item_Name" value="Suhana Paneer Butter Masala Spice Mix 50g Pouch">
                                <input type="hidden" name="Price" value="45">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col mb-5">
                <form action="manage_cart.php" method="POST">
                    <div class="card h-100">
                        <!-- Sale badge-->
                        <div class="badge text-white position-absolute" style="top: 0.5rem; right: 0.5rem; background-color: #E55472;">Sale</div>
                        <!-- Product image-->
                        <img class="card-img-top" src="../final/wtlImages/cart_5.png" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Suhana Ready-to-cook Chicken Chilli (Dry) Mix 50g Pouch</h5>
                                <hr>
                                <!-- Product price-->
                                <h5>₹45.00</h5>
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <button type="submit" name="Add_To_Cart" class="btn btn-outline-dark mt-auto" href="#">Add to cart</button> 
                                <input type="hidden" name="Item_Name" value="Suhana Ready-to-cook Chicken Chilli (Dry) Mix 50g Pouch">
                                <input type="hidden" name="Price" value="45">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col mb-5">
                <form action="manage_cart.php" method="POST">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="../final/wtlImages/cart_8.png" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Ambari Chilli Powder 1kg Pouch</h5>
                                <hr>
                                <!-- Product price-->
                                <span class="text-muted text-decoration-line-through">₹562</span>
                                <h5>₹555.00</h5>
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <button type="submit" name="Add_To_Cart" class="btn btn-outline-dark mt-auto">Add to cart</button>
                                <input type="hidden" name="Item_Name" value="Ambari Chilli Powder 1kg Pouch">
                                <input type="hidden" name="Price" value="555">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col mb-5">
                <form action="manage_cart.php" method="POST">
                    <div class="card h-100">
                        <!-- Sale badge-->
                        <div class="badge text-white position-absolute" style="top: 0.5rem; right: 0.5rem; background-color: #E55472;">Sale</div>
                        <!-- Product image-->
                        <img class="card-img-top" src="../final/wtlImages/cart_3.png" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Suhana Paneer Tikka Spice Mix 50g Pouch</h5>
                                <hr>
                                <!-- Product price-->
                                <!-- <span class="text-muted text-decoration-line-through">₹50.00</span> -->
                                <h5>₹45.00</h5>
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <button type="submit" name="Add_To_Cart" class="btn btn-outline-dark mt-auto" href="#">Add to cart</button>
                                <input type="hidden" name="Item_Name" value="Suhana Paneer Tikka Spice Mix 50g Pouch">
                                <input type="hidden" name="Price" value="45">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col mb-5">
                <form action="manage_cart.php" method="POST">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="../final/wtlImages/cart_2.png" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Suhana Shahi Paneer Spice Mix 50g Pouch</h5>
                                <hr>
                                <!-- Product price-->
                                <h5>₹45</h5>
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <button type="submit" name="Add_To_Cart" class="btn btn-outline-dark mt-auto" href="#">View options</button>
                                <input type="hidden" name="Item_Name" value="Suhana Shahi Paneer Spice Mix 50g Pouch">
                                <input type="hidden" name="Price" value="45">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col mb-5">
                <form action="manage_cart.php" method="POST">
                    <div class="card h-100">
                        <!-- Sale badge-->
                        <div class="badge text-white position-absolute" style="top: 0.5rem; right: 0.5rem; background-color: #E55472;">Sale</div>
                        <!-- Product image-->
                        <img class="card-img-top" src="../final/wtlImages/cart_7.png" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Suhana Kadai Paneer Spice Mix 50g Pouch</h5>
                                <hr>
                                <!-- Product price-->
                                <!-- <span class="text-muted text-decoration-line-through">₹20.00</span> -->
                                <h5>₹45</h5>
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <button type="submit" name="Add_To_Cart" class="btn btn-outline-dark mt-auto" href="#">Add to cart</button>
                                <input type="hidden" name="Item_Name" value="Suhana Kadai Paneer Spice Mix 50g Pouch">
                                <input type="hidden" name="Price" value="45">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col mb-5">
                <form action="manage_cart.php" method="POST">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="../final/wtlImages/cart_9.png" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Ambari Kanda Lasun Masala 500g Pouch</h5>
                                <hr>
                                <!-- Product price-->
                                <h5>₹140</h5>
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <button type="submit" name="Add_To_Cart" class="btn btn-outline-dark mt-auto" href="#">Add to cart</button>
                                <input type="hidden" name="Item_Name" value="Ambari Kanda Lasun Masala 500g Pouch">
                                <input type="hidden" name="Price" value="140">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>





<?php
    include("footer.php");
?>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>