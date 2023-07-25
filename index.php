<?php 
include("header.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../final/style.css">
    <link rel="stylesheet" href="variables.sass">
    <link rel="stylesheet" href="../final/style2.css">

    <link rel="stylesheet" href="https://fontawesome.com/icons/magnifying-glass?f=classic&s=regular">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    
    <link rel="shortcut icon" href="./assets/images/logo/favicon.ico" type="image/x-icon">



    <title>Intership</title>
</head>
<body>


<!-- 
<section class="slider-container">
  <div class="slider-wrapper">
    <div class="slider">
      <img id="slider-1" src="../final/images/slider_1.jpg" alt="">
      <img id="slider-2" src="../final/wtlImages/slider_1.png" alt="">
      <img id="slider-3" src="../final/wtlImages/slider_1.jpg" alt="">
    </div>
    <div class="slider-nav">
      <a href="#slider-1"></a>
      <a href="#slider-2"></a>
      <a href="#slider-3"></a>
    </div>
  </div>
</section> -->



<?php 
include('slider.php');
?>




  <div class="row row-cols-1 hover-zoom row-cols-md-4 g-4 p-5 mx-auto ">
    <div class="col">
      <div class="card ">
        <img src="../final/wtlImages/slider_1.jpg" class="card-img-top pt-0" alt="...">
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="../final/wtlImages/banner_5.jpg" class="card-img-top pt-0" alt="...">
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="../final/wtlImages/banner_4.jpg" class="card-img-top pt-0" alt="...">
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="../final/wtlImages/banner_6.jpg" class="card-img-top pt-0" alt="...">
      </div>
    </div>
  </div>


  <!-- nav-tabs -->



  <!-- Nav tabs -->
  <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active text-black" id="home-tab" data-toggle="tab" data-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">NEW ARRIVAL</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link text-black" id="profile-tab" data-toggle="tab" data-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">TOP SALES</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link text-black" id="messages-tab" data-toggle="tab" data-target="#messages" type="button" role="tab" aria-controls="messages" aria-selected="false">OFF SALES</button>
    </li>
  </ul>
  
  <!-- Tab panes -->
  <div class="tab-content">
    <div class="tab-pane fade show active w-75 mx-auto" id="home" role="tabpanel" aria-labelledby="home-tab">
      <div class="row row-cols-1 row-cols-md-4 p-5 mx-auto">
        <div class="col">
          <div class="card h-75" style="border: none;">
              <img src="../final/wtlImages/cart_2.png" class="card-img-top" alt="..." style="padding-top:50px;">
              <div class="product-badge">
                <ul>
                  <li class="badge-2">10%</li>
                </ul>
              </div>
                  <br>
                  <br>
              <div class="card-body">
                <h5 class="card-title">Suhana Shahi Paneer Spice Mix 50g Pouch</h5>
                <hr>
                  <div class="card-price">
                  <span>₹38.00</span>
                  <del>₹45.00</del>
                  </div>
              </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-75" style="border: none;">
            <img src="../final/wtlImages/cart_7.png" class="card-img-top " alt="..." style="padding-top:50px;">
            <div class="product-badge">
              <ul>
                <li class="badge-1">HOT</li>
              </ul>
            </div>
                <br>
                <br>
            <div class="card-body">
              <h5 class="card-title">Suhana Kadai Paneer Spice Mix 50g Pouch</h5>
              <hr>
              <div class="card-price">
                    <span>₹38.00</span>
                    <del>₹45.00</del>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-75" style="border: none;">
            <img src="../final/wtlImages/cart_11.png" class="card-img-top" alt="..." style="padding-top:50px;">
            <div class="product-badge">
                <ul>
                  <li class="badge-2">12%</li>
                </ul>
            </div>
                <br>
                <br>
            <div class="card-body">
              <h5 class="card-title">Suhana Biryani Masala 50g Box</h5>
              <hr>
              <div class="card-price">
                    <span>₹37.00</span>
                    <del>₹45.00</del>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-75" style="border: none;">
            <img src="../final/wtlImages/cart_13.png" class="card-img-top" alt="..." style="padding-top:50px;">
            <div class="product-badge">
              <ul>
                <li class="badge-1">HOT</li>
              </ul>
            </div>
                <br>
                <br>
            <div class="card-body">
              <h5 class="card-title">Suhana Chicken Masala 50g Box</h5>
              <hr>
              <div class="card-price">
                    <span>₹38.00</span>
                    <del>₹45.00</del>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



    <div class="tab-pane w-75 mx-auto" id="profile" role="tabpanel" aria-labelledby="profile-tab">
      <div class="row row-cols-1 row-cols-md-4  p-5 mx-auto">
        <div class="col">
          <div class="card h-75" style="border: none;">
            <img src="../final/wtlImages/cart_4.png" class="card-img-top" alt="..." style="padding-top:50px;">
            <div class="product-badge">
                <ul>
                  <li class="badge-1">HOT</li>
                </ul>
            </div>
                <br>
                <br>
            <div class="card-body">
              <h5 class="card-title">Suhana Paneer Makhanwala Spice Mix 50g Pouch</h5>
              <hr>
                <div class="card-price">
                <span>₹38.00</span>
                <del>₹45.00</del>
                </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-75" style="border: none;">
            <img src="../final/wtlImages/cart_3.png" class="card-img-top " alt="..." style="padding-top:50px;">
            <div class="product-badge">
                <ul>
                  <li class="badge-1">HOT</li>
                </ul>
            </div>
                <br>
                <br>
            <div class="card-body">
              <h5 class="card-title">Suhana Paneer Tikka Spice Mix 50g Pouch</h5>
              <hr>
              <div class="card-price">
                    <span>₹38.00</span>
                    <del>₹45.00</del>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-75" style="border: none;">
            <img src="../final/wtlImages/cart_14.jpg" class="card-img-top" alt="..." style="padding-top:50px;">
            <div class="product-badge">
                <ul>
                  <li class="badge-2">10%</li>
                </ul>
            </div>
                <br>
                <br>
            <div class="card-body">
              <h5 class="card-title">Suhana Mutton Masala 50g Box</h5>
              <hr>
              <div class="card-price">
                    <span>₹38.00</span>
                    <del>₹45.00</del>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-75" style="border: none;">
            <img src="../final/wtlImages/cart_13.png" class="card-img-top" alt="..." style="padding-top:50px;">
            <div class="product-badge">
                <ul>
                  <li class="badge-1">HOT</li>
                </ul>
            </div>
                <br>
                <br>
            <div class="card-body">
              <h5 class="card-title">Suhana Chicken Masala 50g Box</h5>
              <hr>
              <div class="card-price">
                    <span>₹38.00</span>
                    <del>₹45.00</del>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



    <div class="tab-pane w-75 mx-auto" id="messages" role="tabpanel" aria-labelledby="messages-tab">
      <div class="row row-cols-1 row-cols-md-4  p-5 mx-auto">
        <div class="col">
          <div class="card h-75" style="border: none;">
            <img src="../final/wtlImages/cart_1.png" class="card-img-top" alt="..." style="padding-top:50px;">
            <div class="product-badge">
                <ul>
                  <li class="badge-2">10%</li>
                </ul>
            </div>
                <br>
                <br>
            <div class="card-body">
              <h5 class="card-title">Suhana Paneer Butter Masala Spice Mix 50g Pouch</h5>
              <hr>
                <div class="card-price">
                <span>₹38.00</span>
                <del>₹45.00</del>
                </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-75" style="border: none;">
            <img src="../final/wtlImages/cart_8.png" class="card-img-top " alt="..." style="padding-top:50px;">
            <div class="product-badge">
                <ul>
                  <li class="badge-2">10%</li>
                </ul>
            </div>
                <br>
                <br>
            <div class="card-body">
              <h5 class="card-title">Ambari Chilli Powder 1kg Pouch</h5>
              <hr>
              <div class="card-price">
                    <span>₹38.00</span>
                    <del>₹45.00</del>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-75" style="border: none;">
            <img src="../final/wtlImages/cart_9.png" class="card-img-top" alt="..." style="padding-top:50px;">
            <div class="product-badge">
                <ul>
                  <li class="badge-1">HOT</li>
                </ul>
            </div>
                <br>
                <br>
            <div class="card-body">
              <h5 class="card-title">Ambari Kanda Lasun Masala 500g Pouch</h5>
              <hr>
              <div class="card-price">
                    <span>₹38.00</span>
                    <del>₹45.00</del>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-75" style="border: none;">
            <img src="../final/wtlImages/cart_6.png" class="card-img-top" alt="..." style="padding-top:50px;">
            <div class="product-badge">
                <ul>
                  <li class="badge-1">HOT</li>
                </ul>
            </div>
                <br>
                <br>
            <div class="card-body">
              <h5 class="card-title">Suhana Ready-to-cook Chicken Chilli (Dry) Mix 50g Pouch</h5>
              <hr>
              <div class="card-price">
                    <span>₹38.00</span>
                    <del>₹45.00</del>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>







<div class="row row-cols-1 row-cols-md-2 g-5 p-5 w-75 mx-auto">
  <div class="col">
    <div class="card">
      <img src="../final/wtlImages/banner_1.jpg" class="card-img-top" alt="...">
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="../final/wtlImages/banner_1.jpg" class="card-img-top" alt="...">
    </div>
  </div>
  </div>




<nav class="nav-tabs nav-tabs-expand-sm bg-white mh-100 p-4">
<div>
  <ul class="nav nav-tabs justify-content-center bg-white" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link text-black active" id="new_arrival-tab" data-bs-toggle="tab" data-bs-target="#new_arrival-tab-pane" type="button" role="tab" aria-controls="new_arrival-tabpane" aria-selected="true">NEW ARRIVLA</button>
    </li>
  </ul>
  <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active w-75 mx-auto" id="home-tab-pane" role="tabpanel" aria-labelledby="new_arrival-tab" tabindex="0">
       <!-- new_arrival Tab cards -->
        <div class="row row-cols-1 row-cols-md-4 g-4 p-5 mx-auto">
            <div class="col">
              <div class="card h-75" style="border: none;"> 
                <img src="../final/wtlImages/top_products_1.png" class="card-img-top" alt="...">
                <div class="product-badge">
                    <ul>
                      <li class="badge-2">10%</li>
                    </ul>
                </div>
                <br>
                <br>
                <div class="card-body">
                  <h5 class="card-title">Suhana Kesar Milk Masala 10g Dabbi</h5>
                  <hr>
                    <div class="card-price">
                    <span>₹38.00</span>
                    <del>₹45.00</del>
                    </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-75" style="border: none;">
                <img src="../final/wtlImages/top_products_2.png" class="card-img-top " alt="...">
                <div class="product-badge">
                    <ul>
                      <li class="badge-1">HOT</li>
                    </ul>
                </div>
                <br>
                <br>
                <div class="card-body">
                  <h5 class="card-title">Suhana Chicken Biryani Masala 25g Pouch Spice Mix</h5>
                  <hr>
                  <div class="card-price">
                        <span>₹38.00</span>
                        <del>₹45.00</del>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-75" style="border: none;">
                <img src="../final/wtlImages/top_products_3.png" class="card-img-top" alt="...">
                <div class="product-badge">
                    <ul>
                      <li class="badge-2">12%</li>
                    </ul>
                </div>
                <br>
                <br>
                <div class="card-body">
                  <h5 class="card-title">Suhana Shahi Garam Masala 50g Box</h5>
                  <hr>
                  <div class="card-price">
                        <span>₹38.00</span>
                        <del>₹45.00</del>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-75" style="border: none;">
                <img src="../final/wtlImages/top_products_4.png" class="card-img-top" alt="...">
                <div class="product-badge">
                    <ul>
                      <li class="badge-1">HOT</li>
                    </ul>
                </div>
                <br>
                <br>
                <div class="card-body">
                  <h5 class="card-title">Suhana Sambar Masala 50g Box</h5>
                  <hr>
                  <div class="card-price">
                        <span>₹38.00</span>
                        <del>₹45.00</del>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>

  </div>
</div>
</nav>





<!-- Footer -->


<?php
  include("footer.php");
?>



<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>



<script src="../final/script.js"></script>


</body>
</html>








