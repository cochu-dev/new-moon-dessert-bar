<!doctype html>
<html lang="en">
  <?php
  require_once '../php/connection.php';
  $conn = connectMysql();
  require_once '../php/logged_in_header.php';
  ?>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="../bootstrap-5.0.1-dist/css/bootstrap-grid.min.css" rel="stylesheet">
    <link href="../bootstrap-5.0.1-dist/css/bootstrap.min.css" rel="stylesheet">

    <!--=== Main Style CSS ===-->
    <link href="../style/style.css" rel="stylesheet">

    <!-- Font Awesome styles CDN Link -->
    <link
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      rel="stylesheet"
      integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
      crossorigin="anonymous"
    />
    <title>New Moon Dessert Bar</title>

  </head>

<body class="shopping_body">

  <div class="wrapper_shopping"> 
    <div class="container-fluid">

      <div class="sectionShopping">
        <?php include 'shopping_headerNav.php' ?>
        

        <div class="row">
          <div class="col-sm-12">
            <h1> Shopping </h1>
            <p>| · Click on the picture to add to the cart · |</p>
          </div>
        </div>
        
        <div class="row">
          <?php 
              $products = getAllProducts($conn); 
              foreach ($products as $product): 
          ?>
          <div class="col-sm-12 col-lg-6 col-xl-3">
            <div class="my-img-class">
              <a href="productDetails.php?<?=$product['Product_ID']?>">
                <img class="imgItem" src="../img/<?= $product['Product_Img']; ?>" alt="<?=$product['Product_Img']?>">
              </a>
                <p class="shopping_productName"><?= $product['Product_Name']; ?></p> 
                <p class="shopping_productPrice">&dollar;<?= $product['Product_Price']; ?></p>
              
            </div>
          </div>
          <?php endforeach; ?> 
        </div>

        <div class="row">
              <nav class="shopping_pageNav" aria-label="Page navigation">
                <ul class="pagination justify-content-center" >
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item" >
                      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">...</a></li>
                    <li class="page-item">
                      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Next</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                          <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                    </li>
                </ul>
            </nav>
        </div>
      </div>

    

      <div class="my-floating-btn active " id="shopping-my-floating-btn">
          <button type="button" class="btn btn-lg my-btn btn-floating" id="sidebarCollapse" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart" aria-controls="offcanvasRight">
              <i class="fa fa-shopping-cart"></i>
            </button>
      </div>

      <!-- <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart" aria-controls="offcanvasCart">Toggle right offcanvas</button> -->

      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasCart" aria-labelledby="offcanvasCartLabel">
        <div class="offcanvas-header">
          <h5 id="offcanvasCartLabel">Shopping Cart</h5>
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <div class="row">
              <div class="col-sm-12 shopping_cart">
                  <form action="checkout.php" method="get">
                      <table class="cartTable">
                          <tbody>
                              <?php $totalprice = 0;?>

                              <?php foreach ($_SESSION['mycar'] as $product): ?>
                              <tr>
                                  <td class="cart_quantity">
                                      <h3> <?=$product['buy_num']?> </h3>

                                  </td>

                                  <td class="cart_img">
                                      <img src="../img/<?=$product['buy_img'];?>" style="width: 70px; padding:5px; border: 1px solid black;">
                                  </td>

                                  <td>
                                      <span> <?=$product['buy_name']?> </span>
                                  </td>

                                  <td class="cart_priceP">
                                      <span> &dollar;<?=$product['buy_price']?> </span>
                                  </td>

                                  <td class="cart_deleteP">
                                      <a href="../php/cart_delProduct.php?id=<?php echo $product['buy_id'];?>">Delete</a></td>
                                  </td>

                              </tr>
                              <?php $totalprice += $product['buy_price']?>
                              <?php endforeach; ?>

                          </tbody>
                          
                      </table>

                      <br>
                      

                      <br>
                      <div class="d-grid gap-2 col-lg-12 mx-auto">
                        <div class="row">
                          <div class="col-sm-6 back-col">
                            <a class="btn btn-primary back_button" type="button" href="shopping.php"> &#10094;   Continue Shopping</a>
                          </div>
                          <div class="col-sm-6 forward-col">
                            <input class="btn btn-primary forward_button" type="submit" value="Go To Checkout" name="placeorder">
                          </div>
                        </div>
                      </div>
                      
                      <?php $products = getProducts($_SERVER["QUERY_STRING"],$conn); ?>
                  </form>
              </div>
          </div>
        </div>
      </div>

      <!-- Sidebar  -->
      <!-- <nav id="sidebar">
          <div class="sidebar-header">
              <h3>Shopping Cart</h3>
          </div>

          <ul class="list-unstyled components">
              <p></p>
              <li class="active">
                  <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
                  <ul class="collapse list-unstyled" id="homeSubmenu">
                      <li>
                          <a href="#">Home 1</a>
                      </li>
                      <li>
                          <a href="#">Home 2</a>
                      </li>
                      <li>
                          <a href="#">Home 3</a>
                      </li>
                  </ul>
              </li>
              <li>
                  <a href="#">About</a>
              </li>
              <li>
                  <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
                  <ul class="collapse list-unstyled" id="pageSubmenu">
                      <li>
                          <a href="#">Page 1</a>
                      </li>
                      <li>
                          <a href="#">Page 2</a>
                      </li>
                      <li>
                          <a href="#">Page 3</a>
                      </li>
                  </ul>
              </li>
              <li>
                  <a href="#">Portfolio</a>
              </li>
              <li>
                  <a href="#">Contact</a>
              </li>
          </ul>

          <ul class="list-unstyled CTAs">
              <li>
                  <a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Download source</a>
              </li>
              <li>
                  <a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a>
              </li>
          </ul>
      </nav> -->
    </div>
  </div>
  <?php include_once '../footer.php'?>
  <?php include_once '../scripts.php'?>

</body>

</html>