<!doctype html>
<html lang="en">
  <?php
  require_once '../php/connection.php';
  $conn = connectMysql();
  session_start();
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
              <ul class="pagination justify-content-center">
                  <li class="page-item">
                      <a class="page-link" href="#" aria-label="Previous">
                          <span aria-hidden="true">&laquo;</span>
                      </a>
                  </li>
                  <li class="page-item">
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

  </div>

</body>

</html>